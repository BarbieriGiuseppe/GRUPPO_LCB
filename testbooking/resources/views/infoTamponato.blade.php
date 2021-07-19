<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modifica Anagrafica</title>
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
            </div>
        </div>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Info Tamponato </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <!-- /. ROW  -->        

    
            @foreach ($data as $data1)


                @if($ruolo == 'tamponato_privato')

                    <div class="input-group">
                        <h4><b>Codice Fiscale</b></h4>
                        <p>{{ $data1->codicefiscaletamponato }}</p>
                    </div>

                @elseif($ruolo == 'paziente')

                    <div class="input-group">
                        <h4><b>Codice Fiscale</b></h4>
                        <p>{{ $data1->codicefiscalepaziente }}</p>
                    </div>
                
                @elseif($ruolo == 'dipendente')
                
                    <div class="input-group">
                        <h4><b>Codice Fiscale</b></h4>
                        <p>{{ $data1->codicefiscaledipendente }}</p>
                    </div>

                @endif


                <div class="input-group">
                     <h4><b>Cognome</b></h4>
                     <p>{{ $data1->cognome }}</p>
                </div>
            
                
                
                <div class="input-group">
                    <h4><b>Nome</b></h4>
                    <p>{{ $data1->nome }}</p>
                </div>
                            
                
                <div class="input-group">
                    <h4><b>Telefono</b></h4>  
                    <p>{{ $data1->telefono }}</p>
                </div>
            
                
                
                <div class="input-group">
                    <h4><b>Luogo Di Nascita</b></h4>  
                    <p>{{ $data1->luogonascita }}</p>
                </div>
            
                <div class="wrapper">
                    <h4><b>Data Di Nascita</b></h4>
                    <p>{{ $data1->datanascita }}</p>

                </div>                
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Residenza</b></h4>   
                    <p>{{ $data1->residenza }}</p>
                </div>
            
                
            
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Città</b></h4>  
                    <p>{{ $data1->citta }}</p>
                </div>
            
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Provincia</b></h4>  
                    <p>{{ $data1->provincia }}</p>
                </div>
            
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>CAP</b></h4>  
                    <p>{{ $data1->cap }}</p>
                </div>
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Nazione</b></h4>
                    <p>{{ $data1->nazione }}</p>


                </div>


            
                <div class="input-group"  style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Email</b></h4>  
                    <p>{{ $data1->email }}</p>
                </div>
            
            @endforeach

              
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
