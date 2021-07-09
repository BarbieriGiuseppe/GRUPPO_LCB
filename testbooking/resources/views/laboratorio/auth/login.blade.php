
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accesso Laboratorio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo url('/img'); ?>/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/loginlayout'); ?>/css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				
					<span class="login100-form-title p-b-70">
						<a href="/">
							<img src = "<?php echo url('/img'); ?>/logoindexblack.png">
						</a>
						Area Riservata Laboratorio
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/laboratorio.png" alt="LABORATORIO">
					</span>

				
					<form method="POST" action="{{ route('laboratorio.login') }}" class="login100-form validate-form">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ricordami') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('laboratorio.password.request'))
                                    <a class="login-more p-t-70" href="{{ route('laboratorio.password.request') }}">
                                        {{ __('Hai dimenticato la password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
			</div>
		</div>
	</div>
	<footer id="footer">
		<div class="top-footer">
		  <div class="container">
			<div class="row">
			  <div class="col-md-4 col-sm-4 marb20">
				  <h4 class="white no-padding">Link Rapidi</h4>
				 <ul class="quick-info">
					<li><a href="/"><i class="fa fa-circle"></i>Home</a></li>
					<li><a href="/#laboratori"><i class="fa fa-circle"></i>Laboratori Convenzionati</a></li>
					<li><a href="/#service"><i class="fa fa-circle"></i>Servizi</a></li>
				  </ul>
			  </div>
			</div>
		  </div>
		</div>
		<div class="footer-line">
		  <div class="container">
			<div class="row">
			  <div class="col-md-12 text-center">
				<div class="credits">
				  ©2021 Realizzato da <a href="https://github.com/BarbieriGiuseppe/GRUPPO_LCB">Gruppo LCB</a>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </footer>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo url('/loginlayout'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo url('/loginlayout'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/loginlayout'); ?>/js/main.js"></script>

</body>
</html>