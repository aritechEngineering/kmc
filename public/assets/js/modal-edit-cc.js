"use strict";
document.addEventListener("DOMContentLoaded", function (e) {
  var t, n, a;
  (t = document.querySelector(".credit-card-mask-edit")),
    (n = document.querySelector(".expiry-date-mask-edit")),
    (a = document.querySelector(".cvv-code-mask-edit")),
    t &&
      new Cleave(t, {
        creditCard: !0,
        onCreditCardTypeChanged: function (e) {
          document.querySelector(".card-type-edit").innerHTML = "" != e && "unknown" != e ? '<img src="' + assetsPath + "img/icons/payments/" + e + '-cc.png" height="28"/>' : "";
        },
      }),
    n && new Cleave(n, { date: !0, delimiter: "/", datePattern: ["m", "y"] }),
    a && new Cleave(a, { numeral: !0, numeralPositiveOnly: !0 }),
    FormValidation.formValidation(document.getElementById("editCCForm"), {
      fields: { modalEditCard: { validators: { notEmpty: { message: "Please enter your credit card number" } } } },
      plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap5: new FormValidation.plugins.Bootstrap5({ eleValidClass: "", rowSelector: ".col-12" }), submitButton: new FormValidation.plugins.SubmitButton(), autoFocus: new FormValidation.plugins.AutoFocus() },
      init: (e) => {
        e.on("plugins.message.placed", function (e) {
          e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement);
        });
      },
    });
});
