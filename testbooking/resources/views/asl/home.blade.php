<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COVID-19 TestBooking: Home</title>
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
                          ASL:   {{ Auth::guard('asl')->user()->provincia }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('asl.logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('asl.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    <li class="active-link">
                        <a href="home" ><i class="fa fa-desktop "></i>Dashboard <span class="badge"></span></a>
                    </li>
                   
                    <li class="active-link">
                        <a href="modifica" ><i class="fa fa-edit "></i>Profilo <span class="badge"></span></a>
                    </li>
                
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->

@if($configurazione == 'principale')


        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Dashboard Asl</h2>   
                    </div>
                </div>       
                   
                
               
                    
                        <div class="row">

                            <form action = "/asl/homePositivi" method="get">
                                <div class="col-lg-12">
                                    <br>
                                    <button>Tamponi Positivi</button>
                                </div>
                            
                            </form>



                            <div class="input-group" style = "position:relative; left:180px; top:-35px; ">
                                
                                <form action = "/asl/homeFiltri" method="get">


                                <select name='laboratorio' id='laboratorio' type="text" style="width:100%;" class="form-control formselect required" placeholder="cerca per laboratorio">

                                    <option disabled selected value>Cerca Laboratorio</option>

                                    @foreach($laboratori as $laboratori1)
                                        <option value="{{ $laboratori1->codicelabpubblico }}">{{ $laboratori1->codicelabpubblico }}</option>
                                    @endforeach

                                </select>

                                &nbsp;&nbsp;
                                <div class="input-group" style = "position:relative; left: 200px; top: -70px;">
                                    <input type="date" id="data" name="data">
                                </div>
                                
                                &nbsp;&nbsp;
                                <div class="input-group " style = "position:relative; left: 385px; top: -140px;"> 
                                   <input id="ora" type="time" class="input100" name="ora"  autocomplete="ora" autofocus min="08:00:00" max="20:00:00">
                                </div>


                                <button style = "position:relative; left:500px; top:-175px; ">Applica Filtri</button>

                                <form>

                            </div>

                        </div>     



                <div class="row" style = "position:relative; left:0px; top:-200px; ">
                    <div class="col-lg-6 col-md-6">
                        <br>
                        <h5><b>LISTA PRENOTAZIONI</b></h5>
                        
                        
                        <table id="table" border="1px" solid black  style="width:150%">
                            <tr>
                                <th style="text-align:center">Codice Fiscale </th>
                                <th style="text-align:center">Codice Lab Pubblico </th>
                                <th style="text-align:center">Email Prenotante </th>
                                <th style="text-align:center">Data Tampone </th>
                                <th style="text-align:center">Ora Tampone </th>
                                <th style="text-align:center">Tipologia </th>
                                <th style="text-align:center">Esito</th>                        
                            </tr>
                               
                                              
                            @foreach ($t_privati as $prenotazione_privato)

                            <tr>
                       
                       
                                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_privato->codicefiscaletamponato }}/{{ $tamponato_privato }}'>{{ $prenotazione_privato->codicefiscaletamponato }}</a></td>
                       
                                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_privato->codicelabpubblico }}'>{{ $prenotazione_privato->codicelabpubblico }}</a></td>

                                <td style="text-align:center">{{ $prenotazione_privato->emailprivato }}</td>
                        
                                <td style="text-align:center">{{ $prenotazione_privato->datatampone }}</td> 

                                <td style="text-align:center">{{ $prenotazione_privato->orario}}</td>

                                <td style="text-align:center">{{ $prenotazione_privato->tipologia }}</td>     

                                <td style="text-align:center">{{ $prenotazione_privato->esito }}</td>
                    
                        
                            </tr>
                            @endforeach


                            @foreach ($t_pazienti as $prenotazione_medico)
                            <tr>
                       
                       
                                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_medico->codicefiscalepaziente }}/{{ $paziente }}'>{{ $prenotazione_medico->codicefiscalepaziente }}</a></td>
                           
                                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_medico->codicelabpubblico }}'>{{ $prenotazione_medico->codicelabpubblico }}</a></td>
    
                                <td style="text-align:center">{{ $prenotazione_medico->emailmedico }}</td>
                            
                                <td style="text-align:center">{{ $prenotazione_medico->datatampone }}</td> 
    
                                <td style="text-align:center">{{ $prenotazione_medico->orario}}</td>
    
                                <td style="text-align:center">{{ $prenotazione_medico->tipologia }}</td>     
    
                                <td style="text-align:center">{{ $prenotazione_medico->esito }}</td>
                        
                            
                            </tr>
                
                            @endforeach


                            @foreach ($t_dipendenti as $prenotazione_datore)


                            <tr>
                       
                       
                                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_datore->codicefiscaledipendente }}/{{ $dipendente }}'>{{ $prenotazione_datore->codicefiscaledipendente }}</a></td>
                       
                                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_datore->codicelabpubblico }}'>{{ $prenotazione_datore->codicelabpubblico }}</a></td>

                                <td style="text-align:center">{{ $prenotazione_datore->emaildatore }}</td>
                            
                                <td style="text-align:center">{{ $prenotazione_datore->datatampone }}</td> 

                                <td style="text-align:center">{{ $prenotazione_datore->orario}}</td>

                                <td style="text-align:center">{{ $prenotazione_datore->tipologia }}</td>     

                                <td style="text-align:center">{{ $prenotazione_datore->esito }}</td>
                    
                        
                            </tr>
                            @endforeach
                            
                    
                        </table> 

                    

                        <div class="row" style = "position:relative; left:950px; top:-170px; " >
                            <div class="col-lg-6 col-md-6">
                                <h5><b>NUMERO TAMPONI <br> NELLA PROVINCIA DI {{ Auth::guard('asl')->user()->provincia }}</b></h5>
                
                                <table>
                                    
                                    <tr style="text-align:center">
                                        <td  style="text-align:center">{{ $n_tamponi }}</td>                
                                    </tr>
                                    
                                </table>
                
                            </div>
                        </div>
                
                
                        <div class="row" style = "position:relative; left:950px; top:-170px; " >
                            <div class="col-lg-6 col-md-6">
                                <h5><b>NUMERO POSITIVI <br> NELLA PROVINCIA DI {{ Auth::guard('asl')->user()->provincia }}</b></h5>
                
                                <table>
                                    
                                    <tr style="text-align:center">
                                        <td  style="text-align:center">{{ $np_tamponi }}</td>                
                                    </tr>
                                    
                                </table>
                
                            </div>
                        </div>
                
                        <div class="row" style = "position:relative; left:950px; top:-170px; " >
                            <div class="col-lg-6 col-md-6">
                                <h5><b>TASSO POSITIVITA'<br> NELLA PROVINCIA DI {{ Auth::guard('asl')->user()->provincia }}</b></h5>
                
                                <table>
                                    
                                    <tr style="text-align:center">
                                        <td  style="text-align:center">{{ $tasso }} %</td>                
                                    </tr>
                                    
                                </table>
                
                            </div>
                        </div>
            </div>
        </div>




