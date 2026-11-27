/**
 * Slashkode — Case study page
 * 1. Gentle scroll reveals for .cs-reveal. Content stays visible if GSAP
 *    fails to load or the visitor prefers reduced motion.
 * 2. Click-to-preview lightbox for the "A closer look" screenshots
 *    (.cs-shots img). Works without GSAP.
 */
document.addEventListener("DOMContentLoaded", () => {
  initShotLightbox();
  initReveals();
});

function initReveals() {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".cs-reveal").forEach((el) => {
    gsap.set(el, { opacity: 0, y: 24 });

    gsap.to(el, {
      opacity: 1,
      y: 0,
      duration: 0.65,
      ease: "power3.out",
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        toggleActions: "play none none none",
      },
    });
  });
}

function initShotLightbox() {
  const images = Array.from(document.querySelectorAll(".cs-shots .cs-shot img"));
  if (!images.length) return;

  // Older browsers without <dialog>: leave the images as they are
  if (typeof HTMLDialogElement !== "function") return;

  const shots = images.map((img) => {
    const caption = img.closest("figure")?.querySelector("figcaption");
    return {
      src: img.currentSrc || img.src,
      alt: img.alt,
      caption: caption ? caption.textContent.trim() : "",
    };
  });

  // Wrap each thumbnail in a button so it works with keyboard and screen readers
  images.forEach((img, i) => {
    const btn = document.createElement("button");
    btn.type = "button";
    btn.className = "cs-shot__open";
    btn.setAttribute("aria-label", `View larger: ${img.alt || "screenshot"}`);
    img.parentNode.insertBefore(btn, img);
    btn.appendChild(img);

    const hint = document.createElement("span");
    hint.className = "cs-shot__hint";
    hint.setAttribute("aria-hidden", "true");
    hint.innerHTML = "&#x2922; View";
    btn.appendChild(hint);

    btn.addEventListener("click", () => open(i));
  });

  const dialog = document.createElement("dialog");
  dialog.className = "cs-lightbox";
  if (shots.length < 2) dialog.classList.add("cs-lightbox--single");
  dialog.setAttribute("aria-label", "Screenshot preview");
  dialog.innerHTML = `
    <button type="button" class="cs-lightbox__btn cs-lightbox__close" aria-label="Close preview">&times;</button>
    <button type="button" class="cs-lightbox__btn cs-lightbox__prev" aria-label="Previous screenshot">&larr;</button>
    <button type="button" class="cs-lightbox__btn cs-lightbox__next" aria-label="Next screenshot">&rarr;</button>
    <div class="cs-lightbox__stage">
      <img class="cs-lightbox__img" alt="" />
    </div>
    <p class="cs-lightbox__caption" aria-live="polite">
      <span class="cs-lightbox__count"></span><span class="cs-lightbox__text"></span>
    </p>
  `;
  document.body.appendChild(dialog);

  const bigImg = dialog.querySelector(".cs-lightbox__img");
  const countEl = dialog.querySelector(".cs-lightbox__count");
  const textEl = dialog.querySelector(".cs-lightbox__text");
  const stage = dialog.querySelector(".cs-lightbox__stage");
  let current = 0;

  function show(i) {
    current = (i + shots.length) % shots.length;
    const shot = shots[current];
    bigImg.src = shot.src;
    bigImg.alt = shot.alt;
    countEl.textContent = shots.length > 1 ? `${current + 1} / ${shots.length}` : "";
    textEl.textContent = shot.caption;
  }

  function open(i) {
    show(i);
    dialog.showModal();
    document.body.classList.add("cs-lightbox-open");
  }

  dialog.addEventListener("close", () => {
    document.body.classList.remove("cs-lightbox-open");
  });

  dialog.querySelector(".cs-lightbox__close").addEventListener("click", () => dialog.close());
  dialog.querySelector(".cs-lightbox__prev").addEventListener("click", () => show(current - 1));
  dialog.querySelector(".cs-lightbox__next").addEventListener("click", () => show(current + 1));

  // Click on the dark area (not the image or buttons) closes it
  dialog.addEventListener("click", (e) => {
    if (e.target === dialog || e.target === stage) dialog.close();
  });

  // Arrow keys to move between screenshots (Esc is handled by <dialog>)
  dialog.addEventListener("keydown", (e) => {
    if (shots.length < 2) return;
    if (e.key === "ArrowLeft") show(current - 1);
    if (e.key === "ArrowRight") show(current + 1);
  });

  // Swipe on touch screens
  let touchX = null;
  dialog.addEventListener("touchstart", (e) => {
    touchX = e.touches[0].clientX;
  }, { passive: true });
  dialog.addEventListener("touchend", (e) => {
    if (touchX === null || shots.length < 2) return;
    const dx = e.changedTouches[0].clientX - touchX;
    if (Math.abs(dx) > 50) show(current + (dx < 0 ? 1 : -1));
    touchX = null;
  });
}
