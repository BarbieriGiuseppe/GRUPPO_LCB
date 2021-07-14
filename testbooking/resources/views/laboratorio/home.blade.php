<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Area Riservata</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo url('/areariservatalayout'); ?>/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="/img/logoindexwhite.png" />

                    </a>
                    
                </div>
              
                

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Laboratorio: {{ Auth::guard('laboratorio')->user()->nomelaboratorio }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('laboratorio.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('laboratorio.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    <li class="active-link">
                        <a href="home" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   

                    <li class="active-link">
                        <a href="prezzotampone"><i class="fa fa-table "></i>Prezzi Tamponi  <span class="badge"></span></a>
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
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Dashboard Laboratorio</h2>   
                    </div>
                </div>              
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5><b>LISTA PRENOTAZIONI PRIVATI</b></h5>
                        <table id="table" border=1px  style="width:100%">
                            <tr>
                                <th>ID </th>
                                <th>Codice Fiscale </th>
                                <th>Codice Lab Pubblico </th>
                                <th>Data Tampone </th>
                                <th>Tipologia </th>
                                <th>Pagato </th>
                                <th>Esito</th>
                               
                                <td></td>
                            </tr>
    
                   
                    @foreach ($t_privati as $prenotazioniprivati)

                        <tr>
                        <td>{{ $prenotazioniprivati->id}}</td>

                        <td>{{ $prenotazioniprivati->codicefiscaletamponato}}</td>

                        <td>{{ $prenotazioniprivati->codicelabpubblico }}</td>

                        <td>{{ $prenotazioniprivati->datatampone }}</td> 

                        <td>{{ $prenotazioniprivati->tipologia }}</td>     

                        <td>{{ $prenotazioniprivati->pagato }}</td>

                        <td>{{ $prenotazioniprivati->esito }}</td>


                        <td>
                        <a href="click_edit/{{$prenotazioniprivati->id}}" >  <button id="editicon" type = "submit" class = "btn btn-default" data-dismiss="modal"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button></a> 
                        </td>

                        <td></td>

                        </tr>

                        @endforeach
                    </table> 

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h5><b>LISTA PRENOTAZIONI PAZIENTI</b></h5>
                            <table id="table" border=1px style="width:100%">
                                <tr>
                                    <th>ID </th>
                                    <th>Codice Fiscale </th>
                                    <th>Codice Lab Pubblico </th>
                                    <th>Data Tampone </th>
                                    <th>Tipologia </th>
                                    <th>Pagato </th>
                                    <th>Esito</th>
                                   
                                    <td></td>
                                </tr>
        
                       
                        @foreach ($t_pazienti as $prenotazionipazienti)
    
                            <tr>
    
                            <td>{{ $prenotazionipazienti->id}}</td>

                            <td>{{ $prenotazionipazienti->codicefiscalepaziente}}</td>
    
                            <td>{{ $prenotazionipazienti->codicelabpubblico }}</td>
    
                            <td>{{ $prenotazionipazienti->datatampone }}</td> 
    
                            <td>{{ $prenotazionipazienti->tipologia }}</td>     
    
                            <td>{{ $prenotazionipazienti->pagato }}</td>
    
                            <td>{{ $prenotazionipazienti->esito }}</td>
    
    
                            <td>
                            <a href="click_edit/{{$prenotazionipazienti->id}}" >  <button id="editicon" type = "submit" class = "btn btn-default" data-dismiss="modal"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button></a> 
                            </td>
    
                            <td></td>
    
                            </tr>
    
                            @endforeach
                        </table> 

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h5><b>LISTA PRENOTAZIONI DIPENDENTI</b></h5>
                                <table id="table" border=1px  style="width:100%">
                                    <tr>
                                        <th>ID </th>
                                        <th>Codice Fiscale </th>
                                        <th>Codice Lab Pubblico </th>
                                        <th>Data Tampone </th>
                                        <th>Tipologia </th>
                                        <th>Pagato </th>
                                        <th>Esito</th>
                                       
                                        <td></td>
                                    </tr>
            
                           
                            @foreach ($t_dipendenti as $prenotazionidipendenti)
        
                                <tr>
                                <td>{{ $prenotazionidipendenti->id}}</td>

        
                                <td>{{ $prenotazionidipendenti->codicefiscaledipendente}}</td>
        
                                <td>{{ $prenotazionidipendenti->codicelabpubblico }}</td>
        
                                <td>{{ $prenotazionidipendenti->datatampone }}</td> 
        
                                <td>{{ $prenotazionidipendenti->tipologia }}</td>     
        
                                <td>{{ $prenotazionidipendenti->pagato }}</td>
        
                                <td>{{ $prenotazionidipendenti->esito }}</td>
        
        
                                <td>
                                <a href="click_edit/{{$prenotazionidipendenti->id}}" >  <button id="editicon" type = "submit" class = "btn btn-default" data-dismiss="modal"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button></a> 
                                </td>
        
                                <td></td>
        
                                </tr>
        
                                @endforeach
                            </table> 
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
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