@elseif($configurazione == 'positivi')


        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Dashboard Asl</h2>   
                </div>
            </div>       
           
        
       
            
                <div class="row">

                    <form action = "/asl/home" method="get">
                        <div class="col-lg-12">
                            <br>
                            <button>Tutti i Tamponi</button>
                        </div>
                    
                    </form>

                </div>     



        <div class="row" style = "position:relative; left:0px; top:-20px; ">
            <div class="col-lg-6 col-md-6">
                <br>
                <h5><b>LISTA POSITIVI</b></h5>
                
                
                <table id="table" border="1px" solid black  style="width:150%">
                    <tr>
                        <th style="text-align:center">Codice Fiscale </th>
                        <th style="text-align:center">Codice Lab Pubblico </th>
                        <th style="text-align:center">Email Prenotante </th>
                        <th style="text-align:center">Data Tampone </th>
                        <th style="text-align:center">Ora Tampone </th>
                        <th style="text-align:center">Tipologia </th>
                        <th style="text-align:center">Esito</th>                        
                    </tr>
                       
                                      
                    @foreach ($tp_privati as $prenotazione_privato)

                    <tr>
               
               
                        <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_privato->codicefiscaletamponato }}/{{ $tamponato_privato }}'>{{ $prenotazione_privato->codicefiscaletamponato }}</a></td>
               
                        <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_privato->codicelabpubblico }}'>{{ $prenotazione_privato->codicelabpubblico }}</a></td>

                        <td style="text-align:center">{{ $prenotazione_privato->emailprivato }}</td>
                
                        <td style="text-align:center">{{ $prenotazione_privato->datatampone }}</td> 

                        <td style="text-align:center">{{ $prenotazione_privato->orario}}</td>

                        <td style="text-align:center">{{ $prenotazione_privato->tipologia }}</td>     

                        <td style="text-align:center">{{ $prenotazione_privato->esito }}</td>
            
                
                    </tr>
                    @endforeach


                    @foreach ($tp_pazienti as $prenotazione_medico)
                    <tr>
               
               
                        <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_medico->codicefiscalepaziente }}/{{ $paziente }}'>{{ $prenotazione_medico->codicefiscalepaziente }}</a></td>
                   
                        <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_medico->codicelabpubblico }}'>{{ $prenotazione_medico->codicelabpubblico }}</a></td>

                        <td style="text-align:center">{{ $prenotazione_medico->emailmedico }}</td>
                    
                        <td style="text-align:center">{{ $prenotazione_medico->datatampone }}</td> 

                        <td style="text-align:center">{{ $prenotazione_medico->orario}}</td>

                        <td style="text-align:center">{{ $prenotazione_medico->tipologia }}</td>     

                        <td style="text-align:center">{{ $prenotazione_medico->esito }}</td>
                
                    
                    </tr>
        
                    @endforeach


                    @foreach ($tp_dipendenti as $prenotazione_datore)


                    <tr>
               
               
                        <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_datore->codicefiscaledipendente }}/{{ $dipendente }}'>{{ $prenotazione_datore->codicefiscaledipendente }}</a></td>
               
                        <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_datore->codicelabpubblico }}'>{{ $prenotazione_datore->codicelabpubblico }}</a></td>

                        <td style="text-align:center">{{ $prenotazione_datore->emaildatore }}</td>
                    
                        <td style="text-align:center">{{ $prenotazione_datore->datatampone }}</td> 

                        <td style="text-align:center">{{ $prenotazione_datore->orario}}</td>

                        <td style="text-align:center">{{ $prenotazione_datore->tipologia }}</td>     

                        <td style="text-align:center">{{ $prenotazione_datore->esito }}</td>
            
                
                    </tr>
                    @endforeach
                    
            
                </table> 

        
            </div>
        </div>







