

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Convenziona Laboratorio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo url('/img'); ?>/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazionelayout'); ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="POST" action="{{ route('laboratorio.register') }}">
					@csrf
					<span class="login100-form-title p-b-70">
						<a href="/">
							<img src = "<?php echo url('/img'); ?>/logoindexblack.png">
						</a>
						Convenziona Laboratorio
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/laboratorio.png" alt="LABORATORIO">
					</span>

			


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nome Laboratorio" style = "position:relative; left:-10px; top:-20px; ">
						<input id="nomelaboratorio" type="text" class="input100 @error('nomelaboratorio') is-invalid @enderror" name="nomelaboratorio" value="{{ old('nomelaboratorio') }}" required autocomplete="nomelaboratorio" autofocus>
						<span class="focus-input100" data-placeholder="Nome Laboratorio"></span>
						@error('nomelaboratorio')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Codice Laboratorio Pubblico" style = "position:relative; left:-10px; top:-20px; ">
						<input id="codicelabpubblico" type="text" class="input100 @error('codicelabpubblico') is-invalid @enderror" name="codicelabpubblico" value="{{ old('codicelabpubblico') }}" required autocomplete="codicelabpubblico" autofocus>
						<span class="focus-input100" data-placeholder="Codice Laboratorio Pubblico"></span>
						@error('codicelabpubblico')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci la citta" style = "position:relative; left:-10px; top:-20px; ">
						<input id="citta" type="text" class="input100 @error('citta') is-invalid @enderror" name="citta" value="{{ old('citta') }}" required autocomplete="citta" autofocus>
						<span class="focus-input100" data-placeholder="Città"></span>
						@error('citta')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>
					

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci indirizzo" style = "position:relative; left:-10px; top:-20px; ">
						<input id="indirizzo" type="text" class="input100 @error('indirizzo') is-invalid @enderror" name="indirizzo" value="{{ old('indirizzo') }}" required autocomplete="indirizzo" autofocus>
						<span class="focus-input100" data-placeholder="indirizzo"></span>
						@error('indirizzo')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>

			

					

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci la provincia" style = "position:relative; left:-10px; top:-40px; ">
						<input id="provincia" type="text" class="input100 @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>
						<span class="focus-input100" data-placeholder="Provincia"></span>
						@error('provincia')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci E-mail" style = "position:relative; left:-10px; top:-80px; ">
						<input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						<span class="focus-input100" data-placeholder="E-mail"></span>
						@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Inserisci la password" style = "position:relative; -10px; top:-120px; ">
						<input id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						<span class="focus-input100" data-placeholder="Password"></span>
						@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Conferma la password" style = "position:relative; left:-10px; top:-170px; ">
						<input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100" data-placeholder="Conferma Password"></span>
					</div>

					
					

					

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" style = "position:relative; left:-10px; top:-100px;" >
							{{ __('Registrati') }}
						</button>								

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
<script src="<?php echo url('/registrazionelayout'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazionelayout'); ?>/js/main.js"></script>

</body>
</html>