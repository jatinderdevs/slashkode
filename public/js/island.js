document.addEventListener("DOMContentLoaded", function () {
  const island = document.getElementById("skContactIsland");
  const pill = document.getElementById("skIslandPill");
  const panel = document.getElementById("skIslandPanel");
  const closeBtn = document.getElementById("skIslandClose");

  if (!island || !pill || !panel) return;
  if (typeof gsap === "undefined") {
    console.warn(
      "[contact-island] GSAP not found — make sure it loads before contact-island.js",
    );
    return;
  }

  // Desktop = has a mouse that can hover (not just a touchscreen).
  const hoverQuery = window.matchMedia("(hover: hover) and (pointer: fine)");

  let isOpen = false;
  let closeTimer = null;
  const HOVER_CLOSE_DELAY = 200; // ms grace period so moving mouse from pill -> panel doesn't close it
  const OPEN_DURATION = 0.6;
  const CLOSE_DURATION = 0.35;

  // Initial hidden state — xPercent keeps it centred under the pill,
  // GSAP owns the transform from here on (scale/y/xPercent together).
  gsap.set(panel, {
    autoAlpha: 0,
    scale: 0.8,
    y: 14,
    xPercent: -50,
    transformOrigin: "center bottom",
  });
  const REVEAL_SCROLL_THRESHOLD = 400; // px — tweak to taste
  let hasRevealed = false;

  gsap.set(island, {
    autoAlpha: 0,
    y: 20,
    scale: 0.9,
  });

  function revealIsland() {
    if (hasRevealed) return;
    hasRevealed = true;
    island.style.pointerEvents = "auto";
    gsap.to(island, {
      autoAlpha: 1,
      y: 0,
      scale: 1,
      duration: 0.7,
      ease: "back.out(1.6)",
    });
    window.removeEventListener("scroll", checkScrollReveal);
  }

  function checkScrollReveal() {
    if (window.scrollY > REVEAL_SCROLL_THRESHOLD) revealIsland();
  }

  window.addEventListener("scroll", checkScrollReveal, { passive: true });
  checkScrollReveal(); // in case the page loads already scrolled (e.g. anchor link)

  function openIsland() {
    clearTimeout(closeTimer);
    if (isOpen) return;
    isOpen = true;

    island.classList.add("is-open");
    pill.setAttribute("aria-expanded", "true");
    panel.setAttribute("aria-hidden", "false");
    panel.style.pointerEvents = "auto";

    gsap.killTweensOf(panel);
    gsap.to(panel, {
      autoAlpha: 1,
      scale: 1,
      y: 0,
      xPercent: -50,
      duration: OPEN_DURATION,
      ease: "back.out(1.8)", // the bounce
    });
  }

  function closeIsland() {
    if (!isOpen) return;
    isOpen = false;

    island.classList.remove("is-open");
    pill.setAttribute("aria-expanded", "false");
    panel.setAttribute("aria-hidden", "true");
    panel.style.pointerEvents = "none";

    gsap.killTweensOf(panel);
    gsap.to(panel, {
      autoAlpha: 0,
      scale: 0.8,
      y: 14,
      xPercent: -50,
      duration: CLOSE_DURATION,
      ease: "power2.in",
    });
  }

  function toggleIsland() {
    isOpen ? closeIsland() : openIsland();
  }

  function scheduleClose() {
    clearTimeout(closeTimer);
    closeTimer = setTimeout(closeIsland, HOVER_CLOSE_DELAY);
  }

  // ── Desktop: hover to open, hover-out to close ──
  function bindHoverBehavior() {
    island.addEventListener("mouseenter", function () {
      clearTimeout(closeTimer);
      openIsland();
    });
    island.addEventListener("mouseleave", scheduleClose);

    // Clicking the pill also toggles (covers click-preferring desktop
    // users, and keyboard/AT users who tab + press Enter).
    pill.addEventListener("click", function (e) {
      const isLink = e.target.closest("a");
      if (isLink) {
        openIsland();
        return;
      }
      toggleIsland();
    });
  }

  // ── Mobile / touch: tap the pill to toggle ──
  function bindTapBehavior() {
    pill.addEventListener("click", function (e) {
      // Let icon links (calendar/phone/email/whatsapp) still work,
      // but open the panel too so the full card is visible.
      const isLink = e.target.closest("a");
      if (isLink) {
        openIsland();
        return;
      }
      toggleIsland();
    });
  }

  if (hoverQuery.matches) {
    bindHoverBehavior();
  } else {
    bindTapBehavior();
  }

  // Keyboard support
  pill.addEventListener("keydown", function (e) {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      toggleIsland();
    }
    if (e.key === "Escape") closeIsland();
  });

  // Close button (mobile)
  if (closeBtn) {
    closeBtn.addEventListener("click", closeIsland);
  }

  // Click outside to close
  document.addEventListener("click", function (e) {
    if (!island.contains(e.target) && isOpen) {
      closeIsland();
    }
  });

  // Escape key globally
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeIsland();
  });
});
