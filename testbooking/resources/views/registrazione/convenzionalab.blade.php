<!DOCTYPE html>
<html lang="en">
<head>
	<title>Convenziona Laboratorio</title>
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
						Convenziona Laboratorio
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/laboratorio.png" alt="LABORATORIO">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nome Laboratorio" style = "position:relative; left:-180px; top:0px; ">
						<input class="input100" type="text" name="Nome Laboratorio">
						<span class="focus-input100" data-placeholder="Nome Laboratorio"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci E-mail" style = "position:relative; left:250px; top:-140px; ">
						<input class="input100" type="text" name="E-mail">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nazione Laboratorio" style = "position:relative; left:-180px; top:-150px; ">
						<input class="input100" type="text" name="Nazione Laboratorio">
						<span class="focus-input100" data-placeholder="Nazione Laboratorio"></span>
					</div>

					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Conferma E-mail" style = "position:relative; left:250px; top:-290px; ">
						<input class="input100" type="text" name="Conferma E-mail">
						<span class="focus-input100" data-placeholder="Conferma E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Città Laboratorio" style = "position:relative; left:-180px; top:-300px; ">
						<input class="input100" type="text" name="Città Laboratorio">
						<span class="focus-input100" data-placeholder="Città Laboratorio"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Inserisci la password" style = "position:relative; left:250px; top:-390px; ">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Indirizzo Laboratorio" style = "position:relative; left:-180px; top:-400px; ">
						<input class="input100" type="text" name="Indirizzo Laboratorio">
						<span class="focus-input100" data-placeholder="Indirizzo Laboratorio"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Conferma la password" style = "position:relative; left:250px; top:-490px; ">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Conferma Password"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Provincia Laboratorio" style = "position:relative; left:-180px; top:-500px; ">
						<input class="input100" type="text" name="Provincia Laboratorio">
						<span class="focus-input100" data-placeholder="Provincia Laboratorio"></span>
					</div>

					<div class="container-login100-form-btn"  style = "position:relative; left:250px; top:-590px; ">
						<button class="login100-form-btn">
							Convenzionati
						</button>
					</div>

					<div style = "position:relative; left:30px; top:-570px; ">
						<br>
						<p>Dopo essersi convenzionati si verrà a conoscenza di: <br> 
											
					</div>

					<div style = "position:relative; left:-40px; top:-570px; ">
						<br>
						<nobr>
						<p>-Un <b>codice laboratorio privato</b> con cui accedere alla propria area privata <br></p>
						<hr>
						<p>-Un <b>codice laboratorio pubblico</b> con cui si verà riconosciuti dall'azienda sanitaria <br></p>
						<hr>
						<p>-Un <b>codice azienda sanitaria pubblico</b> a cui si è referenti </p>
												
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