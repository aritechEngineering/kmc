"use strict";
$(function () {
  var e = $(".select2");
  e.length &&
    (e.each(function () {
      var e = $(this);
      e.wrap('<div class="position-relative"></div>').select2({ dropdownParent: e.parent(), placeholder: e.data("placeholder"), dropdownCss: { minWidth: "150px" } });
    }),
    $(".select2-selection__rendered").addClass("w-px-150"));
}),
  (function () {
    new Plyr("#guitar-video-player"), new Plyr("#guitar-video-player-2");
    (document.getElementsByClassName("plyr")[0].style.borderRadius = "6px"), (document.getElementsByClassName("plyr")[1].style.borderRadius = "6px"), (document.getElementsByClassName("plyr__poster")[0].style.display = "none"), (document.getElementsByClassName("plyr__poster")[1].style.display = "none");
  })();