@elseif($configurazione == 'filtri')


        <div id="page-wrapper" >
            <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Dashboard Asl</h2>   
                </div>
            </div>       
   


    
        <div class="row">

            <form action = "/asl/home" method="get">
                <div class="col-lg-12">
                    <br>
                    <button>Tutti i Tamponi</button>
                </div>
            
            </form>

        </div>     



<div class="row" style = "position:relative; left:0px; top:-20px; ">
    <div class="col-lg-6 col-md-6">
        <br>
        <h5><b>LISTA PRENOTAZIONI FILTRATA</b></h5>
        
        
        <table id="table" border="1px" solid black  style="width:150%">
            <tr>
                <th style="text-align:center">Codice Fiscale </th>
                <th style="text-align:center">Codice Lab Pubblico </th>
                <th style="text-align:center">Email Prenotante </th>
                <th style="text-align:center">Data Tampone </th>
                <th style="text-align:center">Ora Tampone </th>
                <th style="text-align:center">Tipologia </th>
                <th style="text-align:center">Esito</th>                        
            </tr>
               
                              
            @foreach ($t_privati as $prenotazione_privato)

            <tr>
       
       
                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_privato->codicefiscaletamponato }}/{{ $tamponato_privato }}'>{{ $prenotazione_privato->codicefiscaletamponato }}</a></td>
       
                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_privato->codicelabpubblico }}'>{{ $prenotazione_privato->codicelabpubblico }}</a></td>

                <td style="text-align:center">{{ $prenotazione_privato->emailprivato }}</td>
        
                <td style="text-align:center">{{ $prenotazione_privato->datatampone }}</td> 

                <td style="text-align:center">{{ $prenotazione_privato->orario}}</td>

                <td style="text-align:center">{{ $prenotazione_privato->tipologia }}</td>     

                <td style="text-align:center">{{ $prenotazione_privato->esito }}</td>
    
        
            </tr>
            @endforeach


            @foreach ($t_pazienti as $prenotazione_medico)
            <tr>
       
       
                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_medico->codicefiscalepaziente }}/{{ $paziente }}'>{{ $prenotazione_medico->codicefiscalepaziente }}</a></td>
           
                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_medico->codicelabpubblico }}'>{{ $prenotazione_medico->codicelabpubblico }}</a></td>

                <td style="text-align:center">{{ $prenotazione_medico->emailmedico }}</td>
            
                <td style="text-align:center">{{ $prenotazione_medico->datatampone }}</td> 

                <td style="text-align:center">{{ $prenotazione_medico->orario}}</td>

                <td style="text-align:center">{{ $prenotazione_medico->tipologia }}</td>     

                <td style="text-align:center">{{ $prenotazione_medico->esito }}</td>
        
            
            </tr>

            @endforeach


            @foreach ($t_dipendenti as $prenotazione_datore)


            <tr>
       
       
                <td style="text-align:center"><a href = '/asl/infoTamponato/{{ $prenotazione_datore->codicefiscaledipendente }}/{{ $dipendente }}'>{{ $prenotazione_datore->codicefiscaledipendente }}</a></td>
       
                <td style="text-align:center"><a href = '/asl/infoLaboratorio/{{ $prenotazione_datore->codicelabpubblico }}'>{{ $prenotazione_datore->codicelabpubblico }}</a></td>

                <td style="text-align:center">{{ $prenotazione_datore->emaildatore }}</td>
            
                <td style="text-align:center">{{ $prenotazione_datore->datatampone }}</td> 

                <td style="text-align:center">{{ $prenotazione_datore->orario}}</td>

                <td style="text-align:center">{{ $prenotazione_datore->tipologia }}</td>     

                <td style="text-align:center">{{ $prenotazione_datore->esito }}</td>
    
        
            </tr>
            @endforeach
            
    
        </table> 


    </div>
</div>



@endif()


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


