"use strict";
let fv, offCanvasEl;
document.addEventListener("DOMContentLoaded", function (t) {
  var e;
  (e = document.getElementById("form-add-new-record")),
    setTimeout(() => {
      const t = document.querySelector(".create-new"),
        e = document.querySelector("#add-new-record");
      t &&
        t.addEventListener("click", function () {
          (offCanvasEl = new bootstrap.Offcanvas(e)), (e.querySelector(".dt-full-name").value = ""), (e.querySelector(".dt-post").value = ""), (e.querySelector(".dt-email").value = ""), (e.querySelector(".dt-date").value = ""), (e.querySelector(".dt-salary").value = ""), offCanvasEl.show();
        });
    }, 200),
    (fv = FormValidation.formValidation(e, {
      fields: { basicFullname: { validators: { notEmpty: { message: "The name is required" } } }, basicPost: { validators: { notEmpty: { message: "Post field is required" } } }, basicEmail: { validators: { notEmpty: { message: "The Email is required" }, emailAddress: { message: "The value is not a valid email address" } } }, basicDate: { validators: { notEmpty: { message: "Joining Date is required" }, date: { format: "MM/DD/YYYY", message: "The value is not a valid date" } } }, basicSalary: { validators: { notEmpty: { message: "Basic Salary is required" } } } },
      plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap5: new FormValidation.plugins.Bootstrap5({ eleValidClass: "", rowSelector: ".col-sm-12" }), submitButton: new FormValidation.plugins.SubmitButton(), autoFocus: new FormValidation.plugins.AutoFocus() },
      init: (t) => {
        t.on("plugins.message.placed", function (t) {
          t.element.parentElement.classList.contains("input-group") && t.element.parentElement.insertAdjacentElement("afterend", t.messageElement);
        });
      },
    })),
    (e = document.querySelector('[name="basicDate"]')) &&
      e.flatpickr({
        enableTime: !1,
        dateFormat: "m/d/Y",
        onChange: function () {
          fv.revalidateField("basicDate");
        },
      });
}),
  $(function () {
    var i,
      e,
      t = $(".datatables-basic"),
      a = $(".dt-complex-header"),
      s = $(".dt-row-grouping"),
      n = $(".dt-multilingual"),
      l =
        (t.length &&
          ((i = t.DataTable({
            ajax: assetsPath + "json/table-datatable.json",
            columns: [{ data: "" }, { data: "id" }, { data: "id" }, { data: "full_name" }, { data: "email" }, { data: "start_date" }, { data: "salary" }, { data: "status" }, { data: "" }],
            columnDefs: [
              {
                className: "control",
                orderable: !1,
                searchable: !1,
                responsivePriority: 2,
                targets: 0,
                render: function (t, e, a, s) {
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
              { targets: 2, searchable: !1, visible: !1 },
              {
                targets: 3,
                responsivePriority: 4,
                render: function (t, e, a, s) {
                  var n = a.avatar,
                    i = a.full_name,
                    l = a.post;
                  return '<div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar me-2">' + (n ? '<img src="' + assetsPath + "img/avatars/" + n + '" alt="Avatar" class="rounded-circle">' : '<span class="avatar-initial rounded-circle bg-label-' + ["success", "danger", "warning", "info", "primary", "secondary"][Math.floor(6 * Math.random())] + '">' + (n = (((n = (i = a.full_name).match(/\b\w/g) || []).shift() || "") + (n.pop() || "")).toUpperCase()) + "</span>") + '</div></div><div class="d-flex flex-column"><span class="emp_name text-truncate">' + i + '</span><small class="emp_post text-truncate text-muted">' + l + "</small></div></div>";
                },
              },
              { responsivePriority: 1, targets: 4 },
              {
                targets: -2,
                render: function (t, e, a, s) {
                  var a = a.status,
                    n = { 1: { title: "Current", class: "bg-label-primary" }, 2: { title: "Professional", class: " bg-label-success" }, 3: { title: "Rejected", class: " bg-label-danger" }, 4: { title: "Resigned", class: " bg-label-warning" }, 5: { title: "Applied", class: " bg-label-info" } };
                  return void 0 === n[a] ? t : '<span class="badge ' + n[a].class + '">' + n[a].title + "</span>";
                },
              },
              {
                targets: -1,
                title: "Actions",
                orderable: !1,
                searchable: !1,
                render: function (t, e, a, s) {
                  return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a><ul class="dropdown-menu dropdown-menu-end m-0"><li><a href="javascript:;" class="dropdown-item">Details</a></li><li><a href="javascript:;" class="dropdown-item">Archive</a></li><div class="dropdown-divider"></div><li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></li></ul></div><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="ti ti-pencil ti-md"></i></a>';
                },
              },
            ],
            order: [[2, "desc"]],
            dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end pt-6 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end mt-n6 mt-md-0"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 7,
            lengthMenu: [7, 10, 25, 50, 75, 100],
            language: { paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
            buttons: [
              {
                extend: "collection",
                className: "btn btn-label-primary dropdown-toggle me-4 waves-effect waves-light border-none",
                text: '<i class="ti ti-file-export ti-xs me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
                buttons: [
                  {
                    extend: "print",
                    text: '<i class="ti ti-printer me-1" ></i>Print',
                    className: "dropdown-item",
                    exportOptions: {
                      columns: [3, 4, 5, 6, 7],
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
                      $(t.document.body).css("color", config.colors.headingColor).css("border-color", config.colors.borderColor).css("background-color", config.colors.bodyBg), $(t.document.body).find("table").addClass("compact").css("color", "inherit").css("border-color", "inherit").css("background-color", "inherit");
                    },
                  },
                  {
                    extend: "csv",
                    text: '<i class="ti ti-file-text me-1" ></i>Csv',
                    className: "dropdown-item",
                    exportOptions: {
                      columns: [3, 4, 5, 6, 7],
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
                    text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
                    className: "dropdown-item",
                    exportOptions: {
                      columns: [3, 4, 5, 6, 7],
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
                    text: '<i class="ti ti-file-description me-1"></i>Pdf',
                    className: "dropdown-item",
                    exportOptions: {
                      columns: [3, 4, 5, 6, 7],
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
                    text: '<i class="ti ti-copy me-1" ></i>Copy',
                    className: "dropdown-item",
                    exportOptions: {
                      columns: [3, 4, 5, 6, 7],
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
              { text: '<i class="ti ti-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Record</span>', className: "create-new btn btn-primary waves-effect waves-light" },
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
            initComplete: function (t, e) {
              $(".card-header").after('<hr class="my-0">');
            },
          })),
          $("div.head-label").html('<h5 class="card-title mb-0">DataTable with Buttons</h5>')),
        101);
    fv.on("core.form.valid", function () {
      var t = $(".add-new-record .dt-full-name").val(),
        e = $(".add-new-record .dt-post").val(),
        a = $(".add-new-record .dt-email").val(),
        s = $(".add-new-record .dt-date").val(),
        n = $(".add-new-record .dt-salary").val();
      "" != t && (i.row.add({ id: l, full_name: t, post: e, email: a, start_date: s, salary: "$" + n, status: 5 }).draw(), l++, offCanvasEl.hide());
    }),
      $(".datatables-basic tbody").on("click", ".delete-record", function () {
        i.row($(this).parents("tr")).remove().draw();
      }),
      a.length &&
        a.DataTable({
          ajax: assetsPath + "json/table-datatable.json",
          columns: [{ data: "full_name" }, { data: "email" }, { data: "city" }, { data: "post" }, { data: "salary" }, { data: "status" }, { data: "" }],
          columnDefs: [
            {
              targets: -2,
              render: function (t, e, a, s) {
                var a = a.status,
                  n = { 1: { title: "Current", class: "bg-label-primary" }, 2: { title: "Professional", class: " bg-label-success" }, 3: { title: "Rejected", class: " bg-label-danger" }, 4: { title: "Resigned", class: " bg-label-warning" }, 5: { title: "Applied", class: " bg-label-info" } };
                return void 0 === n[a] ? t : '<span class="badge ' + n[a].class + '">' + n[a].title + "</span>";
              },
            },
            {
              targets: -1,
              title: "Actions",
              orderable: !1,
              render: function (t, e, a, s) {
                return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a><div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></div></div><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="ti ti-pencil ti-md"></i></a>';
              },
            },
          ],
          dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end mt-n6 mt-md-0"f>><"table-responsive"t><"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
          displayLength: 7,
          lengthMenu: [7, 10, 25, 50, 75, 100],
          language: { paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
        }),
      s.length &&
        ((e = s.DataTable({
          ajax: assetsPath + "json/table-datatable.json",
          columns: [{ data: "" }, { data: "full_name" }, { data: "post" }, { data: "email" }, { data: "city" }, { data: "start_date" }, { data: "salary" }, { data: "status" }, { data: "" }],
          columnDefs: [
            {
              className: "control",
              orderable: !1,
              targets: 0,
              searchable: !1,
              render: function (t, e, a, s) {
                return "";
              },
            },
            { visible: !1, targets: 2 },
            {
              targets: -2,
              render: function (t, e, a, s) {
                var a = a.status,
                  n = { 1: { title: "Current", class: "bg-label-primary" }, 2: { title: "Professional", class: " bg-label-success" }, 3: { title: "Rejected", class: " bg-label-danger" }, 4: { title: "Resigned", class: " bg-label-warning" }, 5: { title: "Applied", class: " bg-label-info" } };
                return void 0 === n[a] ? t : '<span class="badge ' + n[a].class + '">' + n[a].title + "</span>";
              },
            },
            {
              targets: -1,
              title: "Actions",
              orderable: !1,
              searchable: !1,
              render: function (t, e, a, s) {
                return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a><div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></div></div><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="ti ti-pencil ti-md"></i></a>';
              },
            },
          ],
          order: [[2, "asc"]],
          dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end mt-n6 mt-md-0"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
          displayLength: 7,
          lengthMenu: [7, 10, 25, 50, 75, 100],
          language: { paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
          drawCallback: function (t) {
            var e = this.api(),
              a = e.rows({ page: "current" }).nodes(),
              s = null;
            e.column(2, { page: "current" })
              .data()
              .each(function (t, e) {
                s !== t &&
                  ($(a)
                    .eq(e)
                    .before('<tr class="group"><td colspan="8">' + t + "</td></tr>"),
                  (s = t));
              });
          },
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
        })),
        $(".dt-row-grouping tbody").on("click", "tr.group", function () {
          var t = e.order()[0];
          (2 === t[0] && "asc" === t[1] ? e.order([2, "desc"]) : e.order([2, "asc"])).draw();
        }));
    n.length &&
      n.DataTable({
        ajax: assetsPath + "json/table-datatable.json",
        columns: [{ data: "" }, { data: "full_name" }, { data: "post" }, { data: "email" }, { data: "start_date" }, { data: "salary" }, { data: "status" }, { data: "" }],
        columnDefs: [
          {
            className: "control",
            orderable: !1,
            targets: 0,
            searchable: !1,
            render: function (t, e, a, s) {
              return "";
            },
          },
          {
            targets: -2,
            render: function (t, e, a, s) {
              var a = a.status,
                n = { 1: { title: "Current", class: "bg-label-primary" }, 2: { title: "Professional", class: " bg-label-success" }, 3: { title: "Rejected", class: " bg-label-danger" }, 4: { title: "Resigned", class: " bg-label-warning" }, 5: { title: "Applied", class: " bg-label-info" } };
              return void 0 === n[a] ? t : '<span class="badge ' + n[a].class + '">' + n[a].title + "</span>";
            },
          },
          {
            targets: -1,
            title: "Actions",
            orderable: !1,
            searchable: !1,
            render: function (t, e, a, s) {
              return '<div class="d-inline-block"><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></a><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a><div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a></div></div><a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="ti ti-pencil ti-md"></i></a>';
            },
          },
        ],
        language: { url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json", paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
        order: [[2, "desc"]],
        displayLength: 7,
        dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end mt-n6 mt-md-0"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        lengthMenu: [7, 10, 25, 50, 75, 100],
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
      }),
      setTimeout(() => {
        $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm");
      }, 300);
  });
