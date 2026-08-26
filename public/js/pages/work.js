gsap.registerPlugin(ScrollTrigger);

function initWorkSlides() {
  const panels = gsap.utils.toArray(".works .work");
  if (panels.length < 2) return;

  const pinPanels = panels.slice(0, -1);

  pinPanels.forEach((panel) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: panel,
        start: "top top",
        end: "+=110%", // longer pin = more time to read before next slide
        pin: true,
        pinSpacing: false,
        scrub: true,
        anticipatePin: 1,
        invalidateOnRefresh: true,
      },
    });

    // 0 → 65% of the scroll: stay fully visible (no blur)
    tl.to(panel, {
      scale: 1,
      opacity: 1,
      duration: 0.65,
      ease: "none",
    });

    // only the last 35% of the scroll: gentle scale + soft fade
    tl.to(panel, {
      scale: 0.9,
      opacity: 0,
      duration: 0.85,
      ease: "none",
    });
  });
}

window.addEventListener("load", () => {
  initWorkSlides();
  ScrollTrigger.refresh();
});

window.addEventListener(
  "resize",
  gsap.utils.debounce(() => {
    ScrollTrigger.getAll().forEach((st) => st.kill());
    gsap.utils.toArray(".works .work").forEach((p) => {
      gsap.set(p, { clearProps: "transform,opacity" });
    });
    initWorkSlides();
    ScrollTrigger.refresh();
  }, 250),
);
