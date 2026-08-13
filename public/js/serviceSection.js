gsap.registerPlugin(ScrollTrigger);

function initServiceBlur() {
  const items = gsap.utils.toArray(".service-list-item");
  if (!items.length) return;

  // Clean up existing service triggers safely
  ScrollTrigger.getAll().forEach((st) => {
    if (
      st.vars &&
      st.vars.id &&
      String(st.vars.id).startsWith("service-blur-")
    ) {
      st.kill();
    }
  });

  const isMobile = window.matchMedia("(max-width: 768px)").matches;
  const stickyTop = isMobile ? "4vh" : "8vh";

  items.forEach((item, i) => {
    // The last card stays sharp
    if (i === items.length - 1) return;

    const nextItem = items[i + 1];
    const cardContent = item.querySelector(".service-card-content") || item;

    // Hard reset styles back to pristine state
    gsap.set(cardContent, {
      scale: 1,
      opacity: 1,
      filter: "blur(0px)",
      clearProps: "transform,opacity,filter,scale",
    });

    gsap.to(cardContent, {
      scale: 0.92,
      opacity: 0.55,
      filter: "blur(1.5px)",
      ease: "none",
      immediateRender: false,
      scrollTrigger: {
        id: "service-blur-" + i,
        trigger: nextItem,
        // Crucial: Account for the portfolio section pinned spacer above this element
        pinnedContainer: document.querySelector(".projects-section")
          ? ".projects-section"
          : null,
        start: "top 80%", // Triggers as next card enters lower viewport
        end: `top ${stickyTop}`, // Completes blur when next card settles on sticky top
        scrub: true,
        invalidateOnRefresh: true,
      },
    });
  });
}

// Global hook
window.initServiceBlur = initServiceBlur;

// Initialize on DOM ready
document.addEventListener("DOMContentLoaded", () => {
  // Delay slightly to let layout settle
  requestAnimationFrame(() => {
    initServiceBlur();
  });
});
