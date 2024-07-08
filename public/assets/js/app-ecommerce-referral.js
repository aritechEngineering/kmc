"use strict";
$(function () {
  let e, s, a;
  a = (isDarkStyle ? ((e = config.colors_dark.borderColor), (s = config.colors_dark.bodyBg), config.colors_dark) : ((e = config.colors.borderColor), (s = config.colors.bodyBg), config.colors)).headingColor;
  var t = $(".datatables-referral"),
    n = { 1: { title: "Paid", class: "bg-label-success" }, 2: { title: "Unpaid", class: "bg-label-warning" }, 3: { title: "Rejected", class: "bg-label-danger" } };
  t.length &&
    (t.DataTable({
      ajax: assetsPath + "json/ecommerce-referral.json",
      columns: [{ data: "" }, { data: "id" }, { data: "user" }, { data: "referred_id" }, { data: "status" }, { data: "value" }, { data: "earning" }],
      columnDefs: [
        {
          className: "control",
          searchable: !1,
          orderable: !1,
          responsivePriority: 2,
          targets: 0,
          render: function (t, e, s, a) {
            return "";
          },
        },
        {
          targets: 1,
          orderable: !1,
          searchable: !1,
          responsivePriority: 3,
          checkboxes: !0,
          checkboxes: { selectAllRender: '<input type="checkbox" class="form-check-input">' },
          render: function () {
            return '<input type="checkbox" class="dt-checkboxes form-check-input">';
          },
        },
        {
          targets: 2,
          responsivePriority: 1,
          render: function (t, e, s, a) {
            var n = s.user,
              r = s.email,
              o = s.avatar;
            return '<div class="d-flex justify-content-start align-items-center customer-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4">' + (o ? '<img src="' + assetsPath + "img/avatars/" + o + '" alt="Avatar" class="rounded-circle">' : '<span class="avatar-initial rounded-circle bg-label-' + ["success", "danger", "warning", "info", "dark", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (o = (((o = (n = s.user).match(/\b\w/g) || []).shift() || "") + (o.pop() || "")).toUpperCase()) + "</span>") + '</div></div><div class="d-flex flex-column"><a href="app-ecommerce-customer-details-overview.html" class="text-heading"><span class="fw-medium">' + n + '</span></a><small class="text-nowrap">' + r + "</small></div></div>";
          },
        },
        {
          targets: 3,
          render: function (t, e, s, a) {
            return "<span>" + s.referred_id + "</span>";
          },
        },
        {
          targets: 4,
          render: function (t, e, s, a) {
            s = s.status;
            return '<span class="badge ' + n[s].class + '" text-capitalized>' + n[s].title + "</span>";
          },
        },
        {
          targets: 5,
          render: function (t, e, s, a) {
            return "<span>" + s.value + "</span>";
          },
        },
        {
          targets: 6,
          render: function (t, e, s, a) {
            return '<span class="text-heading">' + s.earning + "</span > ";
          },
        },
      ],
      order: [[2, "asc"]],
      dom: '<"card-header d-flex flex-column flex-sm-row align-items-center py-0"<"head-label"><"d-flex align-items-center justify-content-end"l<"dt-action-buttons"B>>>t<"row mx-1"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      language: { sLengthMenu: "_MENU_", paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
      buttons: [
        {
          extend: "collection",
          className: "btn btn-label-secondary dropdown-toggle waves-effect waves-light",
          text: '<i class="ti ti-upload ti-xs me-2"></i>Export',
          buttons: [
            {
              extend: "print",
              text: '<i class="ti ti-printer me-2"></i>Print',
              className: "dropdown-item",
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                format: {
                  body: function (t, e, s) {
                    var a;
                    return t.length <= 0
                      ? t
                      : ((t = $.parseHTML(t)),
                        (a = ""),
                        $.each(t, function (t, e) {
                          void 0 !== e.classList && e.classList.contains("user-name") ? (a += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (a += e.textContent) : (a += e.innerText);
                        }),
                        a);
                  },
                },
              },
              customize: function (t) {
                $(t.document.body).css("color", a).css("border-color", e).css("background-color", s), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit");
              },
            },
            {
              extend: "csv",
              text: '<i class="ti ti-file me-2" ></i>Csv',
              className: "dropdown-item",
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                format: {
                  body: function (t, e, s) {
                    var a;
                    return t.length <= 0
                      ? t
                      : ((t = $.parseHTML(t)),
                        (a = ""),
                        $.each(t, function (t, e) {
                          void 0 !== e.classList && e.classList.contains("user-name") ? (a += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (a += e.textContent) : (a += e.innerText);
                        }),
                        a);
                  },
                },
              },
            },
            {
              extend: "excel",
              text: '<i class="ti ti-file-export me-2"></i>Excel',
              className: "dropdown-item",
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                format: {
                  body: function (t, e, s) {
                    var a;
                    return t.length <= 0
                      ? t
                      : ((t = $.parseHTML(t)),
                        (a = ""),
                        $.each(t, function (t, e) {
                          void 0 !== e.classList && e.classList.contains("user-name") ? (a += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (a += e.textContent) : (a += e.innerText);
                        }),
                        a);
                  },
                },
              },
            },
            {
              extend: "pdf",
              text: '<i class="ti ti-file-text me-2"></i>Pdf',
              className: "dropdown-item",
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                format: {
                  body: function (t, e, s) {
                    var a;
                    return t.length <= 0
                      ? t
                      : ((t = $.parseHTML(t)),
                        (a = ""),
                        $.each(t, function (t, e) {
                          void 0 !== e.classList && e.classList.contains("user-name") ? (a += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (a += e.textContent) : (a += e.innerText);
                        }),
                        a);
                  },
                },
              },
            },
            {
              extend: "copy",
              text: '<i class="ti ti-copy me-2" ></i>Copy',
              className: "dropdown-item",
              exportOptions: {
                columns: [1, 2, 3, 4, 5],
                format: {
                  body: function (t, e, s) {
                    var a;
                    return t.length <= 0
                      ? t
                      : ((t = $.parseHTML(t)),
                        (a = ""),
                        $.each(t, function (t, e) {
                          void 0 !== e.classList && e.classList.contains("user-name") ? (a += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (a += e.textContent) : (a += e.innerText);
                        }),
                        a);
                  },
                },
              },
            },
          ],
        },
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (t) {
              return "Details of " + t.data().user;
            },
          }),
          type: "column",
          renderer: function (t, e, s) {
            s = $.map(s, function (t, e) {
              return "" !== t.title ? '<tr data-dt-row="' + t.rowIndex + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : "";
            }).join("");
            return !!s && $('<table class="table"/><tbody />').append(s);
          },
        },
      },
    }),
    $("div.head-label").html('<h5 class="card-title mb-0 text-nowrap mt-6 mt-sm-0">Referred users</h5>'),
    $(".dataTables_length").addClass("me-2 ms-n2 ms-sm-0"),
    $(".dt-action-buttons").addClass("pt-0")),
    setTimeout(() => {
      $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 300);
});
