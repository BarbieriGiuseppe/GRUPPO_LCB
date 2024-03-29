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
                        <a href="prezzotamponi"><i class="fa fa-table "></i>Prezzo Tamponi  <span class="badge"></span></a>
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
                        <h4><b>LISTA PRENOTAZIONI PRIVATI</b></h4>

<form action="/laboratorio/aggiornaprivato" method="get">


    @method('Patch')
     @csrf

                        <table id="table" border=1px  col span="1" style="width: 180%;">
                                <tr>
                                    
                                    <!--<th style="text-align:center">Id</th>-->
                                    <th style="text-align:center">Codice Fiscale Tamponato</th>
                                    <th style="text-align:center">Email Privato </th>
                                    <th style="text-align:center">Data Tampone </th>
                                    <th style="text-align:center">Ora Tampone </th>
                                    <th style="text-align:center">Tipologia </th>
                                    <th style="text-align:center">Metodo Pagamento </th>
                                    <th style="text-align:center">Pagato </th>
                                    <th style="text-align:center">Esito</th>
                                    <th style="text-align:center">Conferma Esito</th>
                                </tr>
    
                   
                            @foreach ($t_privati as $prenotazioniprivati)
                            
                            <tr>
                                <td style="display:none;">
                                   <input id="id" type="text" name = "id"  value={{ $prenotazioniprivati->id}}>
                                </td>

                                <td style="text-align:center"><a href = '/laboratorio/infoTamponato/{{ $prenotazioniprivati->codicefiscaletamponato }}/{{ $tamponato_privato }}'>{{ $prenotazioniprivati->codicefiscaletamponato}}</a></td>

                                <td style="text-align:center">{{ $prenotazioniprivati->emailprivato }}</td>

                                <td style="text-align:center">{{ $prenotazioniprivati->datatampone }}</td> 

                                <td style="text-align:center">{{ $prenotazioniprivati->orario}}</td>

                                <td style="text-align:center">{{ $prenotazioniprivati->tipologia }}</td>     

                                <td style="text-align:center">{{ $prenotazioniprivati->metodopagamento }}</td> 

                                <td style="text-align:center">{{ $prenotazioniprivati->pagato }}</td>

                                


                                <td style="text-align:center">
                                    <select name="esito" id="esito">
    
                                        <option value="{{ $prenotazioniprivati->esito }}">{{ $prenotazioniprivati->esito }}</option>
                                        

                                        @if( $prenotazioniprivati->esito  == 'n.d.')
                                            <option value="Positivo">Positivo</option>
                                            <option value="Negativo">Negativo</option>
                                        @elseif( $prenotazioniprivati->esito  == 'Positivo')
                                            <option value="n.d.">n.d.</option>
                                            <option value="Negativo">Negativo</option>
                                        @elseif( $prenotazioniprivati->esito == 'Negativo')
                                            <option value="n.d.">n.d.</option>
                                            <option value="Positivo">Positivo</option>
                                        @endif


                                            
                                    </select>
                                </td>
                           
                                
                                <td style="text-align:center">
                                    <button id="editicon" type = "submit" class = "btn btn-default"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button>
                               </td>

                            @endforeach

                            </tr>
                             

                        </table> 


</form>


                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h4><b>LISTA PRENOTAZIONI PAZIENTI</b></h4>

