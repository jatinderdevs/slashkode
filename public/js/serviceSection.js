const items = gsap.utils.toArray(".service-list-item");

// Clear starting state — nothing blurred on load
gsap.set(items, {
  scale: 1,
  opacity: 1,
  filter: "blur(0px)",
});

items.forEach((item, i) => {
  // Last card never gets blurred
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
        trigger: next,
        start: "top 70%", // starts when next card is near
        end: "top 15%", // finishes when next card is stuck over it
        scrub: true,
      },
    },
  );
});
