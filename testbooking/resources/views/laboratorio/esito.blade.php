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

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>Modifica Esito</h2>   
                    </div>
                </div>              
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        
                        <table id="table" border=1px  col span="1" style="width: 150%";>
                            <tr>
                                <th style="text-align:center">ID </th>
                                <th style="text-align:center">Codice Fiscale </th>
                                <th style="text-align:center">Email Prenotante </th>
                                <th style="text-align:center">Data Tampone </th>
                                <th style="text-align:center">Tipologia </th>
                                <th style="text-align:center">Pagato </th>
                                <th style="text-align:center">Esito</th>
                           
                            </tr>
                         




                        @if(!empty($e_privato))
                        
                            <tr>
                                <td style="text-align:center">{{ $e_privato[0]->id}}</td>
    
                                <td style="text-align:center">{{ $e_privato[0]->codicefiscaletamponato}}</td>
    
                                <td style="text-align:center">{{ $e_privato[0]->emailprivato }}</td>
    
                                <td style="text-align:center">{{ $e_privato[0]->datatampone }}</td> 
    
                                <td style="text-align:center">{{ $e_privato[0]->tipologia }}</td>     
    
                                <td style="text-align:center">{{ $e_privato[0]->pagato }}</td>

                                
                        <form action="/update/{{ $e_privato[0]->id }}" method="post">

                                <td style="text-align:center">
                                    <select name="esito" id="esito" type="text" >

                                        <option value="E">{{ $e_privato[0]->esito}}</option>

                                        @if($e_privato[0]->esito == 'n.d.')
                                            <option value="P">Positivo</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_privato[0]->esito == 'Positivo')
                                            <option value="ND">n.d.</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_privato[0]->esito == 'Negativo')
                                            <option value="ND">n.d.</option>
                                            <option value="P">Positivo</option>
                                        @endif
                                        
                                    </select>
                                </td>
    
    
                            </tr>                         

                            <button type="submit" name="submit">Salva Esito</button>



                        </form>


                        @elseif(!empty($e_paziente))

                            <tr>
                                <td style="text-align:center">{{ $e_paziente[0]->id}}</td>
    
                                <td style="text-align:center">{{ $e_paziente[0]->codicefiscalepaziente}}</td>
    
                                <td style="text-align:center">{{ $e_paziente[0]->emailmedico }}</td>
    
                                <td style="text-align:center">{{ $e_paziente[0]->datatampone }}</td> 
    
                                <td style="text-align:center">{{ $e_paziente[0]->tipologia }}</td>     
    
                                <td style="text-align:center">{{ $e_paziente[0]->pagato }}</td>

                        
                        <form action="/update/{{ $e_paziente[0]->id }}" method="post">

                                <td style="text-align:center">
                                    <select name="esito" id="esito" type="text"  >

                                        <option value="E">{{ $e_paziente[0]->esito}}</option>

                                        @if($e_paziente[0]->esito == 'n.d.')
                                            <option value="P">Positivo</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_paziente[0]->esito == 'Positivo')
                                            <option value="ND">n.d.</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_paziente[0]->esito == 'Negativo')
                                            <option value="ND">n.d.</option>
                                            <option value="P">Positivo</option>
                                        @endif
                                    </select>
                                </td>
    
                                
                            </tr>

                            <button type="submit" name="submit">Salva Esito</button>


                        </form>

                        @elseif(!empty($e_dipendente))

                            <tr>
                                <td style="text-align:center">{{ $e_dipendente[0]->id}}</td>
    
                                <td style="text-align:center">{{ $e_dipendente[0]->codicefiscaledipendente}}</td>
        
                                <td style="text-align:center">{{ $e_dipendente[0]->emaildatore }}</td>
    
                                <td style="text-align:center">{{ $e_dipendente[0]->datatampone }}</td> 
    
                                <td style="text-align:center">{{ $e_dipendente[0]->tipologia }}</td>     
    
                                <td style="text-align:center">{{ $e_dipendente[0]->pagato }}</td>
                                
                                <td style="text-align:center">
                        
                        
                        <form action="/update/{{ $e_dipendente[0]->id }}" method="post">

                                    <select name="esito" id="esito" type="text" >

                                        <option value="E">{{ $e_dipendente[0]->esito}}</option>

                                        @if($e_dipendente[0]->esito == 'n.d.')
                                            <option value="P">Positivo</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_dipendente[0]->esito == 'Positivo')
                                            <option value="ND">n.d.</option>
                                            <option value="N">Negativo</option>
                                        @elseif($e_dipendente[0]->esito == 'Negativo')
                                            <option value="ND">n.d.</option>
                                            <option value="P">Positivo</option>
                                        @endif

                                    </select>
                                </td>
    
    
                            </tr>

                            <button type="submit" name="submit" style="left:200px; top:50px;">Salva Esito</button>

                        </form>   
                    
                        @endif
                   
                            
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


