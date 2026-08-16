gsap.registerPlugin(ScrollTrigger);

if ("scrollRestoration" in history) {
  history.scrollRestoration = "manual";
}

ScrollTrigger.config({
  ignoreMobileResize: true,
  autoRefreshEvents: "visibilitychange,DOMContentLoaded,load",
});

let refreshTimer;
function skRefresh(delay = 250) {
  clearTimeout(refreshTimer);
  refreshTimer = setTimeout(() => {
    ScrollTrigger.refresh();
  }, delay);
}
window.SKRefresh = skRefresh;

function initialRefresh() {
  const fontsReady =
    document.fonts && document.fonts.ready
      ? document.fonts.ready
      : Promise.resolve();

  fontsReady.then(() => {
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        ScrollTrigger.refresh();
      });
    });
  });
}

window.addEventListener("load", initialRefresh);

// Never observe .projects-section — pin-spacer size changes loop refresh
let observerSettled = false;
document.addEventListener("DOMContentLoaded", () => {
  const watchTargets = document.querySelectorAll(
    ".hero, .sk-marquee-section, .about-grid-section, .sk-footer",
  );

  if (watchTargets.length) {
    const resizeObserver = new ResizeObserver(() => {
      if (!observerSettled) {
        observerSettled = true;
        return;
      }
      skRefresh(300);
    });
    watchTargets.forEach((el) => resizeObserver.observe(el));
  }
});

window.addEventListener("resize", () => {
  skRefresh(300);
});
