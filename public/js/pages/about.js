gsap.to(".floating", {
  y: -15, // Move up by 15 pixels
  rotation: 2, // Slight tilt for natural feel
  duration: 2.5, // Speed of the float
  ease: "sine.inOut", // Smooth acceleration/deceleration
  repeat: -1, // Repeat forever
  yoyo: true, // Reverse back to start position
});
