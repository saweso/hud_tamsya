<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin-Panel | Tamsya</title>

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
	<script type="text/javascript" src="/backend/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="navbar-bottom login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">ADMIN LOGIN</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-home"></i>
						<span class="visible-xs-inline-block position-right"> Home</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

              <!-- Advanced login -->
				<form action="{{ route('admin.login.submit') }}" method="POST">
                {{ csrf_field() }}
					<div class="panel panel-body login-form">
						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
						</div>

                       <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? ' has-error' : '' }}">
							<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							<div class="form-control-feedback">
								<i class="icon-mention text-muted"></i>
							</div>
						</div>

						<div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error' : '' }}">
							<input type="password" class="form-control" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
						</div>

						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
						</div>
                        <div class="text-center">
							<a class="btn btn-link" href="{{ route('admin.password.request') }}">Forgot Your Password?</a>
						</div>
					</div>
				</form>
				<!-- /advanced login -->

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
