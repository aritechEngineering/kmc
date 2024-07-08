"use strict";
$(function () {
  var t = $("html").hasClass("light-style") ? "default" : "default-dark",
    e = $("#jstree-basic"),
    s = $("#jstree-custom-icons"),
    i = $("#jstree-context-menu"),
    n = $("#jstree-drag-drop"),
    a = $("#jstree-checkbox"),
    p = $("#jstree-ajax");
  e.length && e.jstree({ core: { themes: { name: t } } }),
    s.length &&
      s.jstree({
        core: {
          themes: { name: t },
          data: [
            {
              text: "css",
              children: [
                { text: "app.css", type: "css" },
                { text: "style.css", type: "css" },
              ],
            },
            {
              text: "img",
              state: { opened: !0 },
              children: [
                { text: "bg.jpg", type: "img" },
                { text: "logo.png", type: "img" },
                { text: "avatar.png", type: "img" },
              ],
            },
            {
              text: "js",
              state: { opened: !0 },
              children: [
                { text: "jquery.js", type: "js" },
                { text: "app.js", type: "js" },
              ],
            },
            { text: "index.html", type: "html" },
            { text: "page-one.html", type: "html" },
            { text: "page-two.html", type: "html" },
          ],
        },
        plugins: ["types"],
        types: { default: { icon: "ti ti-folder" }, html: { icon: "ti ti-brand-html5 text-danger" }, css: { icon: "ti ti-brand-css3 text-info" }, img: { icon: "ti ti-photo text-success" }, js: { icon: "ti ti-brand-javascript text-warning" } },
      }),
    i.length &&
      i.jstree({
        core: {
          themes: { name: t },
          check_callback: !0,
          data: [
            {
              text: "css",
              children: [
                { text: "app.css", type: "css" },
                { text: "style.css", type: "css" },
              ],
            },
            {
              text: "img",
              state: { opened: !0 },
              children: [
                { text: "bg.jpg", type: "img" },
                { text: "logo.png", type: "img" },
                { text: "avatar.png", type: "img" },
              ],
            },
            {
              text: "js",
              state: { opened: !0 },
              children: [
                { text: "jquery.js", type: "js" },
                { text: "app.js", type: "js" },
              ],
            },
            { text: "index.html", type: "html" },
            { text: "page-one.html", type: "html" },
            { text: "page-two.html", type: "html" },
          ],
        },
        plugins: ["types", "contextmenu"],
        types: { default: { icon: "ti ti-folder" }, html: { icon: "ti ti-brand-html5 text-danger" }, css: { icon: "ti ti-brand-css3 text-info" }, img: { icon: "ti ti-photo text-success" }, js: { icon: "ti ti-brand-javascript text-warning" } },
      }),
    n.length &&
      n.jstree({
        core: {
          themes: { name: t },
          check_callback: !0,
          data: [
            {
              text: "css",
              children: [
                { text: "app.css", type: "css" },
                { text: "style.css", type: "css" },
              ],
            },
            {
              text: "img",
              state: { opened: !0 },
              children: [
                { text: "bg.jpg", type: "img" },
                { text: "logo.png", type: "img" },
                { text: "avatar.png", type: "img" },
              ],
            },
            {
              text: "js",
              state: { opened: !0 },
              children: [
                { text: "jquery.js", type: "js" },
                { text: "app.js", type: "js" },
              ],
            },
            { text: "index.html", type: "html" },
            { text: "page-one.html", type: "html" },
            { text: "page-two.html", type: "html" },
          ],
        },
        plugins: ["types", "dnd"],
        types: { default: { icon: "ti ti-folder" }, html: { icon: "ti ti-brand-html5 text-danger" }, css: { icon: "ti ti-brand-css3 text-info" }, img: { icon: "ti ti-photo text-success" }, js: { icon: "ti ti-brand-javascript text-warning" } },
      }),
    a.length &&
      a.jstree({
        core: {
          themes: { name: t },
          data: [
            {
              text: "css",
              children: [
                { text: "app.css", type: "css" },
                { text: "style.css", type: "css" },
              ],
            },
            {
              text: "img",
              state: { opened: !0 },
              children: [
                { text: "bg.jpg", type: "img" },
                { text: "logo.png", type: "img" },
                { text: "avatar.png", type: "img" },
              ],
            },
            {
              text: "js",
              state: { opened: !0 },
              children: [
                { text: "jquery.js", type: "js" },
                { text: "app.js", type: "js" },
              ],
            },
            { text: "index.html", type: "html" },
            { text: "page-one.html", type: "html" },
            { text: "page-two.html", type: "html" },
          ],
        },
        plugins: ["types", "checkbox", "wholerow"],
        types: { default: { icon: "ti ti-folder" }, html: { icon: "ti ti-brand-html5 text-danger" }, css: { icon: "ti ti-brand-css3 text-info" }, img: { icon: "ti ti-photo text-success" }, js: { icon: "ti ti-brand-javascript text-warning" } },
      }),
    p.length &&
      p.jstree({
        core: {
          themes: { name: t },
          data: {
            url: assetsPath + "json/jstree-data.json",
            dataType: "json",
            data: function (t) {
              return { id: t.id };
            },
          },
        },
        plugins: ["types", "state"],
        types: { default: { icon: "ti ti-folder" }, html: { icon: "ti ti-brand-html5 text-danger" }, css: { icon: "ti ti-brand-css3 text-info" }, img: { icon: "ti ti-photo text-success" }, js: { icon: "ti ti-brand-javascript text-warning" } },
      });
});