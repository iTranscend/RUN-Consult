<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: RUN-Consult - Login ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/authentication.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/all-themes.css') }}" />
</head>

<body class="theme-red">
<div class="authentication">
	<div class="container-fluid">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="l-detail">
                    <h5>Welcome</h5>
                    <h1>RUN<span>Consult</span></h1>
                    <h3>Sign in to start your session</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card">
				    <h4 class="l-login">Login</h4>
                    <form class="" id="sign_in" method="POST" action="/login2">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label class="form-label">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan" {{ old('remember') ? 'checked' : '' }}>
                            <label for="rememberme">{{ __('Remember Me') }}</label>
                        </div>
                        
                        <input type="submit" class="btn btn-raised waves-effect bg-red" value="SIGN IN">
                        @if (Route::has('password.request'))
                            <div class="text-left">
                                <a href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                            </div>
                        @endif

                    </form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery Core Js --> 
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js --> 
</body>
</html>
