document.fonts.ready.then(() => {
  const ctaSection = document.querySelector(".cta-section");
  if (!ctaSection) return;

  // Split the heading for a nice mask reveal
  const splitHeading = SplitText.create(".cta-heading", {
    type: "lines",
    linesClass: "line",
    mask: "lines",
  });

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".cta-section",
      start: "top 78%",
      toggleActions: "play none none none",
    },
  });

  // 1. Testimonial card – soft entrance
  tl.from(".cta-testimonial", {
    y: 50,
    opacity: 0,
    scale: 0.96,
    duration: 0.9,
    ease: "power3.out",
  })

    // 2. Eyebrow
    .from(
      ".cta-content .sk-statement-eyebrow",
      {
        y: 20,
        opacity: 0,
        duration: 0.5,
        ease: "power2.out",
      },
      "-=0.55",
    )

    // 3. Heading – mask reveal (premium feel)
    .from(
      splitHeading.lines,
      {
        yPercent: 110,
        opacity: 0,
        duration: 0.75,
        stagger: 0.08,
        ease: "expo.out",
      },
      "-=0.35",
    )

    // 4. Supporting text
    .from(
      ".cta-text",
      {
        y: 24,
        opacity: 0,
        duration: 0.6,
        ease: "power2.out",
      },
      "-=0.4",
    )

    // 5. Button – slight pop so it feels important
    .from(
      ".cta-primary-btn",
      {
        y: 20,
        opacity: 0,
        scale: 0.92,
        duration: 0.65,
        ease: "back.out(1.7)",
      },
      "-=0.35",
    )

    // 6. Small note under the button
    .from(
      ".cta-note",
      {
        opacity: 0,
        duration: 0.5,
        ease: "power1.out",
      },
      "-=0.25",
    );
});
