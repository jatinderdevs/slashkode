/* Request Consultation — modal + basic form handling */

(function () {
  const modal = document.getElementById("callbackModal");
  const openBtn = document.getElementById("callbackBtn");
  const queryForm = document.getElementById("queryForm");
  const callbackForm = document.getElementById("callbackForm");

  if (!modal || !openBtn) return;

  function openModal() {
    modal.hidden = false;
    document.body.style.overflow = "hidden";
    const firstInput = modal.querySelector("input");
    if (firstInput) firstInput.focus();
  }

  function closeModal() {
    modal.hidden = true;
    document.body.style.overflow = "";
  }

  openBtn.addEventListener("click", openModal);

  modal.querySelectorAll("[data-close-modal]").forEach((el) => {
    el.addEventListener("click", closeModal);
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modal.hidden) closeModal();
  });

  // Placeholder submit handlers (replace with real endpoint later)
  if (queryForm) {
    queryForm.addEventListener("submit", (e) => {
      e.preventDefault();
      // TODO: wire to your backend / form service
      alert("Thanks — your request has been received. I’ll reply within 24–48 hours.");
      queryForm.reset();
    });
  }

  if (callbackForm) {
    callbackForm.addEventListener("submit", (e) => {
      e.preventDefault();
      // TODO: wire to your backend / form service
      alert("Got it — I’ll call you back soon.");
      callbackForm.reset();
      closeModal();
    });
  }
})();
