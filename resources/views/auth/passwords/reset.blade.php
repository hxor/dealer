<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="{{ asset('back/images/favicon_1.ico') }}">

		<title>Reset Password | CV. Naga Mas Motor</title>

		<link href="{{ asset('back/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('back/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js') }}"></script>
        <![endif]-->

        <script src="{{ asset('back/js/modernizr.min.js') }}"></script>

	</head>
	<body>

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Reset <strong class="text-custom">Password</strong> </h3>
				</div>

				<div class="panel-body">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                </div>
            </div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
									Reset Password
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>

		</div>

		<script>
			var resizefunc = [];
		</script>

		<!-- jQuery  -->
        <script src="{{ asset('back/js/jquery.min.js') }}"></script>
        <script src="{{ asset('back/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('back/js/detect.js') }}"></script>
        <script src="{{ asset('back/js/fastclick.js') }}"></script>
        <script src="{{ asset('back/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('back/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('back/js/waves.js') }}"></script>
        <script src="{{ asset('back/js/wow.min.js') }}"></script>
        <script src="{{ asset('back/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('back/js/jquery.scrollTo.min.js') }}"></script>


        <script src="{{ asset('back/js/jquery.core.js') }}"></script>
        <script src="{{ asset('back/js/jquery.app.js') }}"></script>

	</body>
</html>
