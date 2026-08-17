gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

/*------------------------------

Init ScrollSmoother
------------------------------*/
// const scrollerSmoother = ScrollSmoother.create({
//   content: "#content",
//   wrapper: "#wrapper",
//   smooth: true,
//   effects: false,
//   normalizeScroll: true,
// });

const process = gsap.timeline({
  scrollTrigger: {
    trigger: ".accordions",
    pin: true,

    start: "top top", // or "top 10%" / "center center" if you want it later
    end: "+=10%", // or "+=200%" — give the stagger room to breathe
    scrub: 1,
  },
});

process.to(".accordion .text", {
  height: 0,
  paddingBottom: 0,
  opacity: 0,
  stagger: 0.5,
});
process.to(
  ".accordion",
  {
    marginBottom: -15,
    stagger: 0.5,
  },
  "<",
);
