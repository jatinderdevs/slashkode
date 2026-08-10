const label = document.querySelector("[data-label]");
const lines = gsap.utils.toArray(".cta-line-inner");
const desc = document.querySelector("[data-desc]");
const actions = document.querySelector("[data-actions]");
const note = document.querySelector("[data-note]");

// initial state
gsap.set(lines, { y: "110%" });
gsap.set([label, desc, actions, note], { opacity: 0, y: 14 });

// Play once when the section is in view — slow, easy reveal (not scrubbed)
const cl = gsap.timeline({
  scrollTrigger: {
    trigger: ".cta-section",
    start: "top 72%",
    once: true,
  },
});

// label
cl.to(
  label,
  {
    opacity: 1,
    y: 0,
    duration: 0.55,
    ease: "power2.out",
  },
  0.1,
);

// heading lines — slow + staggered
cl.to(
  lines,
  {
    y: "0%",
    duration: 1.05,
    stagger: 0.18,
    ease: "power3.out",
  },
  0.28,
);

// description
cl.to(
  desc,
  {
    opacity: 1,
    y: 0,
    duration: 0.7,
    ease: "power2.out",
  },
  "-=0.35",
);

// buttons
cl.to(
  actions,
  {
    opacity: 1,
    y: 0,
    duration: 0.65,
    ease: "power2.out",
  },
  "-=0.3",
);

// note
cl.to(
  note,
  {
    opacity: 1,
    y: 0,
    duration: 0.5,
    ease: "power2.out",
  },
  "-=0.2",
);
