gsap.registerPlugin(ScrollTrigger);

const wave = document.querySelector("#footer-wave");

// Start compressed
gsap.set(wave, {
  scaleY: 0.15,
  transformOrigin: "center bottom",
});

// Top-edge bounce — every time you scroll in
ScrollTrigger.create({
  trigger: ".sk-footer",
  start: "top 95%",
  onEnter: (self) => {
    const velocity = Math.abs(self.getVelocity?.() || 0);
    const amp = 0.9 + Math.min(velocity / 3000, 0.35);
    const period = 0.38;

    gsap.fromTo(
      wave,
      { scaleY: 0.15 },
      {
        scaleY: 1,
        duration: 1.6,
        ease: `elastic.out(${amp}, ${period})`,
        overwrite: true,
      },
    );
  },
  onLeaveBack: () => {
    gsap.set(wave, { scaleY: 0.15 });
  },
});

// Columns + bottom bar — soft rise
const footerItems = gsap.utils.toArray(".footer-anim-item");
gsap.set(footerItems, { opacity: 0, y: 32 });

ScrollTrigger.create({
  trigger: ".sk-footer",
  start: "top 85%",
  once: true,
  onEnter: () => {
    gsap.to(footerItems, {
      opacity: 1,
      y: 0,
      duration: 0.85,
      stagger: 0.1,
      ease: "power3.out",
      overwrite: true,
    });
  },
});

// Big "slashkode" left → right reveal
const brandText = document.querySelector("#footer-brand-text");
gsap.set(brandText, {
  clipPath: "inset(0 100% 0 0)",
  x: -40,
  opacity: 0.4,
});

ScrollTrigger.create({
  trigger: ".sk-footer",
  start: "top 70%",
  once: true,
  onEnter: (self) => {
    const velocity = Math.abs(self.getVelocity?.() || 0);
    const boost = Math.min(velocity / 4000, 0.35);

    gsap
      .timeline()
      .to(brandText, {
        clipPath: "inset(0 0% 0 0)",
        x: 0,
        opacity: 1,
        duration: 1.15 + boost * 0.2,
        ease: "power3.out",
      })
      .to(
        brandText,
        {
          duration: 1.3,
          ease: `elastic.out(${0.85 + boost}, 0.55)`,
        },
        "-=0.8",
      );
  },
});

// Subtle parallax on big name
gsap.to(brandText, {
  y: -18,
  ease: "none",
  scrollTrigger: {
    trigger: ".sk-footer",
    start: "top bottom",
    end: "bottom top",
    scrub: 1.2,
  },
});
