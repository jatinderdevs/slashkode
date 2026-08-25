gsap.registerPlugin(ScrollTrigger);

const panels = gsap.utils.toArray(".service-item");

panels.forEach((panel, i) => {
  const isLast = i === panels.length - 1;
  const nextPanel = panels[i + 1];

  // Pin each panel
  ScrollTrigger.create({
    trigger: panel,
    start: "top top",
    end: "+=120%",
    pin: true,
    pinSpacing: isLast,
    anticipatePin: 1,
    invalidateOnRefresh: true,
  });

  // Fade current panel out when next panel is coming in
  if (nextPanel) {
    gsap.to(panel, {
      opacity: 0,
      ease: "none",
      scrollTrigger: {
        trigger: nextPanel,
        start: "top 80%", // when next panel starts entering
        end: "top top", // when next panel reaches top
        scrub: true,
      },
    });
  }
});

// Refresh after everything loads
window.addEventListener("load", () => ScrollTrigger.refresh());
window.addEventListener("resize", () => ScrollTrigger.refresh());
