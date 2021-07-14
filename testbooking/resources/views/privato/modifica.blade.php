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


    <script >

        function updatevalues()
        {   
            var URL;

            var id = document.getElementById("id").value;
            var codicefiscale = document.getElementById("codicefiscale").value;
            var cognome = document.getElementById("cognome").value;
            var nome = 'gigio';
            var telefono = document.getElementById("telefono").value;
            var datanascita = document.getElementById("datanascita").value;
            var luogonascita = document.getElementById("luogonascita").value;
            var residenza = document.getElementById("residenza").value;
            var citta = document.getElementById("citta").value;
            var provincia = document.getElementById("provincia").value;
            var cap = document.getElementById("cap").value;
            var nazione = document.getElementById("codicefiscale").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            URL+="update/{{ "
            URL+=id;
            URL+=",";
            URL+=codicefiscale;
            URL+=",";
            URL+=cognome;
            URL+=",";
            URL+=nome;
            URL+=",";
            URL+=telefono;
            URL+=",";
            URL+=datanascita;
            URL+=",";
            URL+=luogonascita;
            URL+=",";
            URL+=residenza;
            URL+=",";
            URL+=citta;
            URL+=",";
            URL+=provincia;
            URL+=",";
            URL+=cap;
            URL+=",";
            URL+=nazione;
            URL+=",";
            URL+=email;
            URL+=",";
            URL+=password;
            URL+="}}"

            return URL;
        }
    </script>

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
                <div class="row">
                    <div class="col-md-12">
                     <h2>Modifica Profilo </h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 <!-- /. ROW  -->
                
                
                <input name='id' id='id' type="hidden" value="{{ $data[$id]->id}}">



                <div class="input-group">
                    <h4><b>Codice Fiscale</b></h4>
                    <p name='codicefiscale' id='codicefiscale'>{{ $data[$id]->codicefiscale }}</p>
                </div>
                
                
                
                <div class="input-group">
                     <h4><b>Cognome</b></h4>
                    <p name='cognome' id='cognome'>{{ $data[$id]->cognome }}</p>
                </div>
            
                
                
                <div class="input-group">
                    <h4><b>Nome</b></h4>
                    <p name='nome' id='nome'>{{ $data[$id]->nome }}</p>
                </div>
                            
                
                <div class="input-group">
                    <h4><b>Telefono</b></h4>
                    <p name='telefono' id='telefono'>{{ $data[$id]->telefono }}</p>
                </div>
            
                
                
                <div class="input-group">
                    <h4><b>Luogo Di Nascita</b></h4>
                    <p name='luogonascita' id='luogonascita'>{{ $data[$id]->luogonascita }}</p>
                </div>
            
                <div class="wrapper">
                    <h4><b>Data Di Nascita</b></h4>
                    <p name='datanascita' id='datanascita'>{{ $data[$id]->datanascita }}</p>
                </div>                
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Residenza</b></h4>
                    <p name='residenza' id='residenza'>{{ $data[$id]->residenza }}</p>
                </div>
            
                
            
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Città</b></h4>  
                    <p name='citta' id='citta'>{{ $data[$id]->citta }}</p>
                </div>
            
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Provincia</b></h4>  
                    <p name='provincia' id='provincia'>{{ $data[$id]->provincia }}</p>
                </div>
            
                
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>CAP</b></h4>  
                    <p name='cap' id='cap'>{{ $data[$id]->cap }}</p>
                </div>
                
                <div class="input-group" style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Nazione</b></h4>                    
                    <p name='nazione' id='nazione'>{{ $data[$id]->nazione }}</p>

                </div>


            
                <div class="input-group"  style = "position:relative; left:260px; top:-473px; ">
                    <h4><b>Email</b></h4>
                    <p name='email' id='email'>{{ $data[$id]->email }}</p>
                </div>
                
                <div class="input-group"  style = "position:relative; left:490px; top:-494px; ">
                    <h5>Password</h5>  
                    <p name='password' id='password'>{{ $data[$id]->password }}</p>
                </div>


                          
               <div class="input-group"  style = "position:relative; left:0px; top:-450px; "> 
                    
                    
                    <a href = "click_edit/{{$data[$id]->id }}" >  <button type = "submit" id="edit" class = "btn btn-default" data-dismiss="modal"> Modifica Anagrafica </button></a>
                
               </div>
              
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
