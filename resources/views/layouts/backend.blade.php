<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/backend/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/backend/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/backend/css/core.css" rel="stylesheet" type="text/css">
	<link href="/backend/css/components.css" rel="stylesheet" type="text/css">
	<link href="/backend/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="/backend/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="/backend/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="/backend/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="/backend/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="/backend/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="/backend/js/core/app.js"></script>
	<script type="text/javascript" src="/backend/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body class="navbar-bottom">

	@include('backend.includes.header')

    @yield('page-header')


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			
           @include('backend.includes.menu')

			<!-- Main content -->
			<div class="content-wrapper">

              @yield('body')

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
            <p>Made by<a href="https://hudhud.co.tz"> HudHud Tanzania</a> &copy; <?= date('Y') ?>. All rights Reserved.</p>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of use</a></li>
					<li><a href="#">Supports</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>
