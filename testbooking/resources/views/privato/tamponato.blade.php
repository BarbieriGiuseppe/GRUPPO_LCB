
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @mapstyles
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Area Riservata</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/custom.css" rel="stylesheet" />

    <link href="<?php echo url('/areariservatalayout'); ?>/css/progress.css" rel="stylesheet" />

     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
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
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/img/logoindexwhite.png" />
                    </a>
                </div>
              
                 
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('privato')->user()->nome }}  {{ Auth::guard('privato')->user()->cognome }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('privato.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('privato.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    <li class="active-link">
                        <a href="home" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   

                    <li class="active-link">
                        <a href="tamponato"><i class="fa fa-table "></i>Prenotazione  <span class="badge"></span></a>
                    </li>
                    
                    <li class="active-link">
                        <a href="modifica"><i class="fa fa-edit "></i>Modifica Profilo  <span class="badge"></span></a>
                    </li>

                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container">
                    <ul class="progressbar">
                        <li class="active"> Dati Tamponato</li>
                        <li>Selezione Appuntamento</li>
                        <li>Riepilogo e Pagamento</li>

                </ul>
                <div class="row">
                    <div class="col-md-12">
                     <h2>Prenotazione Tampone </h2>   
                    </div>

                    <div class="col-md-12">
                        <h4>Dati del tamponato </h4>   
                       </div>
                </div>              
                 <!-- /. ROW  -->
                 <!-- /. ROW  --> 
     <form method="POST" action="{{ route('privato.registerTamponato') }}">
		@csrf
    
    <div class="input-group"> 
         <h5> Codice Fiscale</h5>
        <input id="codicefiscaletamponato" type="text" required class="form-control" name = "codicefiscaletamponato">
        @error('codicefiscaletamponato')
            <div class = "error text-danger"> {{ $message }} </div>
        @enderror
    </div>
    
    <div class="input-group"> 
         <h5> Cognome</h5>
        <input id="cognome" type="text" class="input100 @error('cognome') is-invalid @enderror" name="cognome" value="{{ old('cognome') }}" required autocomplete="cognome" autofocus>
        @error('cognome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    </div>

    
    
    <div class="input-group"> 
        <h5> Nome</h5>
       <input id="nome" type="text" class="input100 @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
       @error('nome')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
   </div>

    
    
   <div class="input-group"> 
         <h5> Mail</h5>
         <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
         @error('email')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
    </div>

    
    
    <div class="input-group"> 
        <h5> Telefono</h5>
       <input id="telefono" type="text" class="input100 @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
       @error('telefono')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
   </div>

    
    
   <div class="input-group"> 
    <h5> Luogo Di Nascita</h5>
   <input id="luogonascita" type="text" class="input100 @error('luogonascita') is-invalid @enderror" name="luogonascita" value="{{ old('luogonascita') }}" required autocomplete="luogonascita" autofocus>
   @error('luogonascita')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
               @enderror
    </div>

    <div class="input-group"> 
        <h5> Data Di Nascita</h5>
       <input id="datanascita" type="date" min="1920-01-01" max="2018-01-01" class="input100 @error('datanascita') is-invalid @enderror" name="datanascita" value="{{ old('datanascita') }}" required autocomplete="datanascita" autofocus>
       @error('datanascita')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
        </div>
    
    
    
        <div class="input-group"> 
            <h5> Residenza</h5>
           <input id="residenza" type="text" class="input100 @error('residenza') is-invalid @enderror" name="residenza" value="{{ old('residenza') }}" required autocomplete="residenza" autofocus>
           @error('residenza')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
        </div>


    
        <div class="input-group"> 
            <h5>Città</h5>
           <input id="citta" type="text" class="input100 @error('citta') is-invalid @enderror" name="citta" value="{{ old('citta') }}" required autocomplete="citta" autofocus>
           @error('citta')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
        </div>

    
    
        <div class="input-group"> 
            <h5>Provincia</h5>
           <input id="provincia" type="text" class="input100 @error('provincia') is-invalid @enderror" name="provincia" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus>
           @error('provincia')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
        </div>

    
    
        <div class="input-group"> 
            <h5>CAP</h5>
           <input id="cap" type="text" class="input100 @error('cap') is-invalid @enderror" name="cap" value="{{ old('cap') }}" required autocomplete="cap" autofocus>
           @error('cap')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
        </div>

    <div class="input-group">
        <h5>Nazione</h5>
        <select name="nazione" type="text" class="form-control @error('nazione') is-invalid @enderror" name="nazione" value="{{ old('nazione') }}" required autocomplete="nazione" autofocus>
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
        <span class="focus-input100"  style = "position:relative; left:-145px; top:-40px; "></span>
        
        @error('nazione')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
    </div>
     
    <div class="input-group"> 
        <h5> Email Privato</h5>
       <input id="emailprivato" type="text" name = "emailprivato" readonly value=' {{ Auth::guard('privato')->user()->email }}'>
   </div>

    <br> <button type="submit">
        {{ __('Avanti') }}
    </button>	


</div>


                        
                    
</div>


                            
                          <hr />
                  

            </form>  
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-50" >
                    &copy;  ©2021 Realizzato da <a href="https://github.com/BarbieriGiuseppe/GRUPPO_LCB">Gruppo LCB</a>
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo url('/areariservatalayout'); ?>/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo url('/areariservatalayout'); ?>/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
     <script src="<?php echo url('/areariservatalayout'); ?>/js/custom.js"></script>
    
   
</body>
</html>
