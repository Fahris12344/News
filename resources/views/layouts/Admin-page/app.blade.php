<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.png') }}" />
</head>

<body>

    <!-- Header -->
    <topbar>
        @include('layouts.Admin-page.topbar') <!-- Include header -->
    </topbar>

    <!-- Konten Utama -->
    <main>
        @yield('content') <!-- Bagian konten dinamis -->
    </main>

    <!-- Footer -->
    <footer>
        @include('layouts.Admin-page.footer') <!-- Include footer -->
    </footer>


    <!-- plugins:js -->
    <script src="{{ asset('assets-admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets-admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets-admin/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets-admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-admin/js/template.js') }}"></script>
    <script src="{{ asset('assets-admin/js/settings.js') }}"></script>
    <script src="{{ asset('assets-admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets-admin/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets-admin/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
