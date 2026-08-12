gsap.registerPlugin(ScrollTrigger);

function initServiceBlur() {
  const items = gsap.utils.toArray(".service-list-item");
  if (!items.length) return;

  // Kill previous service blur triggers so re-init is clean
  ScrollTrigger.getAll().forEach((st) => {
    if (
      st.vars &&
      st.vars.id &&
      String(st.vars.id).startsWith("service-blur-")
    ) {
      st.kill();
    }
  });

  // Always start sharp
  gsap.set(items, {
    scale: 1,
    opacity: 1,
    filter: "blur(0px)",
  });

  items.forEach((item, i) => {
    if (i === items.length - 1) return;

    const next = items[i + 1];

    gsap.fromTo(
      item,
      {
        scale: 1,
        opacity: 1,
        filter: "blur(0px)",
      },
      {
        scale: 0.92,
        opacity: 0.55,
        filter: "blur(1.5px)",
        ease: "none",
        scrollTrigger: {
          id: "service-blur-" + i,
          trigger: next,
          start: "top 60%",
          end: "top 15%",
          scrub: true,
          invalidateOnRefresh: true,
        },
      },
    );
  });
}

// So portfolio can call it after the pin is ready
window.initServiceBlur = initServiceBlur;

// First run (portfolio will re-run it after pin)
initServiceBlur();
