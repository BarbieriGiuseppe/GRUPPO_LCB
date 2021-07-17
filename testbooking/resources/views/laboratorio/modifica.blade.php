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
                    <div class="col-md-12">
                     <h2>Modifica Profilo </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <!-- /. ROW  -->
                
                 <form action= "/laboratorio/aggiorna " method="get">

    

                    <div class="input-group">
                        <h4><b>Nome Laboratorio</b></h4>
                        <input name='nomelaboratorio' id='nomelaboratorio' type="text" value="{{ Auth::guard('laboratorio')->user()->nomelaboratorio }}" class="form-control"  />
                    </div>
                    
                    
                    
                    <div class="input-group">
                         <h4><b>Codice Laboratorio Pubblico</b></h4>
                        <input name='codicelabpubblico' id='codicelabpubblico' readonly type="text"  value="{{ Auth::guard('laboratorio')->user()->codicelabpubblico}}" class="form-control" />
                    </div>
                
                    
                    
                    <div class="input-group">
                        <h4><b>Telefono</b></h4>
                        <input name='telefono' id='telefono' type="text" value="{{ Auth::guard('laboratorio')->user()->telefono }}"  class="form-control" />
                    </div>
                    
                     
                    <div class="input-group">
                        <h4><b>Indirizzo</b></h4>  
                        <input name='indirizzo' id='indirizzo' type="text" value="{{ Auth::guard('laboratorio')->user()->indirizzo }}" class="form-control" />
                    </div>

                    
                    <div class="input-group"  style = "position:relative; left:260px; top:-293px; ">
                        <h4><b>Citta</b></h4>  
                        <input name='citta' id='citta' type="text" value="{{ Auth::guard('laboratorio')->user()->citta }}" class="form-control"/>
                    </div>

                
                    <div class="input-group" style = "position:relative; left:260px; top:-293px; ">
                        <h4><b>Provincia</b></h4>  
                        <input name='provincia' id='provincia' type="text" value="{{ Auth::guard('laboratorio')->user()->provincia }}" class="form-control" />
                    </div>                
                    
                    
                    <div class="input-group" style = "position:relative; left:260px; top:-293px; ">
                        <h4><b>Cap</b></h4>   
                        <input name='cap' id='cap' type="text" value="{{ Auth::guard('laboratorio')->user()->cap }}" class="form-control"/>
                    </div>
                
                    
                    <div class="input-group" style = "position:relative; left:260px; top:-293px; ">
                        <h4><b>Email</b></h4>  
                        <input name='email' id='email' type="text" value="{{ Auth::guard('laboratorio')->user()->email }}" class="form-control"  />
                    </div>
                

                    <div class="input-group"  style = "position:relative; left:0px; top:-270px; "> 
    
                        <button type="submit" name="submit">Salva Modifiche</button>
                        
                    </div>
    
    
    
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
