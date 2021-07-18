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
                    <a class="navbar-brand" href="/">
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
                            Medico: {{ Auth::guard('medico')->user()->nome }}  {{ Auth::guard('medico')->user()->cognome }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('medico.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('medico.logout') }}" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Dashboard Medico</h2>   
                    </div>
                </div>              
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5><b>LISTA PRENOTAZIONI</b></h5>
                        <table id="table" border=1px solid black  style="width:150%">
                            <tr>
                                <th style="text-align:center">Codice Fiscale </th>
                                <th style="text-align:center">Codice Lab Pubblico </th>
                                <th style="text-align:center">Data Tampone </th>
                                <th style="text-align:center">Ora Tampone </th>
                                <th style="text-align:center">Tipologia </th>
                                <th style="text-align:center">Metodo Pagamento </th>
                                <th style="text-align:center">Pagato </th>
                                <th style="text-align:center">Esito</th>
                                <th style="text-align:center">Disdici</th>
                               
                                <td></td>
                            </tr>
    
                   
                    @foreach ($data as $prenotazione_medico)

                        <tr>


                        <td style="text-align:center">{{ $prenotazione_medico->codicefiscalepaziente }}</td>

                        <td style="text-align:center">{{ $prenotazione_medico->codicelabpubblico }}</td>

                        <td style="text-align:center">{{ $prenotazione_medico->datatampone }}</td> 

                        <td style="text-align:center">{{ $prenotazione_medico->orario }}</td> 

                        <td style="text-align:center">{{ $prenotazione_medico->tipologia }}</td> 
                        
                        <td style="text-align:center">{{ $prenotazione_medico->metodopagamento }} </td>

                        <td style="text-align:center">{{ $prenotazione_medico->pagato }}</td>

                        <td style="text-align:center">{{ $prenotazione_medico->esito }}</td>


                        <td>
                        <a href="click_delete/{{$prenotazione_medico->id}}" >  <button id="deleteicon" type = "submit" class = "btn btn-default" data-dismiss="modal"> <img src="<?php echo url('/img'); ?>/deleteicon.jpg" /> </button></a> 
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
                    &copy;  2021 Realizzato da <a href="https://github.com/BarbieriGiuseppe/GRUPPO_LCB">Gruppo LCB</a>
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