<form action="/laboratorio/aggiornapaziente " method="get">

                        <table id="table" border=1px  col span="1" style="width: 180%;">
                                <tr>
                
                                    <th style="text-align:center">Codice Fiscale Paziente</th>
                                    <th style="text-align:center">Email Medico </th>
                                    <th style="text-align:center">Data Tampone </th>
                                    <th style="text-align:center">Ora Tampone </th>
                                    <th style="text-align:center">Tipologia </th>
                                    <th style="text-align:center">Metodo Pagamento </th>
                                    <th style="text-align:center">Pagato </th>
                                    <th style="text-align:center">Esito</th>
                                    <th style="text-align:center">Conferma Esito</th>
 
                                </tr>   


                             @foreach ($t_pazienti as $prenotazionipazienti)

                            <tr>
                                <td style="display:none;">
                                    <input id="id" type="text" name = "id"  value={{ $prenotazionipazienti->id}}>
                                 </td>

                                <td style="text-align:center"><a href = '/laboratorio/infoTamponato/{{ $prenotazionipazienti->codicefiscalepaziente }}/{{ $paziente }}'>{{ $prenotazionipazienti->codicefiscalepaziente}}</a></td>

                                <td style="text-align:center">{{ $prenotazionipazienti->emailmedico }}</td>

                                <td style="text-align:center">{{ $prenotazionipazienti->datatampone }}</td> 

                                <td style="text-align:center">{{ $prenotazionipazienti->orario}}</td>

                                <td style="text-align:center">{{ $prenotazionipazienti->tipologia }}</td>     

                                <td style="text-align:center">{{ $prenotazionipazienti->metodopagamento }}</td> 

                                <td style="text-align:center">{{ $prenotazionipazienti->pagato }}</td>




                                <td style="text-align:center">
                                    <select name="esito" id="esito" type="text" >

                                        <option value="E">{{ $prenotazionipazienti->esito }}</option>

                                        @if( $prenotazionipazienti->esito  == 'n.d.')
                                            <option value="P">Positivo</option>
                                            <option value="N">Negativo</option>
                                        @elseif( $prenotazionipazienti->esito  == 'Positivo')
                                            <option value="ND">n.d.</option>
                                            <option value="N">Negativo</option>
                                        @elseif( $prenotazionipazienti->esito == 'Negativo')
                                            <option value="ND">n.d.</option>
                                            <option value="P">Positivo</option>
                                        @endif
                        
                                    </select>
                                </td>

                                <td style="text-align:center">
                                     <button id="editicon" type = "submit" class = "btn btn-default"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button> 
                                </td>

                            @endforeach
                            
                            </tr>

                        </table> 

</form>




<form action="/laboratorio/aggiornadipendente " method="get">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                            <h4><b>LISTA PRENOTAZIONI DIPENDENTI</b></h4>
                            <table id="table" border=1px col span="1" style="width:180%">
                                <tr>

                                    <th style="text-align:center">Codice Fiscale Dipendente </th>
                                    <th style="text-align:center">Email Datore</th>
                                    <th style="text-align:center">Data Tampone </th>
                                    <th style="text-align:center">Ora Tampone </th>
                                    <th style="text-align:center">Tipologia </th>
                                    <th style="text-align:center">Metodo Pagamento </th>
                                    <th style="text-align:center">Pagato </th>
                                    <th style="text-align:center">Esito</th>
                                    <th style="text-align:center">Conferma Esito</th>
                                       
                                </tr>
            
                           
                                @foreach ($t_dipendenti as $prenotazionidipendenti)
        
                                <tr>

                                    <td style="display:none;">
                                        <input id="id" type="text" name = "id"  value={{ $prenotazionidipendenti->id}}>
                                     </td>
                                
                                    <td style="text-align:center"><a href = '/laboratorio/infoTamponato/{{ $prenotazionidipendenti->codicefiscaledipendente }}/{{ $dipendente }}'>{{ $prenotazionidipendenti->codicefiscaledipendente }}</a></td>

                                    <td style="text-align:center">{{ $prenotazionidipendenti->emaildatore }}</td>
        
                                    <td style="text-align:center">{{ $prenotazionidipendenti->datatampone }}</td> 

                                    <td style="text-align:center">{{ $prenotazionidipendenti->orario }}</td> 
        
                                    <td style="text-align:center">{{ $prenotazionidipendenti->tipologia }}</td>  
                                    
                                    <td style="text-align:center">{{ $prenotazionidipendenti->metodopagamento }}</td>
        
                                    <td style="text-align:center">{{ $prenotazionidipendenti->pagato }}</td>
                                    

                                    <td style="text-align:center">
                                        <select name="esito" id="esito" type="text" >
    
                                            <option value="E">{{ $prenotazionidipendenti->esito }}</option>
    
                                            @if( $prenotazionidipendenti->esito  == 'n.d.')
                                                <option value="P">Positivo</option>
                                                <option value="N">Negativo</option>
                                            @elseif( $prenotazionidipendenti->esito  == 'Positivo')
                                                <option value="ND">n.d.</option>
                                                <option value="N">Negativo</option>
                                            @elseif( $prenotazionidipendenti->esito == 'Negativo')
                                                <option value="ND">n.d.</option>
                                                <option value="P">Positivo</option>
                                            @endif
                            
                                        </select>
                                    </td>
    
                                    <td style="text-align:center">
                                         <button id="editicon" type = "submit" class = "btn btn-default"> <img src="<?php echo url('/img'); ?>/editicon.jpg" /> </button> 
                                    </td>
        
                                @endforeach

                                </tr>


                            </table> 

</form>

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


