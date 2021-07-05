<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrazione Azienda</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?php echo url('/img'); ?>/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/registrazione'); ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						<a href="/">
							<img src = "<?php echo url('/img'); ?>/logoindexblack.png">
						</a>
						Registrazione Azienda
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/azienda.png" alt="AZIENDA">
					</span>

					<div style = "position:relative; left:-180px; top:0px; ">
						<h5><b>Dati del datore</b></h5>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Codice Fiscale" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Codice Fiscale">
						<span class="focus-input100" data-placeholder="Codice Fiscale"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Cognome" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Cognome">
						<span class="focus-input100" data-placeholder="Cognome"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nome" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Nome">
						<span class="focus-input100" data-placeholder="Nome"></span>
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Telefono/Cellulare" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Telefono/Cellulare">
						<span class="focus-input100" data-placeholder="Telefono/Cellulare"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Luogo Nascita" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Luogo Nascita">
						<span class="focus-input100" data-placeholder="Luogo Nascita"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Data Nascita" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Data Nascita">
						<span class="focus-input100" data-placeholder="Data Nascita"></span>
					</div>

					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nazionalità" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Nazionalità">
						<span class="focus-input100" data-placeholder="Nazionalità"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Residenza" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Residenza">
						<span class="focus-input100" data-placeholder="Residenza(indirizzo)"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Città" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Città">
						<span class="focus-input100" data-placeholder="Città residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Provincia" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Provincia">
						<span class="focus-input100" data-placeholder="Provincia residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci CAP" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="CAP">
						<span class="focus-input100" data-placeholder="CAP residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Domicilio" style = "position:relative; left:-180px; top:-50px; ">
						<input class="input100" type="text" name="Domicilio">
						<span class="focus-input100" data-placeholder="Domicilio(indirizzo)"></span>
					</div>

					<div style = "position:relative; left:260px; top:-1726px; ">
						<h5><b>Dati dell'Azienda</b></h5>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Ragione Sociale" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Ragione Sociale">
						<span class="focus-input100" data-placeholder="Ragione Sociale"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Partita IVA" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Partita IVA">
						<span class="focus-input100" data-placeholder="Partita IVA"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Ruolo Aziendale" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Ruolo Aziendale">
						<span class="focus-input100" data-placeholder="Ruolo Aziendale"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nazione" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Nazione">
						<span class="focus-input100" data-placeholder="Nazione"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Città" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Città">
						<span class="focus-input100" data-placeholder="Città"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Indirizzo" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Indirizzo">
						<span class="focus-input100" data-placeholder="Indirizzo"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Provincia" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Provincia">
						<span class="focus-input100" data-placeholder="Provincia"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci E-mail" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="E-mail">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Conferma E-mail" style = "position:relative; left:260px; top:-1775px; ">
						<input class="input100" type="text" name="Conferma E-mail">
						<span class="focus-input100" data-placeholder="Conferma E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Inserisci la password" style = "position:relative; left:260px; top:-1725px; ">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					
					<div class="wrap-input100 validate-input m-b-50" data-validate="Conferma la password" style = "position:relative; left:260px; top:-1690px; ">
						<input class="input100" type="password" name="Conferma Password">
						<span class="focus-input100" data-placeholder="Conferma Password"></span>
					</div>
				
					<div class="container-login100-form-btn" style = "position:relative; left:260px; top:-1650px; ">
						<button class="login100-form-btn">
							Registrati
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
					<li><a href="../index.html"><i class="fa fa-circle"></i>Home</a></li>
					<li><a href="../index.html#laboratori"><i class="fa fa-circle"></i>Laboratori Convenzionati</a></li>
					<li><a href="../index.html#service"><i class="fa fa-circle"></i>Servizi</a></li>
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
<script src="<?php echo url('/registrazione'); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo url('/registrazione'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo url('/registrazione'); ?>/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo url('/registrazione'); ?>/js/main.js"></script>

</body>
</html>