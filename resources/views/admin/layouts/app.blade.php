<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('title', 'Admin Panel')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />

    <!-- Vector CSS -->
    <link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />

    <!-- Plugins -->
    <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <!-- Loader -->
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />

    <!-- Google Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />

    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}" />

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-sidebar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />
</head>

<body>




		@include('adminside.partials.navbar')

		<div class="container">
			@yield('content')
		</div>

		@include('adminside.partials.footer')



    <!-- JavaScript -->

    <!-- jQuery (must be first) -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

    <!-- Vector map JavaScript -->
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script>

    <!-- Charts -->
    <script src="{{ asset('admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

    <!-- Dashboard JS -->
    <script src="{{ asset('admin/assets/js/index.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    <script>
        if (document.querySelector('.dashboard-social-list')) {
            new PerfectScrollbar('.dashboard-social-list');
        }
        if (document.querySelector('.dashboard-top-countries')) {
            new PerfectScrollbar('.dashboard-top-countries');
        }
    </script>

</body>
</html>
