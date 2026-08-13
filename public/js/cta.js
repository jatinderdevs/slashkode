document.addEventListener("DOMContentLoaded", () => {
  const ctaSection = document.querySelector(".cta-section");
  if (!ctaSection) return;

  const label = ctaSection.querySelector("[data-label]");
  const lines = gsap.utils.toArray(".cta-line-inner");
  const desc = ctaSection.querySelector("[data-desc]");
  const actions = ctaSection.querySelector("[data-actions]");
  const note = ctaSection.querySelector("[data-note]");

  // Set initial states safely
  if (lines.length) gsap.set(lines, { y: "110%" });
  gsap.set([label, desc, actions, note].filter(Boolean), { opacity: 0, y: 14 });

  const cl = gsap.timeline({
    scrollTrigger: {
      trigger: ctaSection,
      start: "top 72%",
      once: true,
      invalidateOnRefresh: true,
    },
  });

  if (label) {
    cl.to(label, { opacity: 1, y: 0, duration: 0.55, ease: "power2.out" }, 0.1);
  }

  if (lines.length) {
    cl.to(
      lines,
      { y: "0%", duration: 1.05, stagger: 0.18, ease: "power3.out" },
      0.28,
    );
  }

  if (desc) {
    cl.to(
      desc,
      { opacity: 1, y: 0, duration: 0.7, ease: "power2.out" },
      "-=0.35",
    );
  }

  if (actions) {
    cl.to(
      actions,
      { opacity: 1, y: 0, duration: 0.65, ease: "power2.out" },
      "-=0.3",
    );
  }

  if (note) {
    cl.to(
      note,
      { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" },
      "-=0.2",
    );
  }
});
