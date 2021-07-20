<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    @mapstyles
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Riservata</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/custom.css" rel="stylesheet" />

    <link href="<?php echo url('/areariservatalayout'); ?>/css/progress.css" rel="stylesheet" />
    <link href="<?php echo url('/areariservatalayout'); ?>/css/general.css" rel="stylesheet" />
    
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
   rel = "stylesheet">
   <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
   
   <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
   <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   <link href="<?php echo url('/areariservatalayout'); ?>/js/jquery-ui-timepicker-addon.js" rel="stylesheet" />
   <script>
$(function() {
  var holidays = [
    '1.1.2021',
    '2.1.2021',
    '20.2.2021',
    '19.1.2021',
    '1.8.2021',
    '15.8.2021',
    '1.11.2021',
    '8.12.2021',
    '25.12.2021',
    '26.12.2021'
  ];
  function noSundaysOrHolidays(date) {
    var day = date.getDay();
    if (day != 0) {
      var d = date.getDate();
      var m = date.getMonth();
      var y = date.getFullYear();
      for (i = 0; i < holidays.length; i++) {
        if($.inArray((d) + '.' + (m+1) + '.' + y, holidays) != -1) {
          return [false];
        }
      }
      return [true];
    } else {
      return [day != 0, ''];
    }
  }

  $('#datatampone').datepicker({
    onClose: function(datatampone, inst) { 
        $(this).attr("disabled", false);
    },
    beforeShow: function(input, inst) {
      $(this).attr("disabled", true);
    },
    beforeShowDay: noSundaysOrHolidays,
    minDate: 0,
    dateFormat: 'yy-mm-dd',
  });
});

    </script>


