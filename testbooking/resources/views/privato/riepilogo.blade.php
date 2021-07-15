
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
                        <a href="prenotazione"><i class="fa fa-table "></i>Prenotazione  <span class="badge"></span></a>
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
                
                    <ul class="progressbar">
                        <li > Dati Tamponato</li>
                        <li>Selezione Appuntamento</li>
                        <li class="active">Riepilogo e Pagamento</li>
                    </ul>
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Riepilogo Prenotazione </h2>   
                   
                    </div>         
                 </div>      
                 <!-- /. ROW  -->
                 <!-- /. ROW  --> 
     <form method="POST" action="{{ route('privato.registerPreventivo') }}">
		@csrf
     @php
     use App\Models\Prenotazione_Privato;
     use App\Models\Tamponato_Privato;
     @endphp
       <h4>Dati del Prenotato</h4>
        <div id="divCheckbox" style = "position:relative; left: 5px; top: 20px;">
            <h5> Codice Fiscale Tamponato</h5>
           <input id="codicefiscaletamponato" type="text" name = "codicefiscaletamponato" readonly value=' {{Prenotazione_Privato::latest()->first()->codicefiscaletamponato}}'>
        </div>

        <div id="divCheckbox" style = "position:relative; left: 5px; top: 30px;">
            <h5> Codice Laboratorio </h5>
           <input id="codicelabpubblico" type="text" name = "codicelabpubblico" readonly value=' {{Prenotazione_Privato::latest()->first()->codicelabpubblico}}' >
        </div>
        
        <div id="divCheckbox" style = "position:relative; left: 5px; top: 40px;">
            <h5> Email Prenotante</h5>
           <input id="emailprivato" type="text" name = "emailprivato" readonly value='{{ Auth::guard('privato')->user()->email }}'>
        </div>

        <div id="divCheckbox" style = "position:relative; left: 5px; top: 50px;">
            <h5> Email Prenotato</h5>
           <input id="email" type="text" name = "email" readonly value=' {{Tamponato_Privato::latest()->first()->email}}'>
        </div>

        <div id="divCheckbox" style = "position:relative; left: 5px; top: 60px;">
            <h5> Data Prenotazione</h5>
           <input id="datatampone" type="text" name = "datatampone" readonly value=' {{Prenotazione_Privato::latest()->first()->datatampone}}'>
        </div>

        <div id="divCheckbox" style = "position:relative; left: 5px; top: 70px;">
            <h5> Orario</h5>
           <input id="orario" type="text" name = "orario" readonly value=' {{Prenotazione_Privato::latest()->first()->orario}}'>
        </div>

        <div id="divCheckbox" style = "position:relative; left: 5px; top: 80px;">
            <h5> Tipologia</h5>
           <input id="tipologia" type="text" name = "tipologia" readonly value=' {{Prenotazione_Privato::latest()->first()->tipologia}}''>
        </div>
 
        <div id="divCheckbox" style = "position:relative; left: 5px; top: 80px;">
            <h5> Metodo di Pagamento</h5>
            <select id="selezione" onchange="select" name="metodopagamento" type="text" style="width: 250px;" name="metodopagamento" value="{{ old('metodopagamento') }}" required autocomplete="metodopagamento" autofocus>
                <option value="laboratorio">In Laboratorio</option>
                <option value="online">Online</option>
         </select>


    <br> 
    <br> 

    <div class="laboratorio box"><button id= "avanti "type="submit" style = "position:relative; left: 333px; top: -60px;">
        {{ __('Avanti') }}
    </button>	
       </div>
    <div class="online box">
        <h6>Pagamento con PayPal </h6>
        <button id= "paga "type="submit" style = "position:relative; left: 333px; top: -60px;">
        {{ __('Paga') }}
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
    
     <script>
        $(document).ready(function(){
            $("select").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>
</body>
</html>
