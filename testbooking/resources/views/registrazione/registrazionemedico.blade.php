<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrazione Medico</title>
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
						Registrazione Medici
					</span>
					<span class="login100-form-avatar">
						<img src="<?php echo url('/img'); ?>/medico.png" alt="MEDICO">
					</span>

					<div style = "position:relative; left:-180px; top:40px; ">
						<h5><b>Dati del medico</b></h5>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Codice Fiscale" style = "position:relative; left:-180px; top:-10px; ">
						<input class="input100" type="text" name="Codice Fiscale">
						<span class="focus-input100" data-placeholder="Codice Fiscale"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Cognome" style = "position:relative; left:-180px; top:-10px; ">
						<input class="input100" type="text" name="Cognome">
						<span class="focus-input100" data-placeholder="Cognome"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nome" style = "position:relative; left:-180px; top:-10px; ">
						<input class="input100" type="text" name="Nome">
						<span class="focus-input100" data-placeholder="Nome"></span>
					</div>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Telefono/Cellulare" style = "position:relative; left:-180px; top:-10px; ">
						<input class="input100" type="text" name="Telefono/Cellulare">
						<span class="focus-input100" data-placeholder="Telefono/Cellulare"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Luogo Nascita" style = "position:relative; left:-180px; top:-10px; ">
						<input class="input100" type="text" name="Luogo Nascita">
						<span class="focus-input100" data-placeholder="Luogo Nascita"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Data Nascita" style = "position:relative;  left:-180px; top:-20px; ">
						<span class="focus-input100" data-placeholder="Data Nascita" style = "position:relative; top:-30px; "></span>
            			<input class="input100" type="date" name="Data Nascita">
					</div>
                
					
					<div style = "position:relative;  left:-180px; top:50px; ">

            			<span class="focus-input100" data-placeholder="Nazionalità" style = "position:relative; top:-45px; "></span>
            			<select name="Nazionalità" >
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
     
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Residenza" style = "position:relative; left:-180px; top:35px; ">
						<input class="input100" type="text" name="Residenza">
						<span class="focus-input100" data-placeholder="Residenza(indirizzo)"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Città" style = "position:relative; left:-180px; top:30px; ">
						<input class="input100" type="text" name="Città">
						<span class="focus-input100" data-placeholder="Città residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Provincia" style = "position:relative; left:-180px; top:30px; ">
						<input class="input100" type="text" name="Provincia">
						<span class="focus-input100" data-placeholder="Provincia residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci CAP" style = "position:relative; left:-180px; top:30px; ">
						<input class="input100" type="text" name="CAP">
						<span class="focus-input100" data-placeholder="CAP residenza"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Domicilio" style = "position:relative; left:-180px; top:30px; ">
						<input class="input100" type="text" name="Domicilio">
						<span class="focus-input100" data-placeholder="Domicilio(indirizzo)"></span>
					</div>

					<div style = "position:relative; left:260px; top:-1605px; ">
						<h5><b>Dati dello studio medico</b></h5>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Nome Studio Medico" style = "position:relative; left:260px; top:-1657px; ">
						<input class="input100" type="text" name="Nome Studio Medico">
						<span class="focus-input100" data-placeholder="Nome Studio Medico"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Partita IVA" style = "position:relative; left:260px; top:-1657px; ">
						<input class="input100" type="text" name="Partita IVA">
						<span class="focus-input100" data-placeholder="Partita IVA"></span>
					</div>

					<div style = "position:relative; left:260px; top:-1580px; ">

						<span class="focus-input100" data-placeholder="Nazione" style = "position:relative; top:-45px; "></span>
						<select name="Nazione" >
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
				 
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Città" style = "position:relative; left:260px; top:-1580px; ">
						<input class="input100" type="text" name="Città">
						<span class="focus-input100" data-placeholder="Città"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Indirizzo" style = "position:relative; left:260px; top:-1580px; ">
						<input class="input100" type="text" name="Indirizzo">
						<span class="focus-input100" data-placeholder="Indirizzo"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci Provincia" style = "position:relative; left:260px; top:-1590px; ">
						<input class="input100" type="text" name="Provincia">
						<span class="focus-input100" data-placeholder="Provincia"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserisci E-mail" style = "position:relative; left:260px; top:-1607px; ">
						<input class="input100" type="text" name="E-mail">
						<span class="focus-input100" data-placeholder="E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Conferma E-mail" style = "position:relative; left:260px; top:-1612px; ">
						<input class="input100" type="text" name="Conferma E-mail">
						<span class="focus-input100" data-placeholder="Conferma E-mail"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Inserisci la password" style = "position:relative; left:260px; top:-1567px; ">
						<input class="input100" type="password" name="Password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					
					<div class="wrap-input100 validate-input m-b-50" data-validate="Conferma la password" style = "position:relative; left:260px; top:-1532px; ">
						<input class="input100" type="password" name="Conferma Password">
						<span class="focus-input100" data-placeholder="Conferma Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style = "position:relative; left:260px; top:-1495px; ">
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