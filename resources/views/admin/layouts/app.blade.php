<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jan 2026 05:03:39 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title> Syndash </title>
	<!-- favicon -->
	<link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />

	<!-- Vector CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" />

	<!-- Plugins -->
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" />

	<!-- Loader -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/pace.min.css') }}" />
	<script src="{{ asset('admin/js/pace.min.js') }}"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />

	<!-- Google Fonts (keep CDN as-is) -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />

	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}" />

	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-sidebar.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/assets/css/dark-theme.css') }}" />

</head>

<body>




		@include('admin.partials.navbar')

		<div class="container">
			@yield('content')
		</div>

		@include('admin.partials.footer')



<!-- JavaScript -->
	
	<!-- Bootstrap JS -->
	<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

	<!-- jQuery -->
	<script src="{{ asset('admin/js/jquery.min.js') }}"></script>

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

	<!-- ApexCharts -->
	<script src="{{ asset('admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>

	<!-- Page JS -->
	<script src="{{ asset('admin/assets/js/index.js') }}"></script>

	<!-- App JS -->
	<script src="{{ asset('admin/assets/js/app.js') }}"></script>

	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl509132'},{'dcenter':'p3'},{'cp_id':'10399385'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../../img1.wsimg.com/signals/js/clients/scc-c2/scc-c2.min.js'></script>
<!-- Mirrored from codervent.com/syndash/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jan 2026 05:04:11 GMT -->
</html>