<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LARAVEL APP - {{ $title ?? '' }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('template/backend/stellar') }}/css/style.css">
    <!-- End layout styles -->
    @stack('css')
    <link rel="shortcut icon" href="{{ asset('template/backend/stellar') }}/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layout.backend.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layout.backend.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('template/backend/stellar') }}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('template/backend/stellar') }}/./vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('template/backend/stellar') }}/./vendors/moment/moment.min.js"></script>
    <script src="{{ asset('template/backend/stellar') }}/./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('template/backend/stellar') }}/./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('template/backend/stellar') }}/js/off-canvas.js"></script>
    <script src="{{ asset('template/backend/stellar') }}/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('template/backend/stellar') }}/./js/dashboard.js"></script>
    <!-- End custom js for this page -->
    @stack('js')
  </body>
</html>