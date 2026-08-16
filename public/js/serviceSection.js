// Simple single-open accordion
document.querySelectorAll(".skill-trigger").forEach((btn) => {
  btn.addEventListener("click", () => {
    const panel = document.getElementById(btn.getAttribute("aria-controls"));
    const isOpen = btn.getAttribute("aria-expanded") === "true";

    // Close all others
    document.querySelectorAll(".skill-trigger").forEach((other) => {
      if (other === btn) return;
      other.setAttribute("aria-expanded", "false");
      const otherPanel = document.getElementById(
        other.getAttribute("aria-controls"),
      );
      if (otherPanel) otherPanel.setAttribute("data-open", "false");
    });

    // Toggle current
    btn.setAttribute("aria-expanded", String(!isOpen));
    if (panel) panel.setAttribute("data-open", String(!isOpen));
  });
});

//hover image effect
const cursor = document.querySelector(".cursor-img");
const links = document.querySelectorAll(".hover-link");

links.forEach((link) => {
  link.addEventListener("mouseenter", () => {
    const imgUrl = link.getAttribute("data-img");
    cursor.style.backgroundImage = `url(${imgUrl})`;
    cursor.classList.add("is-visible");
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("is-visible");
  });
});

// Make the image follow the mouse
document.addEventListener("mousemove", (e) => {
  cursor.style.left = e.clientX + "px";
  cursor.style.top = e.clientY + "px";
});