</head>
<body>
    @mapscripts
           
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
                            {{ Auth::guard('azienda')->user()->nome }}  {{ Auth::guard('azienda')->user()->cognome }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('azienda.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('azienda.logout') }}" method="POST" style="display: none;">
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

                    <li class="active-link">
                        <a href="downloadGuida"><i class="fa fa-download "></i>Scarica Guida Tampone <span class="badge"></span></a>
                    </li>

                    <li class="active-link">
                        <a href="downloadQuestionario"><i class="fa fa-download "></i>Scarica Questionario Anamnesi <span class="badge"></span></a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container">
                    <ul class="progressbar">
                        <li> Dati Dipendente</li>
                        <li class="active">Seleziona Appuntamento</li>
                        <li>Riepilogo e Pagamento</li>

                </ul>
                <div class="row">
                    <div class="col-md-12">
                     <h2>Seleziona Appuntamento </h2>   
                </div>
             
                 <!-- /. ROW  -->
                 
                 <!-- /. ROW  --> 
     <form method="POST" action="{{ route('azienda.registerAppuntamento') }}">
					@csrf
 
    <div class="input-group" style = "position:relative; left:-650px; top:132px;">
        <h5>Laboratorio</h5>  
            <div>
                <select class="form-control formselect required" placeholder="Laboratorio"
                    id="codicelabpubblico" name="codicelabpubblico">
                    <option value="0" disabled selected>Seleziona un Laboratorio</option>
                    @foreach($data as $laboratorio)
                    <option  value="{{ $laboratorio->codicelabpubblico }}">
                        {{ ucfirst($laboratorio->nomelaboratorio) }}</option>
                    @endforeach
                </select>
            </div>
    </div>

    <div class="input-group" style = "position:relative; left: 25px; top: -20px;">
        <h5>Tipologia tampone</h5>
        <span class="focus-input100" ></span>
        <select class="form-control formselect required" placeholder="Seleziona una tipologia" id="tipologia" name="tipologia">
        </select>
    </div>
    
    <div class="input-group" style = "position:relative; left: 290px; top: -90px;">
        <h5>Data Appuntamento</h5>
        <input type="text" id="datatampone" name="datatampone">
    </div>
   
    <div class="input-group "style = "position:relative; left: 550px; top: -163px;"> 
        <h5>Orario</h5>
       <input id="orario" type="time" class="input100 @error('orario') is-invalid @enderror" name="orario" value="{{ old('orario') }}" required autocomplete="orario" autofocus min="08:00:00" max="20:00:00">
       @error('orario')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
    </div>

    <div id="divCheckbox" style="display: none;">>
        <h5> Email Datore</h5>
       <input id="emaildatore" type="text" name = "emaildatore" readonly value=' {{ Auth::guard('azienda')->user()->email }}'>
   </div>


   <div id="divCheckbox" style="display: none;">
    <h5> prezzo</h5>
   <input id="prezzo" type="text" name = "prezzo" readonly value='00.00'>
</div>

   <div id="divCheckbox" style="display: none;">
    <h5> Codice F dipendente</h5>
   <input id="codicefiscaledipendente" type="text" name = "codicefiscaledipendente" readonly value=' {{Session::get('codicefiscaletamponato');}}'>
</div>

<div id="divCheckbox" style="display: none;">>
    <h5> Pagato</h5>
   <input id="pagato" type="text" name = "pagato" readonly value='no'>
</div>

<div id="divCheckbox" style="display: none;">>
    <h5> Esito</h5>
   <input id="esito" type="text" name = "esito" readonly value='n.d'>
</div>

    <br> <button type="submit" style = "position:relative; left:-280px; top: -180px;">
        {{ __('Avanti') }}
    </button>	



    <div style = "position:relative; left:-300px; top: 100px;  background-color: rgb(33, 71, 97);
            -moz-border-radius: 10px;
            border-radius: 10px;
            padding: 10px;
             width: 1100px;
            text-align:right;"> 
            <h5 style= " color: rgb(255, 255, 255);">Mappa Laboratori</h5>
        @map([
            'lat' => 41.008091,
            'lng' => 16.726910,
            'zoom' => 10,
            'markers' => [
                [
                    'title' => 'Laboratorio Dib',
                    'lat' => 41.109684,
                    'lng' => 16.881524,
                    'popup' => '<h3>Laboratorio Dib</h3><p>Clicca per <a href="/labdib">Informazioni</a>.</p>',
                    'icon' => '/img/laboratorio.png',
                    'icon_size' => [20, 40],
                    'icon_anchor' => [0, 32],
                ],
                [
                    'title' => 'Laboratorio Poli',
                    'lat' => 41.108969,
                    'lng' => 16.878512,
                    'popup' => '<h3>Laboratorio Poli</h3><p>Clicca per <a href="/labpoli">Informazioni</a>.</p>',
                    'icon' => '/img/laboratorio.png',
                    'icon_size' => [20, 40],
                    'icon_anchor' => [0, 32],
                ],
            ],
        ])
        
    </div>
 

   </div>


</div>


<script>
        $(document).ready(function () {
        $('#codicelabpubblico').on('change', function () {
        let codicelabpub = $(this).val();
        $('#tipologia').empty();
        $('#tipologia').append(`<option value="0" disabled selected>Caricamento...</option>`);
        $.ajax({
        type: 'GET',
        url: 'appuntamento/' + codicelabpub,
        success: function (response) {
        var response = JSON.parse(response);
        console.log(response);   
        $('#tipologia').empty();
        $('#tipologia').append(`<option value="0" disabled selected id='tipologia' name="tipologia">Seleziona una tipologia</option>`);
        response.forEach(element => {
            $('#tipologia').append(`<option value="${element['tipologia']}">${element['tipologia']}</option>`);
            });
        }
    });
});
});
</script>
    


    
    
</div>



</div>


                        
                    
</div>


                            
                          <hr />
                  

              
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

      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo url('/areariservatalayout'); ?>/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
     <script src="<?php echo url('/areariservatalayout'); ?>/js/custom.js"></script>
    
   
</body>

<script>
    

</script>
</html>
