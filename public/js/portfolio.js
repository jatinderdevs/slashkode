(function () {
  gsap.registerPlugin(ScrollTrigger, Draggable);

  const section = document.querySelector(".projects-section");
  const viewport = document.getElementById("projectsViewport");
  const track = document.getElementById("projectsTrack");
  const progressEl = document.getElementById("projectsProgress");
  const dotsContainer = document.getElementById("projectsDots");
  const cards = gsap.utils.toArray(".project-card");

  if (!section || !viewport || !track || !cards.length) return;

  let cardWidth = 0;
  let gap = 0;
  let maxX = 0;
  let activeIndex = 0;
  let draggable = null;
  let st = null;
  let snapPoints = [];
  let isDesktop = window.matchMedia("(min-width: 769px)").matches;

  // Dots
  cards.forEach((_, i) => {
    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "projects-dot" + (i === 0 ? " is-active" : "");
    btn.setAttribute("aria-label", "Go to project " + (i + 1));
    btn.addEventListener("click", () => {
      if (isDesktop && st) {
        const p = cards.length > 1 ? i / (cards.length - 1) : 0;
        window.scrollTo({
          top: st.start + (st.end - st.start) * p,
          behavior: "smooth",
        });
      } else {
        goTo(i, true);
      }
    });
    dotsContainer.appendChild(btn);
  });
  const dots = gsap.utils.toArray(".projects-dot");

  function measure() {
    cardWidth = cards[0].offsetWidth;
    const style = getComputedStyle(document.documentElement);
    const gapRaw = style.getPropertyValue("--card-gap").trim();
    const temp = document.createElement("div");
    temp.style.width = gapRaw;
    document.body.appendChild(temp);
    gap = temp.offsetWidth || 24;
    document.body.removeChild(temp);

    const trackWidth = track.scrollWidth;
    const viewW = viewport.clientWidth;
    maxX = Math.min(0, viewW - trackWidth);
    snapPoints = cards.map((_, i) => -i * (cardWidth + gap));
  }

  function setActive(index) {
    activeIndex = Math.max(0, Math.min(cards.length - 1, index));
    cards.forEach((c, i) => c.classList.toggle("is-active", i === activeIndex));
    dots.forEach((d, i) => d.classList.toggle("is-active", i === activeIndex));
    const pct = cards.length > 1 ? (activeIndex / (cards.length - 1)) * 100 : 0;
    if (progressEl)
      gsap.to(progressEl, {
        width: pct + "%",
        duration: 0.3,
        ease: "power2.out",
      });
  }

  /* Mobile: drag one-by-one */
  function goTo(index, animate) {
    measure();
    const x = snapPoints[index] ?? 0;
    if (animate) {
      gsap.to(track, {
        x,
        duration: 0.65,
        ease: "power3.out",
        onUpdate: () => {
          if (draggable) draggable.update();
        },
        onComplete: () => setActive(index),
      });
    } else {
      gsap.set(track, { x });
      setActive(index);
    }
  }

  function initDraggable() {
    measure();
    if (draggable) {
      draggable.kill();
      draggable = null;
    }

    draggable = Draggable.create(track, {
      type: "x",
      bounds: { minX: maxX, maxX: 0 },
      edgeResistance: 0.85,
      dragResistance: 0.08,
      inertia: false,
      snap: {
        x: (value) => {
          let closest = snapPoints[0];
          let minDist = Math.abs(value - closest);
          for (let i = 1; i < snapPoints.length; i++) {
            const d = Math.abs(value - snapPoints[i]);
            if (d < minDist) {
              minDist = d;
              closest = snapPoints[i];
            }
          }
          return closest;
        },
      },
      onDragStart() {
        viewport.classList.add("is-dragging");
      },
      onDrag() {
        const x = this.x;
        let closest = 0,
          minDist = Infinity;
        snapPoints.forEach((p, i) => {
          const d = Math.abs(x - p);
          if (d < minDist) {
            minDist = d;
            closest = i;
          }
        });
        if (closest !== activeIndex) setActive(closest);
      },
      onDragEnd() {
        viewport.classList.remove("is-dragging");
        const x = this.x;
        let closest = 0,
          minDist = Infinity;
        snapPoints.forEach((p, i) => {
          const d = Math.abs(x - p);
          if (d < minDist) {
            minDist = d;
            closest = i;
          }
        });
        gsap.to(track, {
          x: snapPoints[closest],
          duration: 0.45,
          ease: "power3.out",
          onUpdate: () => {
            if (draggable) draggable.update();
          },
          onComplete: () => setActive(closest),
        });
      },
    })[0];

    gsap.set(track, { x: 0 });
    setActive(0);
  }

  /* Desktop: scroll → one card at a time */
  function initScrollTrigger() {
    measure();
    if (st) {
      st.kill();
      st = null;
    }

    gsap.set(track, { x: 0 });
    setActive(0);

    const perCard = Math.max(window.innerHeight * 0.72, 480);
    const scrollLength = (cards.length - 1) * perCard;

    st = ScrollTrigger.create({
      trigger: section,
      start: "center 32%",
      end: () => "+=" + scrollLength,
      pin: true,
      scrub: 0.7,
      anticipatePin: 1,
      invalidateOnRefresh: true,
      onUpdate: (self) => {
        const raw = self.progress;
        const x = maxX * raw;
        gsap.set(track, { x });

        const idx = Math.round(raw * (cards.length - 1));
        if (idx !== activeIndex) setActive(idx);
      },
    });
  }

  function setup() {
    isDesktop = window.matchMedia("(min-width: 769px)").matches;

    if (draggable) {
      draggable.kill();
      draggable = null;
    }
    if (st) {
      st.kill();
      st = null;
    }
    gsap.set(track, { clearProps: "x" });

    if (isDesktop) {
      viewport.style.cursor = "default";
      initScrollTrigger();
    } else {
      viewport.style.cursor = "grab";
      initDraggable();
    }
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        ScrollTrigger.refresh();
        if (typeof window.initServiceBlur === "function") {
          window.initServiceBlur();
        }
      });
    });
  }

  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      const was = isDesktop;
      isDesktop = window.matchMedia("(min-width: 769px)").matches;
      if (was !== isDesktop) {
        setup();
      } else if (isDesktop) {
        measure();
        ScrollTrigger.refresh();
      } else {
        measure();
        gsap.set(track, { x: snapPoints[activeIndex] || 0 });
        if (draggable) {
          draggable.applyBounds({ minX: maxX, maxX: 0 });
          draggable.update();
        }
      }
    }, 120);
  });

  // Keyboard
  viewport.setAttribute("tabindex", "0");
  viewport.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight" || e.key === "ArrowDown") {
      e.preventDefault();
      if (activeIndex < cards.length - 1) {
        if (isDesktop && st) {
          const p = (activeIndex + 1) / (cards.length - 1);
          window.scrollTo({
            top: st.start + (st.end - st.start) * p,
            behavior: "smooth",
          });
        } else {
          goTo(activeIndex + 1, true);
        }
      }
    } else if (e.key === "ArrowLeft" || e.key === "ArrowUp") {
      e.preventDefault();
      if (activeIndex > 0) {
        if (isDesktop && st) {
          const p = (activeIndex - 1) / (cards.length - 1);
          window.scrollTo({
            top: st.start + (st.end - st.start) * p,
            behavior: "smooth",
          });
        } else {
          goTo(activeIndex - 1, true);
        }
      }
    }
  });
  gsap.registerPlugin(ScrollTrigger, Draggable);
  requestAnimationFrame(() => setup());
})();
