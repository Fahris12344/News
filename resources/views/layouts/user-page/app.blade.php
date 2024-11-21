<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Berita</title>
    <link rel="icon" href="{{asset('foto/download.png')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets-user/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/vendors/css/vendor.bundle.base.css') }}">
    <!-- Endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets-user/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-user/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets-user/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets-user/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets-user/images/favicon.png') }}" />
</head>

<body>

    <!-- Header -->
    <topbar>
        @include('layouts.user-page.topbar') <!-- Include header -->
    </topbar>

    <!-- Main Content -->
    <div class="container-fluid page-body-wrapper">
        <!-- Sidebar -->
        {{-- <div class="sidebar">
            @include('layouts.user-page.sidebar') <!-- Include sidebar -->
        </div> --}}

        <!-- Konten Utama -->
        <main class="main-content">
            @yield('content') <!-- Bagian konten dinamis -->
        </main>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets-user/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets-user/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets-user/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets-user/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets-user/js/dataTables.select.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets-user/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets-user/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets-user/js/template.js') }}"></script>
    <script src="{{ asset('assets-user/js/settings.js') }}"></script>
    <script src="{{ asset('assets-user/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets-user/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets-user/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

</body>

</html>
