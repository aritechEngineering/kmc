"use strict";
$(function () {
  var e,
    t = $(".datatables-customer-order"),
    s = { 1: { title: "Ready to  Pickup", class: "bg-label-info" }, 2: { title: "Dispatched", class: "bg-label-warning" }, 3: { title: "Delivered", class: "bg-label-success" }, 4: { title: "Out for delivery", class: "bg-label-primary" } };
  t.length &&
    ((e = t.DataTable({
      ajax: assetsPath + "json/ecommerce-customer-order.json",
      columns: [{ data: "" }, { data: "order" }, { data: "date" }, { data: "status" }, { data: "spent" }, { data: " " }],
      columnDefs: [
        {
          className: "control",
          searchable: !1,
          orderable: !1,
          responsivePriority: 2,
          targets: 0,
          render: function (e, t, a, r) {
            return "";
          },
        },
        {
          targets: 1,
          responsivePriority: 4,
          render: function (e, t, a, r) {
            return "<a href='app-ecommerce-order-details.html'><span>#" + a.order + "</span></a>";
          },
        },
        {
          targets: 2,
          render: function (e, t, a, r) {
            return '<span class="text-nowrap">' + new Date(a.date).toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" }) + "</span > ";
          },
        },
        {
          targets: 3,
          render: function (e, t, a, r) {
            a = a.status;
            return '<span class="badge ' + s[a].class + '" text-capitalized>' + s[a].title + "</span>";
          },
        },
        {
          targets: 4,
          render: function (e, t, a, r) {
            return "<span >" + a.spent + "</span>";
          },
        },
        {
          targets: -1,
          title: "Actions",
          searchable: !1,
          orderable: !1,
          render: function (e, t, a, r) {
            return '<div class="text-xxl-center"><button class="btn btn-icon btn-text-secondary waves-effect waves-light rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button><div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" class="dropdown-item">View</a><a href="javascript:;" class="dropdown-item  delete-record">Delete</a></div></div>';
          },
        },
      ],
      order: [[1, "desc"]],
      dom: '<"card-header flex-column flex-md-row py-0 mt-6 mt-md-0"<"head-label text-center pt-2 pt-md-0">f>t<"row mx-6"<"col-md-12 col-xxl-6 text-center text-xl-start pb-2 pb-xxl-0 pe-0"i><"col-md-12 col-xxl-6"p>>',
      lengthMenu: [6, 30, 50, 70, 100],
      language: { sLengthMenu: "_MENU_", search: "", searchPlaceholder: "Search order", paginate: { next: '<i class="ti ti-chevron-right ti-sm"></i>', previous: '<i class="ti ti-chevron-left ti-sm"></i>' } },
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (e) {
              return "Details of " + e.data().order;
            },
          }),
          type: "column",
          renderer: function (e, t, a) {
            a = $.map(a, function (e, t) {
              return "" !== e.title ? '<tr data-dt-row="' + e.rowIndex + '" data-dt-column="' + e.columnIndex + '"><td>' + e.title + ":</td> <td>" + e.data + "</td></tr>" : "";
            }).join("");
            return !!a && $('<table class="table"/><tbody />').append(a);
          },
        },
      },
    })),
    $("div.head-label").html('<h5 class="card-title mb-0 text-nowrap">Orders placed</h5>')),
    $(".datatables-orders tbody").on("click", ".delete-record", function () {
      e.row($(this).parents("tr")).remove().draw();
    }),
    setTimeout(() => {
      $(".dataTables_filter .form-control").removeClass("form-control-sm"), $(".dataTables_length .form-select").removeClass("form-select-sm");
    }, 300);
});
