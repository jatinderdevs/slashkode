(function () {
  const viewport = document.getElementById("projectsViewport");
  const track = document.getElementById("projectsTrack");
  const progressEl = document.getElementById("projectsProgress");
  const dotsContainer = document.getElementById("projectsDots");
  const cards = gsap.utils.toArray(".project-card");

  if (!viewport || !track || !cards.length) return;

  let cardWidth = 0;
  let gap = 0;
  let maxX = 0;
  let activeIndex = 0;
  let draggable;
  let snapPoints = [];

  // Build dots
  cards.forEach((_, i) => {
    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "projects-dot" + (i === 0 ? " is-active" : "");
    btn.setAttribute("aria-label", `Go to project ${i + 1}`);
    btn.addEventListener("click", () => goTo(i, true));
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
    return snapPoints;
  }

  function setActive(index) {
    activeIndex = Math.max(0, Math.min(cards.length - 1, index));
    cards.forEach((c, i) => c.classList.toggle("is-active", i === activeIndex));
    dots.forEach((d, i) => d.classList.toggle("is-active", i === activeIndex));
    const pct = cards.length > 1 ? (activeIndex / (cards.length - 1)) * 100 : 0;
    gsap.to(progressEl, {
      width: pct + "%",
      duration: 0.4,
      ease: "power2.out",
    });
  }

  function goTo(index, animate) {
    measure();
    const x = snapPoints[index] ?? 0;
    if (animate) {
      gsap.to(track, {
        x,
        duration: 0.7,
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
    if (draggable) draggable.kill();

    draggable = Draggable.create(track, {
      type: "x",
      bounds: { minX: maxX, maxX: 0 },
      edgeResistance: 0.82,
      dragResistance: 0.06,
      dragClickables: true,
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
        let closest = 0;
        let minDist = Infinity;
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
        let closest = 0;
        let minDist = Infinity;
        snapPoints.forEach((p, i) => {
          const d = Math.abs(x - p);
          if (d < minDist) {
            minDist = d;
            closest = i;
          }
        });
        const targetX = snapPoints[closest];
        gsap.to(track, {
          x: targetX,
          duration: 0.5,
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

  // Resize
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      measure();
      gsap.set(track, { x: snapPoints[activeIndex] || 0 });
      if (draggable) {
        draggable.applyBounds({ minX: maxX, maxX: 0 });
        draggable.update();
      }
    }, 100);
  });

  // Horizontal wheel
  viewport.addEventListener(
    "wheel",
    (e) => {
      if (Math.abs(e.deltaX) > Math.abs(e.deltaY) || e.shiftKey) {
        e.preventDefault();
        const dir = e.deltaX > 0 || e.deltaY > 0 ? 1 : -1;
        const next = activeIndex + dir;
        if (next >= 0 && next < cards.length) goTo(next, true);
      }
    },
    { passive: false },
  );

  // Keyboard
  viewport.setAttribute("tabindex", "0");
  viewport.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight" || e.key === "ArrowDown") {
      e.preventDefault();
      if (activeIndex < cards.length - 1) goTo(activeIndex + 1, true);
    } else if (e.key === "ArrowLeft" || e.key === "ArrowUp") {
      e.preventDefault();
      if (activeIndex > 0) goTo(activeIndex - 1, true);
    }
  });

  requestAnimationFrame(() => initDraggable());
})();
