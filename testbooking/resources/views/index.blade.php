<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>COVID-19 Test Booking</title>
  <meta name="description" content="Centro prenotazioni tamponi presso laboratori privati convenzionati">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/style.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="<?php echo url('/img'); ?>/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Servizi</a></li>
                 <li class = ""><a href="#laboratori">Laboratori</a></li>
                <li class=""><a href="#contact">Contatti</a></li>
               
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="<?php echo url('/img'); ?>/logoindexwhite.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Devi eseguire un tampone Covid-19?</h1>
              <p>Prenota subito un tampone presso i nostri laboratori convenzionati ! <br>Risultati Test e Refertazione direttamente in questo sito</p>
              <button id = "btnModalAccedi" class = "btn btn-appoint">Accedi</button>
              <!--Modal-->
              <div class="modal fade" id="Modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      
                      <h4 class="modal-title">Le Aree Riservate: </h4>                                                  
                    </div> 
                    <div class="modal-body">
                      <a href="privato/loginprivato" class = "btn btn-appoint">Login <br>Utente Privato</a>
                      <a href="loginmedico" class = "btn btn-appoint">Login <br>Medico</a>
                      <a href="loginazienda" class = "btn btn-appoint">Login<br>Azienda</a>
                      <a href="loginlab" class = "btn btn-appoint">Login Laboratorio<br>Convenzionato</a>
                    </div>   
                    <div class="modal-footer">
                      <h5>Non sei registrato? <button id = "btnModalRegistratidue" class = "btn btn-appoint">Registrati</button>
                    </div>
                  </div>                                                                       
                </div>  
              </div>
              
              <button id = "btnModalRegistrati" class = "btn btn-appoint">Registrati</button>
              <!--Modal-->
              <div class="modal fade" id="ModalRegistrati">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      
                      <h4 class="modal-title">Scegli il tuo profilo di registrazione: </h4>                                                  
                    </div> 
                    <div class="modal-body">
                      <a href="registrazioneprivato" class = "btn btn-appoint">Registrazione <br>Utente Privato</a>
                      <a href="registrazionemedico" class = "btn btn-appoint">Registrazione <br>Medico</a>
                      <a href="registrazioneazienda" class = "btn btn-appoint">Registrazione<br> Azienda</a>
                      <a href="convenzionalab" class = "btn btn-appoint">Sei un laboratorio?<br>Convenzionati</a>
                    </div>   
                    <div class="modal-footer">                                                     
                    </div>
                  </div>                                                                       
                </div>  
              </div>

              
            </div>
            <div class="overlay-detail text-center">
              <a href="#service"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-0">
          <h2 class="ser-title">SERVIZI OFFERTI</h2></h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>Tamponi per Privati</h4>
              <p>I cittadini possono prenotare tamponi presso i laboratori convenzionati e gestire le proprie prenotazioni ed esiti nel loro portale dedicato </p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Tamponi per Aziende</h4>
              <p>I datori di lavoro possono prenotare tamponi per i propri dipendenti e gestire le proprie prenotazioni ed esiti nel loro portale</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Tamponi per Assistiti</h4>
              <p>I medici di base possono prenotare tamponi per i propri cittadini assistiti e gestire le proprie prenotazioni ed esiti nel loro portale</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Refertistica On-Line</h4>
              <p>All'interno della propria area personale è possibile visualizzare tutte le informazoni riguardanti il proprio tampone e il relativo esito.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ about-->
  <!--doctor team-->
  <section id="laboratori" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">I NOSTRI LABORATORI CONVENZIONATI</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="<?php echo url('/'); ?>/img/lab1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Laboratorio DIB</h3>
              <a href="labdib">Info</a>
              <ul class="list-inline">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="<?php echo url('/'); ?>/img/lab2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Laboratorio Poli</h3>
              <a href="labpoli">Info</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6">
          <div class="thumbnail">
            <img src="<?php echo url('/'); ?>/img/nolab.jpg" alt="..." class="team-img">
            <div class="caption">
              <h4>Prossimamente</h3>
              <a>Info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contattaci</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h4>Dove siamo</h4>

          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>70124 Bari BA<br> Via Rodolfo Redi</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@gruppolcb.it</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+39 333 666 999</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Hai qualche dubbio? Contattaci!</h3>
            <div class="space"></div>
            <div id="sendmessage">Richiesta inviata!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Nominativo" data-rule="minlen:6" data-msg="Inserire almeno 6 caratteri" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Inserisci una mail valida" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Oggetto" data-rule="minlen:4" data-msg="Inserisci almeno 8 caratteri" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Messaggio" placeholder="Messaggio"></textarea>
                <div class="validation"></div>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Invio</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Chi siamo</h4>
            </div>
            <div class="info-sec">
              <p>Centro prenotazioni tamponi presso laboratori privati convenzionati</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Link Rapidi</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#laboratori"><i class="fa fa-circle"></i>Laboratori Convenzionati</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Servizi</a></li>
                <li><a href = "login/areaasl.html"><i class = "fa fa-circle"> </i>Area Privata Azienda Sanitaria</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Social</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            
            <div class="credits">

              ©2021 Realizzato da <a href="https://github.com/BarbieriGiuseppe/GRUPPO_LCB">Gruppo LCB</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="<?php echo url('/'); ?>/js/jquery.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/jquery.easing.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo url('/'); ?>/js/custom.js"></script>
  <script src="<?php echo url('/'); ?>/contactform/contactform.js"></script>
  <script src = "<?php echo url('/'); ?>/js/popup.js"></script>
</body>

</html>
