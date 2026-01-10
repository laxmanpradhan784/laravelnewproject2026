<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Syndash | Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}">

    <!-- Loader -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/pace.min.css') }}">
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}">
</head>

<body>

<div class="wrapper">

        <div class="container">
            @yield('content')
        </div>


<!-- ===================== -->
<!-- JavaScript (ORDER MATTERS) -->
<!-- ===================== -->

<!-- jQuery FIRST -->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

<!-- Bootstrap Bundle (includes Popper) -->
<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<!-- Vector Maps -->
<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Charts -->
<script src="{{ asset('admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>

@stack('scripts')

</body>
</html>