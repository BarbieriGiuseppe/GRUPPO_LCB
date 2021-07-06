<!DOCTYPE html>
<html lang="en">
<head>
	<title>Accesso Utente Privato</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo url('/img'); ?>/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/login'); ?>/css/main.css">
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
						Area Riservata Utente Privato
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/utente.png" alt="UTENTE">
					</span>

				@include('includes.validation')	
				<form action = "{{ route('signin') }}" method= "post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci E-mail">
						<input class="input100" type="text" name="E-mail">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Inserisci la password">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Hai dimenticato la
							</span>

							<a href="#" class="txt2">
								Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Non sei registrato/a?
							</span>

							<a href="../areariservata/registrazione.html" class="txt2">
								Registrati
							</a>
						</li>
					</ul>
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
	<script src="<?php echo url('/login'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo url('/login'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo url('/login'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/login'); ?>/js/main.js"></script>

</body>
</html>