document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link-anim");

  navLinks.forEach((link) => {
    const top = link.querySelector(".nav-link-text--top");
    const bottom = link.querySelector(".nav-link-text--bottom");

    link.addEventListener("mouseenter", () => {
      gsap.to(top, { yPercent: -100, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: -100, duration: 0.45, ease: "power3.out" });
    });

    link.addEventListener("mouseleave", () => {
      gsap.to(top, { yPercent: 0, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: 0, duration: 0.45, ease: "power3.out" });
    });
  });

  initHeroHighlight();
  initMagneticButtons();
});

// Hero Highlight
function initHeroHighlight() {
  const highlights = document.querySelectorAll(".hero .hl");
  if (!highlights.length) return;

  function play() {
    gsap.to(highlights, {
      "--scale": 1,
      duration: 0.8,
      stagger: 0.1,
      ease: "power2.out",
      overwrite: true,
    });
  }

  highlights.forEach((el) => {
    el.style.setProperty("--scale", 0);
  });

  ScrollTrigger.create({
    trigger: ".hero",
    start: "top 70%",
    invalidateOnRefresh: true,
    onEnter: play,
    onEnterBack: play,
  });
}

// Magnetic Buttons
function initMagneticButtons(selector = ".mag-zone", options = {}) {
  const {
    strength = 0.35,
    duration = 0.4,
    returnDuration = 0.7,
    ease = "power2.out",
    returnEase = "elastic.out(1, 0.4)",
  } = options;

  document.querySelectorAll(selector).forEach((zone) => {
    const btn = zone.querySelector(".btn");
    if (!btn) return;

    zone.addEventListener("mousemove", (e) => {
      const rect = zone.getBoundingClientRect();
      const x = gsap.utils.mapRange(
        rect.left,
        rect.right,
        -rect.width / 2,
        rect.width / 2,
        e.clientX,
      );
      const y = gsap.utils.mapRange(
        rect.top,
        rect.bottom,
        -rect.height / 2,
        rect.height / 2,
        e.clientY,
      );

      gsap.to(btn, {
        x: x * strength,
        y: y * strength,
        duration,
        ease,
        overwrite: true,
      });
    });

    zone.addEventListener("mouseleave", () => {
      gsap.to(btn, {
        x: 0,
        y: 0,
        duration: returnDuration,
        ease: returnEase,
        overwrite: true,
      });
    });
  });
}

// Statement Section SplitText
document.fonts.ready.then(() => {
  const headline = document.querySelector("#headline");

  if (!headline) return;

  gsap.set(["#headline"], {
    opacity: 1,
    visibility: "visible",
  });

  // HEADING
  SplitText.create("#headline", {
    type: "words,lines",
    linesClass: "line",
    autoSplit: true,
    mask: "lines",
    onSplit: (self) => {
      gsap.set(self.lines, { yPercent: 100 });

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: "#statement",
          start: "top 80%",
          toggleActions: "play none none none",
          once: true,
          invalidateOnRefresh: true,
        },
      });

      tl.to(self.lines, {
        yPercent: 0,
        duration: 0.8,
        stagger: 0.1,
        ease: "expo.out",
      }).from(
        ".avatars img",
        {
          scale: 0,
          opacity: 0,
          duration: 0.55,
          stagger: 0.07,
          ease: "back.out(1.7)",
        },
        "-=0.35",
      );

      const accentWords = ["decoration.", "seconds."];
      gsap.set(self.words, { color: "#e5e0d8" });

      gsap.to(self.words, {
        color: (i, el) =>
          accentWords.includes(el.textContent.trim()) ? "#f74123" : "#111111",
        stagger: 0.05,
        ease: "none",
        scrollTrigger: {
          trigger: "#statement",
          start: "top 75%",
          end: "top 20%",
          scrub: 0.5,
          invalidateOnRefresh: true,
        },
      });

      return tl;
    },
  });

  // Crucial: Refresh ScrollTrigger after DOM mutation caused by SplitText
  if (window.SKRefresh) {
    window.SKRefresh(100);
  } else {
    ScrollTrigger.refresh();
  }
});

// FAQ Accordion
document.querySelectorAll(".faq-question").forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.closest(".faq-item");
    const answer = item.querySelector(".faq-answer");
    const isOpen = item.classList.contains("is-open");

    document.querySelectorAll(".faq-item.is-open").forEach((openItem) => {
      if (openItem !== item) {
        openItem.classList.remove("is-open");
        openItem
          .querySelector(".faq-question")
          .setAttribute("aria-expanded", "false");
        openItem.querySelector(".faq-answer").style.maxHeight = null;
      }
    });

    if (isOpen) {
      item.classList.remove("is-open");
      btn.setAttribute("aria-expanded", "false");
      answer.style.maxHeight = null;
    } else {
      item.classList.add("is-open");
      btn.setAttribute("aria-expanded", "true");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }

    // Recalculate ScrollTrigger positions as FAQ expand changes page height
    if (window.SKRefresh) window.SKRefresh(300);
  });
});

//section headings scroll text effects
function setupCharReveal(selector = "h2") {
  const headings = document.querySelectorAll(selector);

  headings.forEach((heading) => {
    // Clean up previous instance if the function is called again (e.g. on resize)
    if (heading.anim) {
      heading.anim.progress(1).kill();
      heading.split.revert();
    }

    heading.split = SplitText.create(heading, {
      type: "words,chars",
      linesClass: "split-line",
    });

    heading.anim = gsap.from(heading.split.chars, {
      scrollTrigger: {
        trigger: heading,
        start: "top 80%", // adjust as needed
        toggleActions: "play none play none", // play once
        // markers: true,           // uncomment to debug
      },
      y: 80,
      duration: 0.6,
      ease: "circ.out",
      stagger: 0.02,
    });
  });
}

// Run after fonts are loaded (important for SplitText)
document.fonts.ready.then(() => {
  setupCharReveal("h2"); // or a more specific selector
  // ScrollTrigger.refresh();     // usually not needed, but safe
});

//main btns
// Position Aware – fill expands from cursor entry point
document.querySelectorAll(".sk-btn").forEach(function (btn) {
  var circle = btn.querySelector("span");
  if (!circle) return;

  function setOrigin(e) {
    var rect = btn.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
    circle.style.left = x + "px";
    circle.style.top = y + "px";
  }

  btn.addEventListener("mouseenter", setOrigin);
  btn.addEventListener("mouseout", setOrigin);
});
