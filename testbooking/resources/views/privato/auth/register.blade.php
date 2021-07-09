<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrazione Utente Privato</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<span class="login100-form-title p-b-70">
						<a href="/">
							<img src = "<?php echo url('/img'); ?>/logoindexblack.png">
						</a>
						<br>
					</span>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-300 p-b-100">
			

				<div class="flash-message">
					@foreach (['danger', 'warning', 'success', 'info'] as $msg)
						@if(Session::has('alert-' . $msg))
							<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
						@endif
					@endforeach
				</div>
	
				<div class="card">
					<div class="card-header">{{ __('Registrazione Utente Privato') }}</div>
	
					<div class="card-body">
						<form method="POST" action="{{ route('privato.register') }}">
							@csrf
	
							<div class="form-group row">
								<label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
	
								<div class="col-md-6">
									<input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
	
									@error('nome')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="cognome" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>
	
								<div class="col-md-6">
									<input id="cognome" type="text" class="form-control @error('cognome') is-invalid @enderror" name="cognome" value="{{ old('cognome') }}" required autocomplete="cognome" autofocus>
	
									@error('cognome')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
                            
                            <div class="form-group row">
								<label for="codicefiscale" class="col-md-4 col-form-label text-md-right">{{ __('Codice Fiscale') }}</label>
	
								<div class="col-md-6">
									<input id="codicefiscale" type="text" class="form-control @error('codicefiscale') is-invalid @enderror" name="codicefiscale" value="{{ old('codicefiscale') }}" required autocomplete="codicefiscale" autofocus>
	
									@error('codicefiscale')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="datanascita" class="col-md-4 col-form-label text-md-right">{{ __('Data di Nascita') }}</label>
	
								<div class="col-md-6">
									<input id="datanascita" type="date" class="form-control @error('datanascita') is-invalid @enderror" name="datanascita" value="{{ old('datanascita') }}" required autocomplete="datanascita" autofocus>
	
									@error('datanascita')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="nazionalita" class="col-md-4 col-form-label text-md-right">{{ __('Nazionalità') }}</label>
	
								<div class="col-md-6">
									<select name="nazionalita" type="text" class="form-control @error('nazionalita') is-invalid @enderror" name="nazionalita" value="{{ old('nazionalita') }}" required autocomplete="nazionalita" autofocus>
                                        <option value="AF">Afghanistan</option>
						  <option value="AL">Albania</option>
						  <option value="DZ">Algeria</option>
						  <option value="AS">American Samoa</option>
						  <option value="AD">Andorra</option>
						  <option value="AO">Angola</option>
						  <option value="AI">Anguilla</option>
						  <option value="AQ">Antartide</option>
						  <option value="AG">Antigua e Barbuda</option>
						  <option value="AN">Antille Olandesi</option>
						  <option value="SA">Arabia Saudita</option>
						  <option value="AR">Argentina</option>
						  <option value="AM">Armenia</option>
						  <option value="AW">Aruba</option>
						  <option value="AU">Australia</option>
						  <option value="AT">Austria</option>
						  <option value="AZ">Azerbaijan</option>
						  <option value="BS">Bahamas</option>
						  <option value="BH">Bahrain</option>
						  <option value="BD">Bangladesh</option>
						  <option value="BB">Barbados</option>
						  <option value="BY">Bielorussia</option>
						  <option value="BE">Belgio</option>
						  <option value="BZ">Belize</option>
						  <option value="BJ">Benin</option>
						  <option value="BM">Bermuda</option>
						  <option value="BT">Bhutan</option>
						  <option value="BO">Bolivia</option>
						  <option value="BA">Bosnia e Herzegovina</option>
						  <option value="BW">Botswana</option>
						  <option value="BR">Brasile</option>
						  <option value="BN">Brunei Darussalam</option>
						  <option value="BG">Bulgaria</option>
						  <option value="BF">Burkina Faso</option>
						  <option value="BI">Burundi</option>
						  <option value="KH">Cambogia</option>
						  <option value="CM">Cameroon</option>
						  <option value="CA">Canada</option>
						  <option value="CV">Capo Verde</option>
						  <option value="KY">Isole Cayman</option>
						  <option value="TD">Chad</option>
						  <option value="CL">Cile</option>
						  <option value="CN">Cina</option>
						  <option value="CO">Colombia</option>
						  <option value="KM">Comore</option>
						  <option value="CG">Congo</option>
						  <option value="CD">Congo (Repubblica Democratica)</option>
						  <option value="CR">Costa Rica</option>
						  <option value="HR">Croazia</option>
						  <option value="CU">Cuba</option>
						  <option value="CY">Cipro</option>
						  <option value="DK">Danimarca</option>
						  <option value="DM">Dominica</option>
						  <option value="EC">Ecuador</option>
						  <option value="EG">Egitto</option>
						  <option value="SV">El Salvador</option>
						  <option value="AE">Emirati Arabi Uniti</option>
						  <option value="ER">Eritrea</option>
						  <option value="EE">Estonia</option>
						  <option value="ET">Etiopia</option>
						  <option value="FJ">Fiji</option>
						  <option value="FI">Finlandia</option>
						  <option value="FR">Francia</option>
						  <option value="FX">France (Territorio Europeo)</option>
						  <option value="GQ">Guinea Equatoriale</option>
						  <option value="GF">Guinea Francese</option>
						  <option value="GA">Gabon</option>
						  <option value="GM">Gambia</option>
						  <option value="GE">Georgia</option>
						  <option value="DE">Germania</option>
						  <option value="GH">Ghana</option>
						  <option value="GI">Gibilterra</option>
						  <option value="DJ">Gibuti</option>
						  <option value="GR">Grecia</option>
						  <option value="GL">Groenlandia</option>
						  <option value="GD">Grenada</option>
						  <option value="GP">Guadalupa</option>
						  <option value="GU">Guam</option>
						  <option value="GT">Guatemala</option>
						  <option value="GN">Guinea</option>
						  <option value="GW">Guinea Bissau</option>
						  <option value="GY">Guyana</option>
						  <option value="HT">Haiti</option>
						  <option value="HN">Honduras</option>
						  <option value="HK">Hong Kong</option>
						  <option value="IS">Islanda</option>
						  <option value="IN">India</option>
						  <option value="ID">Indonesia</option>
						  <option value="IR">Iran</option>
						  <option value="IQ">Iraq</option>
						  <option value="IE">Irlanda</option>
						  <option value="IL">Israele</option>
						  <option value="BV">Isola Bouvet</option>
						  <option value="CC">Isole Cocos (Keeling)</option>
						  <option value="CX">Isola di Natale</option>
						  <option value="NF">Isola Norfolk</option>
						  <option value="CK">Isole Cook</option>
						  <option value="FK">Isole Falkland</option>
						  <option value="FO">Isole Faroe</option>
						  <option value="HM">Isole Heard e McDonald</option>
						  <option value="MP">Isole Marianne settentrionali</option>
						  <option value="MH">Isole Marshall</option>
						  <option value="UM">Isole Minori Esterne USA</option>
						  <option value="SB">Isole Solomon</option>
						  <option value="TC">Isole Turks e Caicos</option>
						  <option value="VG">Isole Virgin (British)</option>
						  <option value="VI">Isole Virgin (USA)</option>
						  <option value="WF">Isole Wallis e Futuna</option>
						  <option value="IT"selected="selected">Italia</option>
						  <option value="JM">Jamaica</option>
						  <option value="JP">Giappone</option>
						  <option value="JO">Giordania</option>
						  <option value="KZ">Kazakhstan</option>
						  <option value="KE">Kenya</option>
						  <option value="KI">Kiribati</option>
						  <option value="KW">Kuwait</option>
						  <option value="KG">Kirghizistan</option>
						  <option value="LA">Laos</option>
						  <option value="LV">Lettonia</option>
						  <option value="LB">Libano</option>
						  <option value="LS">Lesotho</option>
						  <option value="LR">Liberia</option>
						  <option value="LY">Libia</option>
						  <option value="LI">Liechtenstein</option>
						  <option value="LT">Lituania</option>
						  <option value="LU">Lussemburgo</option>
						  <option value="MO">Macau</option>
						  <option value="MK">Macedonia</option>
						  <option value="MG">Madagascar</option>
						  <option value="MW">Malawi</option>
						  <option value="MY">Malesia</option>
						  <option value="MV">Maldive</option>
						  <option value="ML">Mali</option>
						  <option value="MT">Malta</option>
						  <option value="MQ">Martinique</option>
						  <option value="MR">Mauritania</option>
						  <option value="MU">Mauritius</option>
						  <option value="YT">Mayotte</option>
						  <option value="MX">Messico</option>
						  <option value="FM">Micronesia</option>
						  <option value="MD">Moldavia</option>
						  <option value="MC">Monaco</option>
						  <option value="MN">Mongolia</option>
						  <option value="ME">Montenegro</option>
						  <option value="MS">Montserrat</option>
						  <option value="MA">Marocco</option>
						  <option value="MZ">Mozambico</option>
						  <option value="MM">Myanmar</option>
						  <option value="NA">Namibia</option>
						  <option value="NR">Nauru</option>
						  <option value="NP">Nepal</option>
						  <option value="NC">Nuova Caledonia</option>
						  <option value="NZ">Nuova Zelanda</option>
						  <option value="NI">Nicaragua</option>
						  <option value="NE">Niger</option>
						  <option value="NG">Nigeria</option>
						  <option value="NU">Niue</option>
						  <option value="KP">Nord Korea</option>
						  <option value="NO">Norvegia</option>    
						  <option value="NL">Olanda</option>
						  <option value="OM">Oman</option>
						  <option value="PK">Pakistan</option>
						  <option value="PW">Palau</option>
						  <option value="PA">Panama</option>
						  <option value="PG">Papua Nuova Guinea</option>
						  <option value="PY">Paraguay</option>
						  <option value="PE">Peru</option>
						  <option value="PH">Filippine</option>
						  <option value="PN">Pitcairn</option>
						  <option value="PL">Polonia</option>
						  <option value="PF">Polinesia</option>
						  <option value="PT">Portogallo</option>
						  <option value="PR">Porto Rico</option>
						  <option value="QA">Qatar</option>
						  <option value="GB">Regno Unito</option>
						  <option value="SY">Repubblica Araba Siriana</option>
						  <option value="CZ">Repubblica Ceca</option>
						  <option value="CF">Repubblica Centrale Africana</option>
						  <option value="DO">Repubblica Domenicana</option>
						  <option value="RE">Reunion</option>
						  <option value="RO">Romania</option>
						  <option value="RU">Russia</option>
						  <option value="RW">Rwanda</option>
						  <option value="EH">Sahara occidentale</option>
						  <option value="GS">S. Georgia &amp; S. Sandwich Isls.</option>
						  <option value="SH">Saint Helena</option>
						  <option value="KN">Saint Kitts &amp; Nevis Anguilla</option>
						  <option value="LC">Saint Lucia</option>
						  <option value="PM">Saint Pierre e Miquelon</option>
						  <option value="VC">Saint Vincent &amp; Grenadines</option>
						  <option value="WS">Samoa</option>
						  <option value="VA">Santa Sede (Vaticano)</option>
						  <option value="SM">San Marino</option>
						  <option value="ST">Sao Tome e Principe</option>
						  <option value="SN">Senegal</option>
						  <option value="RS">Serbia</option>
						  <option value="SC">Seychelles</option>
						  <option value="SL">Sierra Leone</option>
						  <option value="SG">Singapore</option>
						  <option value="SK">Slovacchia</option>
						  <option value="SI">Slovenia</option>
						  <option value="SO">Somalia</option>
						  <option value="ZA">Sud Africa</option>
						  <option value="KR">Sud Korea</option>
						  <option value="ES">Spagna</option>
						  <option value="LK">Sri Lanka</option>
						  <option value="SD">Sudan</option>
						  <option value="US">Stati Uniti</option>
						  <option value="SR">Suriname</option>
						  <option value="SZ">Swaziland</option>
						  <option value="SE">Svezia</option>
						  <option value="CH">Svizzera</option>
						  <option value="TW">Taiwan</option>
						  <option value="TJ">Tajikistan</option>
						  <option value="TZ">Tanzania</option>
						  <option value="TF">Territori della Francia del sud</option>
						  <option value="IO">Territorio britannico dell'Oceano Indiano</option>
						  <option value="PS">Territorio Palestinese</option>
						  <option value="TH">Thailandia</option>
						  <option value="TP">Timor Est</option>
						  <option value="TG">Togo</option>
						  <option value="TK">Tokelau</option>
						  <option value="TO">Tonga</option>
						  <option value="TT">Trinidad and Tobago</option>
						  <option value="TN">Tunisia</option>
						  <option value="TR">Turchia</option>
						  <option value="TM">Turkmenistan</option>
						  <option value="TV">Tuvalu</option>
						  <option value="UG">Uganda</option>
						  <option value="UA">Ucraina</option>
						  <option value="HU">Ungaria</option>
						  <option value="UY">Uruguay</option>
						  <option value="UZ">Uzbekistan</option>
						  <option value="VU">Vanuatu</option>
						  <option value="VE">Venezuela</option>
						  <option value="VN">Vietnam</option>
						  <option value="YE">Yemen</option>
						  <option value="ZR">Zaire</option>
						  <option value="ZM">Zambia</option>
						  <option value="ZW">Zimbabwe</option>
						</select>
									@error('nazionalita')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="luogonascita" class="col-md-4 col-form-label text-md-right">{{ __('Luogo di Nascita') }}</label>
	
								<div class="col-md-6">
									<input id="luogonascita" type="text" class="form-control @error('luogonascita') is-invalid @enderror" name="luogonascita" value="{{ old('luogonascita') }}" required autocomplete="luogonascita" autofocus>
	
									@error('luogonascita')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="residenza" class="col-md-4 col-form-label text-md-right">{{ __('Residenza') }}</label>
	
								<div class="col-md-6">
									<input id="residenza" type="text" class="form-control @error('residenza') is-invalid @enderror" name="residenza" value="{{ old('residenza') }}" required autocomplete="residenza" autofocus>
	
									@error('residenza')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="citta" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}</label>
	
								<div class="col-md-6">
									<input id="citta" type="text" class="form-control @error('citta') is-invalid @enderror" name="citta" value="{{ old('citta') }}" required autocomplete="citta" autofocus>
	
									@error('citta')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="provincia" class="col-md-4 col-form-label text-md-right">{{ __('Provincia') }}</label>
	
								<div class="col-md-6">
									<input id="provincia" type="text" class="form-control @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>
	
									@error('provincia')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="cap" class="col-md-4 col-form-label text-md-right">{{ __('CAP') }}</label>
	
								<div class="col-md-6">
									<input id="cap" type="text" class="form-control @error('cap') is-invalid @enderror" name="cap" value="{{ old('cap') }}" required autocomplete="cap" autofocus>
	
									@error('cap')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

                            <div class="form-group row">
								<label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
	
								<div class="col-md-6">
									<input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
	
									@error('telefono')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="form-group row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Mail') }}</label>
	
								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
	
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
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
	
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
                            
							<div class="form-group row">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}</label>
	
								<div class="col-md-6">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>
                        
							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										{{ __('Registati') }}
									</button>
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

