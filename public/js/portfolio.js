// =====================================================
// DRAG PORTFOLIO CAROUSEL — Slashkode
// Center-focused, draggable/swipeable card carousel with
// a custom "Drag" cursor pill. Snap-on-release, no ScrollTrigger
// pin involved, so it won't interact with the existing
// pinned-scroll bugs elsewhere on the page.
// =====================================================
(function () {
  gsap.registerPlugin(Draggable);

  const section = document.querySelector(".sk-drag-portfolio");
  const carousel = document.getElementById("dragCarousel");
  const track = document.getElementById("dragTrack");
  const cursor = document.getElementById("dragCursor");
  const dotsWrap = document.getElementById("dragDots");
  const cards = gsap.utils.toArray(".drag-card", track);

  if (!section || !carousel || !track || !cards.length) return;

  let cardW = 0;
  let snapPoints = [];
  let minX = 0;
  let maxX = 0;
  // Start on the second slide by default
  let activeIndex = 0;
  let draggableInstance = null;
  let dragStartX = 0;
  let hasDragged = false;
  let initialized = false;

  // ---------- Dots ----------
  dotsWrap.innerHTML = "";
  cards.forEach((_, i) => {
    const dot = document.createElement("button");
    dot.className = "drag-dot";
    dot.type = "button";
    dot.setAttribute("role", "tab");
    dot.setAttribute("aria-label", "Go to project " + (i + 1));
    dot.addEventListener("click", () => goTo(i));
    dotsWrap.appendChild(dot);
  });
  const getDots = () => dotsWrap.querySelectorAll(".drag-dot");

  // ---------- Measurement ----------
  function measure() {
    if (!cards[0]) return;

    // Reset padding before measuring card width so previous padding
    // doesn't skew the reading (padding doesn't affect card width,
    // but keeps things predictable across re-measures).
    cardW = cards[0].getBoundingClientRect().width;

    // Center the FIRST and LAST card precisely against the carousel's
    // real rendered width (not 50vw, which drifts with scrollbars /
    // containers narrower than the viewport).
    const viewW = carousel.clientWidth;
    const sidePad = Math.max(0, (viewW - cardW) / 2);
    track.style.paddingLeft = sidePad + "px";
    track.style.paddingRight = sidePad + "px";

    const style = getComputedStyle(track);
    const gap = parseFloat(style.columnGap || style.gap) || 0;
    const step = cardW + gap;

    const trackWidth = track.scrollWidth;

    maxX = 0;
    minX = Math.min(0, viewW - trackWidth);

    snapPoints = cards.map((_, i) => Math.max(minX, Math.min(maxX, -i * step)));
  }

  function closestIndexToX(x) {
    let closest = 0;
    let dist = Infinity;
    snapPoints.forEach((p, i) => {
      const d = Math.abs(p - x);
      if (d < dist) {
        dist = d;
        closest = i;
      }
    });
    return closest;
  }

  // ---------- Visual state (scale/opacity by distance from center) ----------
  function updateCardStates() {
    const centerX =
      carousel.getBoundingClientRect().left + carousel.clientWidth / 2;
    const half = carousel.clientWidth / 2 || 1;

    cards.forEach((card) => {
      const rect = card.getBoundingClientRect();
      const cardCenter = rect.left + rect.width / 2;
      let norm = gsap.utils.clamp(0, 1, Math.abs(cardCenter - centerX) / half);
      if (norm < 0.015) norm = 0;

      gsap.to(card, {
        scale: gsap.utils.interpolate(1, 0.84, norm),
        opacity: gsap.utils.interpolate(1, 0.45, norm),
        duration: 0.2,
        ease: "power1.out",
        overwrite: "auto",
      });
    });
  }

  function setActiveDot(index) {
    activeIndex = Math.max(0, Math.min(cards.length - 1, index));
    getDots().forEach((d, i) =>
      d.classList.toggle("is-active", i === activeIndex),
    );
  }

  // ---------- Navigation ----------
  function goTo(index, fast) {
    index = Math.max(0, Math.min(cards.length - 1, index));
    const x = snapPoints[index];

    gsap.to(track, {
      x,
      duration: fast ? 0.5 : 0.65,
      ease: "power3.out",
      onUpdate: updateCardStates,
    });

    setActiveDot(index);
  }

  // ---------- Init / Draggable ----------
  function init() {
    measure();

    if (draggableInstance) {
      draggableInstance.kill();
      draggableInstance = null;
    }

    const startX = snapPoints[activeIndex] || 0;
    gsap.set(track, { x: startX });
    updateCardStates();
    setActiveDot(activeIndex);

    draggableInstance = Draggable.create(track, {
      type: "x",
      edgeResistance: 0.7,
      bounds: { minX, maxX },
      allowNativeTouchScrolling: true,
      onPress: function () {
        dragStartX = this.x;
        hasDragged = false;
        gsap.killTweensOf(track);
      },
      onDrag: function () {
        if (Math.abs(this.x - dragStartX) > 4) hasDragged = true;
        updateCardStates();
      },
      onDragEnd: function () {
        const moved = this.x - dragStartX;
        const startIndex = closestIndexToX(dragStartX);
        let target = closestIndexToX(this.x);

        // Decisive flick: commit to next/prev card even if it didn't
        // travel all the way to that card's snap point.
        if (Math.abs(moved) > cardW * 0.18) {
          target =
            moved < 0
              ? Math.min(cards.length - 1, startIndex + 1)
              : Math.max(0, startIndex - 1);
        }

        goTo(target, true);
      },
    })[0];

    // Don't let a click that ended a drag also trigger the project link
    track.querySelectorAll(".drag-card-link").forEach((link) => {
      link.addEventListener("click", (e) => {
        if (hasDragged) e.preventDefault();
      });
    });
  }

  // ---------- Custom cursor ----------
  if (
    cursor &&
    window.matchMedia("(hover: hover) and (pointer: fine)").matches
  ) {
    const quickX = gsap.quickTo(cursor, "x", {
      duration: 0.35,
      ease: "power3.out",
    });
    const quickY = gsap.quickTo(cursor, "y", {
      duration: 0.35,
      ease: "power3.out",
    });

    carousel.addEventListener("mouseenter", () => {
      gsap.to(cursor, {
        opacity: 1,
        scale: 1,
        duration: 0.3,
        ease: "power2.out",
      });
    });
    carousel.addEventListener("mouseleave", () => {
      gsap.to(cursor, {
        opacity: 0,
        scale: 0.7,
        duration: 0.25,
        ease: "power2.in",
      });
    });
    carousel.addEventListener("mousemove", (e) => {
      const rect = carousel.getBoundingClientRect();
      quickX(e.clientX - rect.left);
      quickY(e.clientY - rect.top);
    });
  }

  // ---------- Lifecycle ----------
  init();

  window.addEventListener("load", () => {
    measure();
    if (draggableInstance) draggableInstance.applyBounds({ minX, maxX });
  });

  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(init, 200);
  });
})();
