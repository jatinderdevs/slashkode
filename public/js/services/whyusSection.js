/* =========================================================
   Expand Cards Section – slashkode
   Requires: GSAP 3.x
   ========================================================= */
(function () {
  const COLLAPSED = 220;
  const IMAGE_W = 320;
  const EXPANDED = COLLAPSED + IMAGE_W + 24; // content + image + breathing room
  const BREAKPOINT = 860;

  const cards = gsap.utils.toArray(".sk-ec-card");
  if (!cards.length) return;

  let activeIndex = 0;
  let isAnimating = false;

  /* ---------- Desktop: expand on hover ---------- */
  function setInitialState() {
    cards.forEach((card, i) => {
      const img = card.querySelector(".sk-ec-image");
      if (i === 0) {
        gsap.set(card, { width: EXPANDED });
        gsap.set(img, { x: 0, opacity: 1 });
        card.classList.add("is-active");
      } else {
        gsap.set(card, { width: COLLAPSED });
        gsap.set(img, { x: "110%", opacity: 0 });
        card.classList.remove("is-active");
      }
    });
  }

  function expandCard(index) {
    if (index === activeIndex || isAnimating) return;
    isAnimating = true;

    const prev = cards[activeIndex];
    const next = cards[index];
    const prevImg = prev.querySelector(".sk-ec-image");
    const nextImg = next.querySelector(".sk-ec-image");

    const tl = gsap.timeline({
      defaults: { ease: "power3.inOut" },
      onComplete: () => {
        activeIndex = index;
        isAnimating = false;
        cards.forEach((c, i) => c.classList.toggle("is-active", i === index));
      },
    });

    // Shrink previous + hide image
    tl.to(prev, { width: COLLAPSED, duration: 0.55 }, 0);
    tl.to(prevImg, { x: "110%", opacity: 0, duration: 0.4 }, 0);

    // Expand next + slide image in
    tl.to(next, { width: EXPANDED, duration: 0.55 }, 0.05);
    tl.fromTo(
      nextImg,
      { x: "110%", opacity: 0 },
      { x: 0, opacity: 1, duration: 0.5, ease: "power3.out" },
      0.15,
    );
  }

  cards.forEach((card, i) => {
    card.addEventListener("mouseenter", () => expandCard(i));
    card.addEventListener("focus", () => expandCard(i));
    card.addEventListener("click", () => expandCard(i));
    card.setAttribute("tabindex", "0");
    card.setAttribute("role", "button");
    const title = card.querySelector(".sk-ec-title");
    if (title) card.setAttribute("aria-label", title.textContent);
  });

  setInitialState();

  /* ---------- Mobile: swipe / drag carousel ---------- */
  const track = document.getElementById("skEcTrack");
  const carousel = document.getElementById("skEcMobile");
  const dots = gsap.utils.toArray(".sk-ec-dots button");
  const slideCount = dots.length || 3;

  if (!track || !carousel) return;

  let mobileIndex = 0;
  let startX = 0;
  let isDragging = false;
  let dragOffset = 0;

  function goToSlide(index, animate = true) {
    mobileIndex = gsap.utils.clamp(0, slideCount - 1, index);
    const xPercent = -mobileIndex * 100;

    if (animate) {
      gsap.to(track, {
        xPercent,
        duration: 0.45,
        ease: "power3.out",
      });
    } else {
      gsap.set(track, { xPercent });
    }

    dots.forEach((d, i) => d.classList.toggle("is-active", i === mobileIndex));
  }

  function onPointerDown(e) {
    isDragging = true;
    startX = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
    dragOffset = 0;
    gsap.killTweensOf(track);
    track.style.cursor = "grabbing";
  }

  function onPointerMove(e) {
    if (!isDragging) return;
    const x = e.type.includes("mouse") ? e.clientX : e.touches[0].clientX;
    dragOffset = x - startX;
    const slideWidth = track.parentElement.offsetWidth;
    const base = -mobileIndex * slideWidth;
    gsap.set(track, { x: base + dragOffset });
  }

  function onPointerUp() {
    if (!isDragging) return;
    isDragging = false;
    track.style.cursor = "grab";

    // Clear temporary pixel x so xPercent can take over cleanly
    gsap.set(track, { x: 0 });

    const threshold = 60;
    if (dragOffset < -threshold && mobileIndex < slideCount - 1) {
      goToSlide(mobileIndex + 1);
    } else if (dragOffset > threshold && mobileIndex > 0) {
      goToSlide(mobileIndex - 1);
    } else {
      goToSlide(mobileIndex);
    }
  }

  carousel.addEventListener("mousedown", onPointerDown);
  window.addEventListener("mousemove", onPointerMove);
  window.addEventListener("mouseup", onPointerUp);

  carousel.addEventListener("touchstart", onPointerDown, { passive: true });
  carousel.addEventListener("touchmove", onPointerMove, { passive: true });
  carousel.addEventListener("touchend", onPointerUp);

  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      goToSlide(Number(dot.dataset.index));
    });
  });

  gsap.set(track, { xPercent: 0 });

  /* ---------- Resize ---------- */
  window.addEventListener("resize", () => {
    if (window.innerWidth > BREAKPOINT) {
      setInitialState();
    } else {
      goToSlide(mobileIndex, false);
    }
  });
})();
