document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  const footer = document.querySelector(".sk-footer");
  if (!footer) return;

  const wave = document.querySelector("#footer-wave");
  const brandText = document.querySelector("#footer-brand-text");
  const footerItems = gsap.utils.toArray(".footer-anim-item");

  /* 1. Wave bounce */
  if (wave) {
    gsap.set(wave, {
      scaleY: 0.15,
      transformOrigin: "center bottom",
    });

    ScrollTrigger.create({
      trigger: footer,
      start: "top 92%",
      invalidateOnRefresh: true,
      onEnter: () => {
        gsap.fromTo(
          wave,
          { scaleY: 0.15 },
          {
            scaleY: 1,
            duration: 1.5,
            ease: "elastic.out(1, 0.4)",
            overwrite: true,
          },
        );
      },
      onLeaveBack: () => {
        gsap.set(wave, { scaleY: 0.15 });
      },
    });
  }

  /* 2. Footer columns rise */
  if (footerItems.length) {
    gsap.set(footerItems, { opacity: 0, y: 30 });

    ScrollTrigger.create({
      trigger: footer,
      start: "top 85%",
      once: true,
      invalidateOnRefresh: true,
      onEnter: () => {
        gsap.to(footerItems, {
          opacity: 1,
          y: 0,
          duration: 0.8,
          stagger: 0.09,
          ease: "power3.out",
          overwrite: true,
        });
      },
    });
  }

  /* 3. Brand text reveal */
  if (brandText) {
    gsap.set(brandText, {
      clipPath: "inset(0 100% 0 0)",
      x: -30,
      opacity: 0.5,
    });

    ScrollTrigger.create({
      trigger: footer,
      start: "top 75%",
      once: true,
      invalidateOnRefresh: true,
      onEnter: () => {
        gsap.to(brandText, {
          clipPath: "inset(0 0% 0 0)",
          x: 0,
          opacity: 1,
          duration: 1.2,
          ease: "power3.out",
          overwrite: true,
        });
      },
    });

    // Light parallax
    gsap.to(brandText, {
      y: -16,
      ease: "none",
      scrollTrigger: {
        trigger: footer,
        start: "top bottom",
        end: "bottom top",
        scrub: 1.1,
        invalidateOnRefresh: true,
      },
    });
  }
});
