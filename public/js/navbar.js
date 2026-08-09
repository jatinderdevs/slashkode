let isOpen = false;
const island = document.querySelector(".island");
const expandedWidth = Math.min(window.innerWidth * 0.9, 400);
let tl;

function initTimeline() {
  if (tl) tl.revert();

  tl = gsap
    .timeline({ paused: true })
    .set(".menu-overlay", { pointerEvents: "auto" })
    .to(
      ".island",
      {
        width: expandedWidth,
        duration: 0.8,
        ease: "back.out(2)",
        easeReverse: "power2.out",
      },
      0,
    )
    .to(
      ".island-logo",
      {
        opacity: 1,
        rotation: 180,
        duration: 0.5,
        ease: "back.out",
        easeReverse: "power4.out",
      },
      0.12,
    )
    .to(
      ".bar-mid",
      {
        opacity: 0,
        duration: 0.15,
        ease: "power2.in",
        easeReverse: true,
      },
      0,
    )
    .to(
      ".bar-top",
      {
        attr: { x1: 3, y1: 3, x2: 13, y2: 13 },
        duration: 0.28,
        ease: "power3.inOut",
      },
      0,
    )
    .to(
      ".bar-bot",
      {
        attr: { x1: 13, y1: 3, x2: 3, y2: 13 },
        duration: 0.28,
        ease: "power3.inOut",
      },
      0,
    )
    .to(
      ".menu-backdrop",
      {
        opacity: 1,
        duration: 0.3,
        ease: "power2.out",
      },
      0,
    )
    .fromTo(
      ".menu-panel",
      { autoAlpha: 0, yPercent: -10, scale: 0.6 },
      {
        autoAlpha: 1,
        yPercent: 0,
        scale: 1,
        duration: 0.8,
        transformOrigin: "top center",
        ease: "back.out(2)",
        easeReverse: "power3.out",
      },
      0.1,
    )
    .fromTo(
      ".menu-link",
      { opacity: 0, y: 6 },
      {
        opacity: 1,
        y: 0,
        duration: 0.32,
        ease: "power2.out",
        easeReverse: true,
        stagger: 0.05,
      },
      0.22,
    );
}
initTimeline();

function toggleMenu() {
  isOpen = !isOpen;
  const btn = document.getElementById("menuToggle");

  btn.setAttribute("aria-expanded", isOpen);
  btn.setAttribute(
    "aria-label",
    isOpen ? "Close navigation menu" : "Open navigation menu",
  );

  document.querySelectorAll(".menu-link").forEach((link) => {
    link.setAttribute("tabindex", isOpen ? "0" : "-1");
  });

  if (isOpen) {
    tl.timeScale(1).play();
  } else {
    tl.eventCallback("onReverseComplete", () => {
      gsap.set(".menu-overlay", { pointerEvents: "none" });
    });
    tl.timeScale(1.4).reverse(); // slightly faster close
  }
}

// Events
document.getElementById("menuToggle").addEventListener("click", toggleMenu);

document.querySelector(".menu-backdrop").addEventListener("click", () => {
  if (isOpen) toggleMenu();
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && isOpen) {
    toggleMenu();
    document.getElementById("menuToggle").focus();
  }
});

// Focus trap
document.querySelector(".menu-overlay").addEventListener("keydown", (e) => {
  if (!isOpen || e.key !== "Tab") return;

  const focusable = [...document.querySelectorAll('.menu-link[tabindex="0"]')];
  if (!focusable.length) return;

  const first = focusable[0];
  const last = focusable[focusable.length - 1];

  if (e.shiftKey && document.activeElement === first) {
    e.preventDefault();
    last.focus();
  } else if (!e.shiftKey && document.activeElement === last) {
    e.preventDefault();
    first.focus();
  }
});

// Recalculate on resize (optional but recommended)
window.addEventListener("resize", () => {
  if (!isOpen) {
    initTimeline();
  }
});
