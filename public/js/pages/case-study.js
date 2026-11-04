/**
 * Slashkode — Case study page
 * Gentle scroll reveals for .cs-reveal. Content stays visible if GSAP
 * fails to load or the visitor prefers reduced motion.
 */
document.addEventListener("DOMContentLoaded", () => {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".cs-reveal").forEach((el) => {
    gsap.set(el, { opacity: 0, y: 24 });

    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 0.65,
      ease: "power3.out",
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        toggleActions: "play none none none",
      },
    });
  });
});
