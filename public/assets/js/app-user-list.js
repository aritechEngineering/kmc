"use strict";
$(function () {
  let e, a, s;
  s = (isDarkStyle ? ((e = config.colors_dark.borderColor), (a = config.colors_dark.bodyBg), config.colors_dark) : ((e = config.colors.borderColor), (a = config.colors.bodyBg), config.colors)).headingColor;
  var t,
    n = $(".datatables-users"),
    i = $(".select2"),
    r = "app-user-view-account.html",
    o = { 1: { title: "Pending", class: "bg-label-warning" }, 2: { title: "Active", class: "bg-label-success" }, 3: { title: "Inactive", class: "bg-label-secondary" } };
  i.length && (i = i).wrap('<div class="position-relative"></div>').select2({ placeholder: "Select Country", dropdownParent: i.parent() }),
    n.length &&
      (t = n.DataTable({
        ajax: assetsPath + "json/user-list.json",
        columns: [{ data: "id" }, { data: "id" }, { data: "full_name" }, { data: "role" }, { data: "current_plan" }, { data: "billing" }, { data: "status" }, { data: "action" }],
        columnDefs: [
          {
            className: "control",
            searchable: !1,
            orderable: !1,
            responsivePriority: 2,
            targets: 0,
            render: function (t, e, a, s) {
              return "";
            },
          },
          {
            targets: 1,
            orderable: !1,
            checkboxes: { selectAllRender: '<input type="checkbox" class="form-check-input">' },
            render: function () {
              return '<input type="checkbox" class="dt-checkboxes form-check-input" >';
            },
            searchable: !1,
          },
          {
            targets: 2,
            responsivePriority: 4,
            render: function (t, e, a, s) {
              var n = a.full_name,
                i = a.email,
                o = a.avatar;
              return '<div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-4">' + (o ? '<img src="' + assetsPath + "img/avatars/" + o + '" alt="Avatar" class="rounded-circle">' : '<span class="avatar-initial rounded-circle bg-label-' + ["success", "danger", "warning", "info", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (o = (((o = (n = a.full_name).match(/\b\w/g) || []).shift() || "") + (o.pop() || "")).toUpperCase()) + "</span>") + '</div></div><div class="d-flex flex-column"><a href="' + r + '" class="text-heading text-truncate"><span class="fw-medium">' + n + "</span></a><small>" + i + "</small></div></div>";
            },
          },
          {
            targets: 3,
            render: function (t, e, a, s) {
              a = a.role;
              return "<span class='text-truncate d-flex align-items-center text-heading'>" + { Subscriber: '<i class="ti ti-crown ti-md text-primary me-2"></i>', Author: '<i class="ti ti-edit ti-md text-warning me-2"></i>', Maintainer: '<i class="ti ti-user ti-md text-success me-2"></i>', Editor: '<i class="ti ti-chart-pie ti-md text-info me-2"></i>', Admin: '<i class="ti ti-device-desktop ti-md text-danger me-2"></i>' }[a] + a + "</span>";
            },
          },
          {
            targets: 4,
            render: function (t, e, a, s) {
              return '<span class="text-heading">' + a.current_plan + "</span>";
            },
          },
          {
            targets: 6,
            render: function (t, e, a, s) {
              a = a.status;
              return '<span class="badge ' + o[a].class + '" text-capitalized>' + o[a].title + "</span>";
            },
          },
          {
            targets: -1,
            title: "Actions",
            searchable: !1,
            orderable: !1,
            render: function (t, e, a, s) {
              return '<div class="d-flex align-items-center"><a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill delete-record"><i class="ti ti-trash ti-md"></i></a><a href="' + r + '" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill"><i class="ti ti-eye ti-md"></i></a><a href="javascript:;" class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;"" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Suspend</a></div></div>';
            },
          },
        ],
        order: [[2, "desc"]],
        dom: '<"row"<"col-md-2"<"ms-n2"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-6 mb-md-0 mt-n6 mt-md-0"fB>>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        language: { sLengthMenu: "_MENU_", search: "", searchPlaceholder: "Search User", paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
        buttons: [
          {
            extend: "collection",
            className: "btn btn-label-secondary dropdown-toggle mx-4 waves-effect waves-light",
            text: '<i class="ti ti-upload me-2 ti-xs"></i>Export',
            buttons: [
              {
                extend: "print",
                text: '<i class="ti ti-printer me-2" ></i>Print',
                className: "dropdown-item",
                exportOptions: {
                  columns: [1, 2, 3, 4, 5],
                  format: {
                    body: function (t, e, a) {
                      var s;
                      return t.length <= 0
                        ? t
                        : ((t = $.parseHTML(t)),
                          (s = ""),
                          $.each(t, function (t, e) {
                            void 0 !== e.classList && e.classList.contains("user-name") ? (s += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (s += e.textContent) : (s += e.innerText);
                          }),
                          s);
                    },
                  },
                },
                customize: function (t) {
                  $(t.document.body).css("color", s).css("border-color", e).css("background-color", a), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit");
                },
              },
              {
                extend: "csv",
                text: '<i class="ti ti-file-text me-2" ></i>Csv',
                className: "dropdown-item",
                exportOptions: {
                  columns: [1, 2, 3, 4, 5],
                  format: {
                    body: function (t, e, a) {
                      var s;
                      return t.length <= 0
                        ? t
                        : ((t = $.parseHTML(t)),
                          (s = ""),
                          $.each(t, function (t, e) {
                            void 0 !== e.classList && e.classList.contains("user-name") ? (s += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (s += e.textContent) : (s += e.innerText);
                          }),
                          s);
                    },
                  },
                },
              },
              {
                extend: "excel",
                text: '<i class="ti ti-file-spreadsheet me-2"></i>Excel',
                className: "dropdown-item",
                exportOptions: {
                  columns: [1, 2, 3, 4, 5],
                  format: {
                    body: function (t, e, a) {
                      var s;
                      return t.length <= 0
                        ? t
                        : ((t = $.parseHTML(t)),
                          (s = ""),
                          $.each(t, function (t, e) {
                            void 0 !== e.classList && e.classList.contains("user-name") ? (s += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (s += e.textContent) : (s += e.innerText);
                          }),
                          s);
                    },
                  },
                },
              },
              {
                extend: "pdf",
                text: '<i class="ti ti-file-code-2 me-2"></i>Pdf',
                className: "dropdown-item",
                exportOptions: {
                  columns: [1, 2, 3, 4, 5],
                  format: {
                    body: function (t, e, a) {
                      var s;
                      return t.length <= 0
                        ? t
                        : ((t = $.parseHTML(t)),
                          (s = ""),
                          $.each(t, function (t, e) {
                            void 0 !== e.classList && e.classList.contains("user-name") ? (s += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (s += e.textContent) : (s += e.innerText);
                          }),
                          s);
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
                    body: function (t, e, a) {
                      var s;
                      return t.length <= 0
                        ? t
                        : ((t = $.parseHTML(t)),
                          (s = ""),
                          $.each(t, function (t, e) {
                            void 0 !== e.classList && e.classList.contains("user-name") ? (s += e.lastChild.firstChild.textContent) : void 0 === e.innerText ? (s += e.textContent) : (s += e.innerText);
                          }),
                          s);
                    },
                  },
                },
              },
            ],
          },
          { text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Add New User</span>', className: "add-new btn btn-primary waves-effect waves-light", attr: { "data-bs-toggle": "offcanvas", "data-bs-target": "#offcanvasAddUser" } },
        ],
        responsive: {
          details: {
            display: $.fn.dataTable.Responsive.display.modal({
              header: function (t) {
                return "Details of " + t.data().full_name;
              },
            }),
            type: "column",
            renderer: function (t, e, a) {
              a = $.map(a, function (t, e) {
                return "" !== t.title ? '<tr data-dt-row="' + t.rowIndex + '" data-dt-column="' + t.columnIndex + '"><td>' + t.title + ":</td> <td>" + t.data + "</td></tr>" : "";
              }).join("");
              return !!a && $('<table class="table"/><tbody />').append(a);
            },
          },
        },
        initComplete: function () {
          this.api()
            .columns(3)
            .every(function () {
              var e = this,
                a = $('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option></select>')
                  .appendTo(".user_role")
                  .on("change", function () {
                    var t = $.fn.dataTable.util.escapeRegex($(this).val());
                    e.search(t ? "^" + t + "$" : "", !0, !1).draw();
                  });
              e.data()
                .unique()
                .sort()
                .each(function (t, e) {
                  a.append('<option value="' + t + '">' + t + "</option>");
                });
            }),
            this.api()
              .columns(4)
              .every(function () {
                var e = this,
                  a = $('<select id="UserPlan" class="form-select text-capitalize"><option value=""> Select Plan </option></select>')
                    .appendTo(".user_plan")
                    .on("change", function () {
                      var t = $.fn.dataTable.util.escapeRegex($(this).val());
                      e.search(t ? "^" + t + "$" : "", !0, !1).draw();
                    });
                e.data()
                  .unique()
                  .sort()
                  .each(function (t, e) {
                    a.append('<option value="' + t + '">' + t + "</option>");
                  });
              }),
            this.api()
              .columns(6)
              .every(function () {
                var e = this,
                  a = $('<select id="FilterTransaction" class="form-select text-capitalize"><option value=""> Select Status </option></select>')
                    .appendTo(".user_status")
                    .on("change", function () {
                      var t = $.fn.dataTable.util.escapeRegex($(this).val());
                      e.search(t ? "^" + t + "$" : "", !0, !1).draw();
                    });
                e.data()
                  .unique()
                  .sort()
                  .each(function (t, e) {
                    a.append('<option value="' + o[t].title + '" class="text-capitalize">' + o[t].title + "</option>");
                  });
              });
        },
      })),
    $(".datatables-users tbody").on("click", ".delete-record", function () {
      t.row($(this).parents("tr")).remove().draw();
    }),
    setTimeout(() => {
      $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 300);
}),
  (function () {
    var t = document.querySelectorAll(".phone-mask"),
      e = document.getElementById("addNewUserForm");
    t &&
      t.forEach(function (t) {
        new Cleave(t, { phone: !0, phoneRegionCode: "US" });
      }),
      FormValidation.formValidation(e, {
        fields: { userFullname: { validators: { notEmpty: { message: "Please enter fullname " } } }, userEmail: { validators: { notEmpty: { message: "Please enter your email" }, emailAddress: { message: "The value is not a valid email address" } } } },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: "",
            rowSelector: function (t, e) {
              return ".mb-6";
            },
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          autoFocus: new FormValidation.plugins.AutoFocus(),
        },
      });
  })();