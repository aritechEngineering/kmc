<!DOCTYPE html>

<html lang="en" class="light-style layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="../../../assets/" data-template="vertical-menu-template" data-style="light">
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2024 05:09:30 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Invoice (Print version) - Pages | Vuexy - Bootstrap Admin Template</title>

  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin" />

  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js",
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "../../../../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5J3LMKC");
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="../../../assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../../../assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="../../../assets/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->

  <link rel="stylesheet" href="../../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

  <link rel="stylesheet" href="../../../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../../../assets/vendor/libs/node-waves/node-waves.css" />

  <link rel="stylesheet" href="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../../../assets/vendor/libs/typeahead-js/typeahead.css" />

  <!-- Page CSS -->

  <link rel="stylesheet" href="../../../assets/vendor/css/pages/app-invoice-print.css" />

  <!-- Helpers -->
  <script src="../../../assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="../../../assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../../assets/js/config.js"></script>
</head>

<body>
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Content -->

  <div class="invoice-print p-12">
    <div class="d-flex justify-content-between flex-row">
      <div class="mb-6">
        <div class="d-flex svg-illustration mb-6 gap-2">
          <div class="app-brand-logo demo">
            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
              <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
              <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
            </svg>
          </div>
          <span class="app-brand-text fw-bold"> KMC </span>
        </div>
        <p class="mb-2">Floor# 7(AA-7), Plot# 7, Bir Uttam AK Khondakar Road,</p>
        <p class="mb-2">Mohakhali C/A. Dhaka-1212</p>
        <p class="mb-3">+88-0185-2277412, +88-02-55041065</p>
      </div>
      <div>
        <h5 class="mb-6">Invoice #Invoice240601235</h5>
        <div class="mb-1">
          <span>Invoice Issue Date:</span>
          <span>April 25, 2021</span>
        </div>
        <div>
          <span>Delivery Date:</span>
          <span>May 25, 2021</span>
        </div>
      </div>
    </div>

    <hr class="mb-6" />

    <div class="row d-flex justify-content-between mb-6">
      <div class="col-sm-6 w-50">
        <h6>Supplier:</h6>
        <p class="mb-0">Korim Motors Ltd.</p>
        <p class="mb-0">H-105, R-35, Banani, Dhaka</p>
        <p class="mb-0">01713549852</p>
        <p class="mb-3">motos@gmail.com</p>
        <p class="mb-0">BIN Number: 1243598723</p>
        <p class="mb-0">TIN Number: 65874123596314</p>
      </div>
      <div class="col-sm-6 w-50">
        <h6>Payment Option:</h6>
        <table>
          <tbody>
            <!-- <tr>
                <td class="pe-4">Total Due:</td>
                <td>$12,110.55</td>
              </tr> -->
            <tr>
              <td class="pe-4">Bank name:</td>
              <td>City Bank PLC</td>
            </tr>
            <tr>
              <td class="pe-4">Account Number:</td>
              <td>351 356 2543985</td>
            </tr>
            <tr>
              <td class="pe-4">Branch:</td>
              <td>Banani Br.</td>
            </tr>
            <tr>
              <td class="pe-4">Routing Number:</td>
              <td>1359745</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="table-responsive border border-bottom-0 border-top-0 rounded">
      <table class="table m-0">
        <thead>
          <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Unit Price</th>
            <th>Qty</th>
            <th>Total Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-nowrap text-heading">Air Filter</td>
            <td class="text-nowrap"></td>
            <td>7,500.00</td>
            <td>1</td>
            <td>7,500.00</td>
          </tr>
          <tr>
            <td class="text-nowrap text-heading">Air Filter</td>
            <td class="text-nowrap"></td>
            <td>7,500.00</td>
            <td>1</td>
            <td>7,500.00</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-responsive">
      <table class="table m-0 table-borderless">
        <tbody>
          <tr>
            <td class="align-top pe-6 ps-0 py-6">
              <p class="mb-1">
                <span class="me-2 h6">Representative:</span>
                <span>Rashedul Islam</span>
              </p>
              <span>Thanks for your business</span>
            </td>
            <td class="px-0 py-6 w-px-100">
              <p class="mb-2">Subtotal:</p>
              <p class="mb-2">Discount:</p>
              <p class="mb-2 border-bottom pb-2">Vat(+):</p>
              <p class="mb-2 border-bottom pb-2">Tax(-):</p>
              <p class="mb-0 pt-2">Total:</p>
            </td>
            <td class="text-end px-0 py-6 w-px-100 fw-medium text-heading">
              <p class="fw-medium mb-2">1,500.00</p>
              <p class="fw-medium mb-2">00.00</p>
              <p class="fw-medium mb-2 border-bottom pb-2">1500.00</p>
              <p class="fw-medium mb-2 border-bottom pb-2">450.00</p>
              <p class="fw-medium mb-0 pt-2">14,450.00</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <hr class="mt-0 mb-6" />
    <div class="row">
      <div class="col-12">
        <span class="fw-medium">Note:</span>
        <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</span>
      </div>
    </div>
  </div>

  <!-- / Content -->

  <div class="buy-now">
    <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="../../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="../../../assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="../../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../../assets/js/app-invoice-print.js"></script>
</body>

<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Jun 2024 05:09:31 GMT -->

</html>

<!-- beautify ignore:end -->