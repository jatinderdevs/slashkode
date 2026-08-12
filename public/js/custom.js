document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link-anim");

  navLinks.forEach((link) => {
    const top = link.querySelector(".nav-link-text--top");
    const bottom = link.querySelector(".nav-link-text--bottom");

    // bottom text is already hidden below the mask via CSS (top: 100%),
    // so both spans rest at yPercent 0 until hovered
    link.addEventListener("mouseenter", () => {
      gsap.to(top, { yPercent: -100, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: -100, duration: 0.45, ease: "power3.out" });
    });

    link.addEventListener("mouseleave", () => {
      gsap.to(top, { yPercent: 0, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: 0, duration: 0.45, ease: "power3.out" });
    });
  });
});

//hero btns
gsap.registerPlugin(ScrollTrigger, SplitText, Draggable);
//highlight the words
function initHeroHighlight() {
  const highlights = document.querySelectorAll(".hero .hl");
  if (!highlights.length) return;

  // Reset function
  function reset() {
    gsap.set(highlights, { "--scale": 0 });
  }

  // Animate function
  function play() {
    gsap.to(highlights, {
      "--scale": 1,
      duration: 0.6,
      stagger: 0.1,
      ease: "bounce",
      overwrite: true,
    });
  }
  document.addEventListener("DOMContentLoaded", initHeroHighlight);

  // Make CSS variable work
  highlights.forEach((el) => {
    el.style.setProperty("--scale", 0);
  });

  // Update the CSS so it uses the variable
  // (we need a small CSS update - see below)

  ScrollTrigger.create({
    trigger: ".hero",
    start: "top 70%",
    onEnter: play,
    onEnterBack: play, // plays again when scrolling back up
  });
}

document.addEventListener("DOMContentLoaded", initHeroHighlight);
function initMagneticButtons(selector = ".mag-zone", options = {}) {
  const {
    strength = 0.35, // how far the button follows the mouse
    duration = 0.4,
    returnDuration = 0.7,
    ease = "power2.out",
    returnEase = "elastic.out(1, 0.4)",
  } = options;

  document.querySelectorAll(selector).forEach((zone) => {
    const btn = zone.querySelector(".btn"); // works with your .btn class

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

// Call it after GSAP is loaded
initMagneticButtons();

//statement section
gsap.registerPlugin(SplitText, ScrollTrigger);

document.fonts.ready.then(() => {
  gsap.set(".split", { opacity: 1 });

  /* ---------- HEADING: mask-reveal lines + word-by-word highlight ---------- */
  SplitText.create("#headline", {
    type: "words,lines",
    linesClass: "line",
    autoSplit: true,
    mask: "lines",
    onSplit: (self) => {
      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: "#statement",
          start: "top 70%",
          toggleActions: "play none none none",
        },
      });

      // line mask reveal
      tl.from(self.lines, {
        yPercent: 100,
        opacity: 0,
        duration: 0.7,
        stagger: 0.1,
        ease: "expo.out",
      }).from(
        ".avatars img",
        {
          scale: 0,
          opacity: 0,
          duration: 0.6,
          stagger: 0.07,
          ease: "back.out(1.7)",
        },
        "-=0.4",
      ); // overlaps the tail end of the line reveal

      // word-by-word colour highlight, scrubbed to scroll position
      const accentWords = ["decoration.", "seconds."];
      gsap.set(self.words, { color: "#e5e0d8" }); // var(--sk-color-surface-sand)

      gsap.to(self.words, {
        color: (i, el) =>
          accentWords.includes(el.textContent.trim())
            ? "#f74123" /* var(--sk-color-terracotta) */
            : "#1e293b" /* var(--sk-color-primary-dark) */,
        stagger: 0.06,
        ease: "none",
        scrollTrigger: {
          trigger: "#statement",
          start: "top 65%",
          end: "top 10%",
          scrub: 0.6,
        },
      });

      return tl;
    },
  });

  /* ---------- SUB PARAGRAPH: mask-reveal lines only ---------- */
  SplitText.create("#subtext", {
    type: "lines",
    linesClass: "line",
    autoSplit: true,
    mask: "lines",
    onSplit: (self) => {
      return gsap.from(self.lines, {
        yPercent: 100,
        opacity: 0,
        duration: 0.7,
        stagger: 0.1,
        ease: "expo.out",
        scrollTrigger: {
          trigger: "#subtext",
          start: "top 80%",
          toggleActions: "play none none none",
        },
      });
    },
  });
});

//FAQ SECTION js
document.querySelectorAll(".faq-question").forEach((btn) => {
  btn.addEventListener("click", () => {
    const item = btn.closest(".faq-item");
    const answer = item.querySelector(".faq-answer");
    const isOpen = item.classList.contains("is-open");

    // Close others
    document.querySelectorAll(".faq-item.is-open").forEach((openItem) => {
      if (openItem !== item) {
        openItem.classList.remove("is-open");
        openItem
          .querySelector(".faq-question")
          .setAttribute("aria-expanded", "false");
        openItem.querySelector(".faq-answer").style.maxHeight = null;
      }
    });

    // Toggle current
    if (isOpen) {
      item.classList.remove("is-open");
      btn.setAttribute("aria-expanded", "false");
      answer.style.maxHeight = null;
    } else {
      item.classList.add("is-open");
      btn.setAttribute("aria-expanded", "true");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }
  });
});
