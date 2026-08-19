document.addEventListener("DOMContentLoaded", () => {
  initNavLinkHover();
  initHeroHighlight();
  initMagneticButtons();
  initPositionAwareButtons();
  initFAQ();
});

/* --------------------------------------------------
   1. NAV LINK HOVER
-------------------------------------------------- */
function initNavLinkHover() {
  const navLinks = document.querySelectorAll(".nav-link-anim");
  if (!navLinks.length) return;

  navLinks.forEach((link) => {
    const top = link.querySelector(".nav-link-text--top");
    const bottom = link.querySelector(".nav-link-text--bottom");
    if (!top || !bottom) return;

    link.addEventListener("mouseenter", () => {
      gsap.to(top, { yPercent: -100, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: -100, duration: 0.45, ease: "power3.out" });
    });

    link.addEventListener("mouseleave", () => {
      gsap.to(top, { yPercent: 0, duration: 0.45, ease: "power3.out" });
      gsap.to(bottom, { yPercent: 0, duration: 0.45, ease: "power3.out" });
    });
  });
}

/* --------------------------------------------------
   2. HERO HIGHLIGHT
-------------------------------------------------- */
function initHeroHighlight() {
  const split = SplitText.create(".heroheading", {
    type: "words",
    wordsClass: "wordhero++",
  });

  gsap.from(split.words, {
    opacity: 0.1,
    scale: 0.8,
    filter: "blur(4px)",
    stagger: { each: 0.08, from: "random" },
    duration: 0.5,
    ease: "bounce.out",
  });
}

/* --------------------------------------------------
   3. MAGNETIC BUTTONS
-------------------------------------------------- */
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

/* --------------------------------------------------
   4. POSITION-AWARE BUTTONS (.sk-btn)
-------------------------------------------------- */
function initPositionAwareButtons() {
  document.querySelectorAll(".sk-btn").forEach((btn) => {
    const circle = btn.querySelector(".sk-btn>span");
    if (!circle) return;

    const setOrigin = (e) => {
      const rect = btn.getBoundingClientRect();
      circle.style.left = e.clientX - rect.left + "px";
      circle.style.top = e.clientY - rect.top + "px";
    };

    btn.addEventListener("mouseenter", setOrigin);
    btn.addEventListener("mouseout", setOrigin);
  });
}

/* --------------------------------------------------
   5. FAQ ACCORDION
-------------------------------------------------- */
function initFAQ() {
  const questions = document.querySelectorAll(".faq-question");
  if (!questions.length) return;

  questions.forEach((btn) => {
    btn.addEventListener("click", () => {
      const item = btn.closest(".faq-item");
      const answer = item.querySelector(".faq-answer");
      if (!answer) return;

      const isOpen = item.classList.contains("is-open");

      // Close other open items
      document.querySelectorAll(".faq-item.is-open").forEach((openItem) => {
        if (openItem !== item) {
          openItem.classList.remove("is-open");
          openItem
            .querySelector(".faq-question")
            ?.setAttribute("aria-expanded", "false");
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

      // Recalculate ScrollTrigger after height change
      if (window.SKRefresh) {
        window.SKRefresh(300);
      } else {
        ScrollTrigger.refresh();
      }
    });
  });
}

/* --------------------------------------------------
   6. EVERYTHING THAT NEEDS FONTS + SPLITTEXT
-------------------------------------------------- */
document.fonts.ready.then(() => {
  initStatementSplitText();
  setupCharReveal(".headingeffect");
  scrambleText(".skill-label");
  // Final refresh after all SplitText DOM mutations
  if (window.SKRefresh) {
    window.SKRefresh(100);
  } else {
    ScrollTrigger.refresh();
  }
});

/* --------------------------------------------------
   STATEMENT SECTION
-------------------------------------------------- */
function initStatementSplitText() {
  const headline = document.querySelector("#headline");
  if (!headline) return;

  gsap.set("#headline", {
    opacity: 1,
    visibility: "visible",
  });

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
          toggleActions: "play none play none",
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
          duration: 0.6,
          stagger: 0.07,
          ease: "bounce.out",
        },
        "-=0.35",
      );

      // Accent colour animation
      const accentWords = ["decision", "customers"];
      gsap.set(self.words, { color: "#e5e0d8" });

      gsap.to(self.words, {
        color: (i, el) =>
          accentWords.includes(el.textContent.trim()) ? "#f74123" : "#111111",
        stagger: 0.05,
        ease: "none",
        scrollTrigger: {
          trigger: "#statement",
          start: "top center",
          end: "top 20%",
          scrub: 0.5,
        },
      });

      return tl;
    },
  });
}

/* --------------------------------------------------
   SECTION HEADINGS – CHARACTER REVEAL
-------------------------------------------------- */
function setupCharReveal(selector = ".headingeffect") {
  const headings = document.querySelectorAll(selector);
  if (!headings.length) return;

  headings.forEach((heading) => {
    gsap.from(heading, {
      scale: 3,
      opacity: 0,
      duration: 0.6,
      ease: "bounce.out",
      scrollTrigger: {
        trigger: heading,
        start: "top 70%",
        toggleActions: "play none play none",
      },
    });
  });
}

/* --------------------------------------------------
   SECTION Service - Scramble text
-------------------------------------------------- */
gsap.registerPlugin(ScrambleTextPlugin);

function scrambleText(selector) {
  const elements = document.querySelectorAll(selector);

  elements.forEach((el) => {
    // Optional: store the original text so you can scramble back to it
    const originalText = el.textContent;

    el.addEventListener("mouseenter", () => {
      gsap.to(el, {
        duration: 1,
        ease: "power3.out",
        scrambleText: {
          text: originalText,
          chars: "!@#$%^&*({]{[|\?></",
          revealDelay: 0.5,
          speed: 0.3,
        },
      });
    });

    // Optional: scramble back on mouse leave
    // el.addEventListener("mouseleave", () => {
    //   gsap.to(el, {
    //     duration: 0.8,
    //     scrambleText: {
    //       text: originalText,
    //       characters: "XO",
    //       speed: 0.3,
    //     },
    //   });
    // });
  });
}
