(function () {
  gsap.registerPlugin(ScrollTrigger, Draggable);

  const section = document.querySelector(".projects-section");
  const viewport = document.getElementById("projectsViewport");
  const track = document.getElementById("projectsTrack");
  const progressEl = document.getElementById("projectsProgress");
  const dotsContainer = document.getElementById("projectsDots");
  const cards = gsap.utils.toArray(".project-card");

  if (!section || !viewport || !track || !cards.length) return;

  let cardWidth = 0;
  let gap = 0;
  let maxX = 0;
  let activeIndex = 0;
  let draggable = null;
  let st = null;
  let snapPoints = [];
  let isDesktop = window.matchMedia("(min-width: 769px)").matches;

  // Measure dimensions reliably
  function measure() {
    if (!cards[0]) return;
    cardWidth = cards[0].offsetWidth;

    // Read exact gap from element style
    const style = getComputedStyle(track);
    gap = parseFloat(style.gap) || 24;

    const trackWidth = track.scrollWidth;
    const viewW = viewport.clientWidth;

    maxX = Math.min(0, viewW - trackWidth);
    snapPoints = cards.map((_, i) => -i * (cardWidth + gap));
  }

  // Hook measure directly into ScrollTrigger refresh cycle BEFORE calculations occur
  ScrollTrigger.addEventListener("refreshInit", measure);

  function setActive(index) {
    activeIndex = Math.max(0, Math.min(cards.length - 1, index));
    cards.forEach((c, i) => c.classList.toggle("is-active", i === activeIndex));
    if (dotsContainer) {
      const dots = dotsContainer.querySelectorAll(".projects-dot");
      dots.forEach((d, i) =>
        d.classList.toggle("is-active", i === activeIndex),
      );
    }
    const pct = cards.length > 1 ? (activeIndex / (cards.length - 1)) * 100 : 0;
    if (progressEl) {
      gsap.to(progressEl, {
        width: pct + "%",
        duration: 0.3,
        ease: "power2.out",
      });
    }
  }

  function initScrollTrigger() {
    measure();
    if (st) {
      st.kill();
      st = null;
    }

    gsap.set(track, { x: 0 });
    setActive(0);

    const perCard = Math.max(window.innerHeight * 0.72, 480);
    const scrollLength = (cards.length - 1) * perCard;

    st = ScrollTrigger.create({
      trigger: section,
      start: "center center",
      end: () => "+=" + scrollLength,
      pin: true,
      scrub: 0.7,
      anticipatePin: 1,
      invalidateOnRefresh: true,
      fastScrollEnd: true,
      onUpdate: (self) => {
        const raw = self.progress;
        const x = maxX * raw;
        gsap.set(track, { x });

        const idx = Math.round(raw * (cards.length - 1));
        if (idx !== activeIndex) setActive(idx);
      },
    });
  }

  function setup() {
    isDesktop = window.matchMedia("(min-width: 769px)").matches;
    if (st) {
      st.kill();
      st = null;
    }
    if (draggable) {
      draggable.kill();
      draggable = null;
    }
    gsap.set(track, { clearProps: "x" });

    if (isDesktop) {
      initScrollTrigger();
    }
  }

  document.addEventListener("DOMContentLoaded", setup);
  window.addEventListener("load", () => {
    measure();
    ScrollTrigger.refresh();
  });
})();
