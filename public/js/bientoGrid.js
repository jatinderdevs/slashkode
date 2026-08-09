gsap.registerPlugin(ScrollTrigger);

const cards = gsap.utils.toArray("[data-animate]");
gsap.set(cards, { y: 36, opacity: 0 });

gsap.to(cards, {
  y: 0,
  opacity: 1,
  duration: 0.75,
  stagger: 0.09,
  ease: "power2.out",
  scrollTrigger: {
    trigger: ".bento-grid",
    start: "top 85%",
    once: true,
  },
});

// Count-up numbers
document.querySelectorAll("[data-count]").forEach((el) => {
  const target = parseFloat(el.getAttribute("data-count"));
  const isDecimal = target % 1 !== 0;
  const isYears = el
    .closest(".metrics-row")
    ?.querySelector(".metrics-text")
    ?.textContent.includes("Years");

  ScrollTrigger.create({
    trigger: el,
    start: "top 90%",
    once: true,
    onEnter: () => {
      gsap.fromTo(
        el,
        { innerText: 0 },
        {
          innerText: target,
          duration: 1.5,
          ease: "power2.out",
          snap: isDecimal ? { innerText: 0.1 } : { innerText: 1 },
          onUpdate: function () {
            const val = parseFloat(el.innerText);
            if (isDecimal) {
              el.innerHTML = val.toFixed(1) + '<span class="accent">★</span>';
            } else if (isYears) {
              el.innerHTML =
                Math.round(val) + '<span class="accent"> yrs</span>';
            } else {
              el.innerHTML = Math.round(val) + '<span class="accent">+</span>';
            }
          },
        },
      );
    },
  });
});
