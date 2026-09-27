document.addEventListener("DOMContentLoaded", function () {
  var form = document.getElementById("startForm");
  if (!form) return;

  var confirmBox = document.getElementById("startConfirm");
  var formWrap = document.getElementById("startFormWrap");
  var mode = form.dataset.mode || "standard";

  var COPY = {
    standard: {
      heading: function (name) {
        return "Thanks, " + name + " \u2014 you\u2019re almost set.";
      },
      message:
        "Check your email shortly for a link to get started \u2014 $99 to begin, then $39 fortnightly.",
    },
    quote: {
      heading: function (name) {
        return "Thanks, " + name + " \u2014 got it.";
      },
      message:
        "We\u2019ll take a look at what you\u2019ve told us and send a tailored quote to your email shortly.",
    },
  };

  // Front-end preview only. This just swaps in a confirmation message so
  // the flow can be seen/tested end to end. Replace with a real handler
  // (fetch/AJAX to a backend endpoint, or a form POST to an email/CRM
  // service) once the payment-link + quoting workflow is wired up.
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    var name = document.getElementById("start-name").value.trim() || "there";
    var copy = COPY[mode] || COPY.standard;

    confirmBox.innerHTML =
      '<h2 class="headingeffect">' +
      copy.heading(name) +
      "</h2>" +
      "<p>" +
      copy.message +
      "</p>";

    formWrap.hidden = true;
    confirmBox.hidden = false;
  });
});
