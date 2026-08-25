/**
 * SLASHKODE — Web Design service page
 * GSAP reveals + FAQ accordion
 */
document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);

  // ── Scroll reveals ──
  const reveals = gsap.utils.toArray(".wd-reveal");
  if (reveals.length) {
    gsap.set(reveals, { opacity: 0, y: 28 });

    // Hero group — staggered on load
    // const heroReveals = gsap.utils.toArray(".wd-hero .wd-reveal");
    // if (heroReveals.length) {
    //   gsap.to(heroReveals, {
    //     opacity: 1,
    //     y: 0,
    //     duration: 0.75,
    //     stagger: 0.1,
    //     ease: "power3.out",
    //     delay: 0.15,
    //   });
    // }

    // Everything else on scroll
    reveals.forEach((el) => {
      if (el.closest(".wd-hero")) return;

      gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 0.65,
        ease: "power3.out",
        scrollTrigger: {
          trigger: el,
          start: "top 88%",
          toggleActions: "play none none none",
        },
      });
    });
  }

  // ── Process numbers subtle pulse on enter ──
  const processNums = gsap.utils.toArray(".wd-process-num");
  processNums.forEach((num) => {
    ScrollTrigger.create({
      trigger: num,
      start: "top 85%",
      once: true,
      onEnter: () => {
        gsap.fromTo(
          num,
          { scale: 0.85 },
          { scale: 1, duration: 0.5, ease: "back.out(1.6)" },
        );
      },
    });
  });

  // ── FAQ accordion (single open) ──
  const faqItems = document.querySelectorAll(".wd-faq-item");
  faqItems.forEach((item) => {
    const btn = item.querySelector(".wd-faq-q");
    const answer = item.querySelector(".wd-faq-a");
    if (!btn || !answer) return;

    btn.addEventListener("click", () => {
      const isOpen = item.classList.contains("is-open");

      // Close others
      faqItems.forEach((other) => {
        if (other === item) return;
        other.classList.remove("is-open");
        const otherBtn = other.querySelector(".wd-faq-q");
        const otherA = other.querySelector(".wd-faq-a");
        if (otherBtn) otherBtn.setAttribute("aria-expanded", "false");
        if (otherA) otherA.style.maxHeight = null;
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
    });
  });

  // ── Smooth scroll for in-page form anchor ──
  document.querySelectorAll('a[href="#lead-form"]').forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const target = document.getElementById("lead-form");
      if (target) {
        target.scrollIntoView({ behavior: "smooth", block: "center" });
      }
    });
  });
});
