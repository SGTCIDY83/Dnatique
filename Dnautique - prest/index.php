<?php
if(isset($_POST['mailform'])) {
  if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']) AND !empty($_POST['phone']) AND !empty($_POST['motifs'])) {
$header="MIME-Version: 1.0\r\n";
$header.='From:"Dnautiques"'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$message='
<html>
   <body>
      <div align="center">
         <br />
          <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
          <u>Téléphone de l\'expéditeur :</u>'.$_POST['phone'].'<br />
          <u>Motifs de l\expéditeur :</u>'.$_POST['motifs'].'<br />
          
         <br />
         '.nl2br($_POST['message']).'
         <br />
      </div>
   </body>
</html>
';

mail("dnautique.fr@gmail.com", "Mail Dnautiques", $message, $header);
$msg='
<html>
   <body>
      <div class="alert alert-success" role="alert">
        Message envoyé!
       </div>
    </body>
</html>';
} 
else{
  
$msg='
  <html>
    <body>
      <div class="alert alert-danger" role="alert">
        Tous les champs doivent être complétés !
      </div>
    </body>
 </html>
 ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../ressources/Dnautique.svg" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="google-site-verification" content="7qVPvHOgnfw_RPPYYq805gF-p8nF2UYJTGjh0r_cyO0" />

    <title>Dnautique</title>
</head>
<body>


<nav class="navbar navbar-expand-lg py-3 navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <img src="../Location/Sources/LOGO.svg" width="45" alt="" class="d-inline-block align-middle mr-2">
      <span class="font-weight-bold" style="color: #1c306e ;">D</span><span class="font-weight-bold" style="color: #1880ad ;">nautique</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="" class="nav-link">Accueil <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="PHP/services.html" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
      <!-- Accueil -->
      <div id="Accueil"class="bgimg-1" >
          <div class="arrow-container">
              <div class="arrow" id="arrow"></div>
          </div>
          <img id="imgProfileAcc" src="../ressources/Dnautique.svg">
        </div>
    </div>
</div>
<!-- Services -->

<div class="Services" id="nosservices">
    <h2 data-aos="fade-up" >Nos services</h2>
        <div class="container">

          <div class="row">

            <div data-aos="fade-right" class="col-lg-4 col-md-6 col-12" >
            <a href="PHP/services.html">
              <div class="card mb-4 shadow-sm">
              <img class="card-img-top" src="../ressources/Maintenance.jpg" style="width: 314px; height: 210px;">
                <div class="card-body">
                  <h4>Maintenance</h4></a>
                </div>
              </div>
            </div>
            <div data-aos="fade-up" class="col-lg-4 col-md-6 col-12">
            <a href="PHP/services.html">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../ressources/rénovation.jpg" style="width: 314px; height: 210px;" >
                
                <div class="card-body">
                  <h4>Rénovation</h4></a>
                </div>
              </div>
            </div>
            <div data-aos="fade-left" class="col-lg-4 col-md-6 col-12">
            <a href="PHP/services.html">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="../ressources/dépannage.jpg" style="width: 314px; height: 210px;">
                <div class="card-body">
                <h4>Dépannage</h4></a>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
    <div class="servicetitle">
          <span > Découvrez toutes nos prestations </span>
    </div>
        <div class="containerservice" >
          <a href="PHP/services.html">
            <button><span>Tous nos services </span></button></a>
    </div>
     <section id="banner" class="parallax">
        <h1> Vous avez un problème, Dnautique est là pour vous ! </h1>
      </section>

    <!--  Contact -->
    
<section class=" text-black mb-0" id="contact">

  <div class="container">
    <div class="row">
        <div class="col-10 mx-auto">
          <form action="index.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
              </div>
              <div class="form-group col-md-6">
                <label for="mail">Mail</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre mail">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Ex : 06 00 00 00 01">
              </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Motifs</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="motifs">
                    <option>Coque</option>
                    <option>Électrique/Électronique</option>
                    <option>Plomberie</option>
                    <option>Nettoyage</option>
                    <option>Autres services</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>    
            <input type="submit" class="btn btn-primary btn-lg btn-block"  name="mailform"></button>
          </form>
          <p class="text-center"> <?php if(isset($msg)) {
         echo $msg;
      }
      ?>
      </div>
    </div>    
  </div>
</section> 


<!-- Footer -->
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(114,137,218,0.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(114,137,218,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(114,137,218,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#7289da" />
            </g>
</svg>


<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color: rgb(114, 137, 218);">
  <section class="d-flex justify-content-center justify-content-lg-between border-bottom">
  </section>
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Contenue -->
            <h6 class=" fw-bold mb-4" style="font-size: 1.6rem;">
              <span class="font-weight-bold" style="color: #1c306e ;">D</span><span class="font-weight-bold" style="color: #1880ad ;">nautique</span>
            </h6>
          <footer class="page-footer font-small">
            <div class="footer-copyright text-center" style="color :white" data-toggle="modal" data-target="#exampleModalCenter"><h7>Mentions légales du site</h7>
            </div>
          </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class=" fw-bold mb-4" style="color: white; font-size: 1.4rem;">Contactez-nous !</h6>
                <p style="color: white;"><i class="fa fa-home" aria-hidden="true"></i> La Seyne sur mer</p>
                <p style="color: white;">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                  contact@dnautique.fr
                </p>
                <p style="color: white;"><i class="fa fa-phone" aria-hidden="true"></i> 07.65.28.36.28</p>
          </div>
        </div>
      </div>
</section>

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.2); color:white;">
    © 2022 Copyright:
    <a style="color:white;" href="https://dnautique.fr/">Dnautique</a>
  </div>
  <!-- Copyright -->
</footer>



<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mentions légales du site</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
            <div class="Titlemls">
                <span>-- Mentions légales du site --</span>
            </div>
            <div class="Contentmls">
                <span>
                    <p style="text-align: center;">
                        <strong>1. Présentation du site.</strong>
                    </p>
                    <p>
                        En application de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, 
                        il est précisé aux utilisateurs du site <a href="https://dnautique.fr/">https://dnautique.fr/</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
                    </p>
                    <p>
                        <strong>Propriétaire</strong> : Julien Dran<br>
                        <strong>Créateur</strong> : Julien Dran<br>
                        <strong>Responsable publication</strong> : Dnautique<br>
                        <strong>Webmaster</strong> : Roux Alexandre <br>
                        <strong>Hébergeur</strong> : HOSTINGER INTERNATIONAL LTD, 61 Lordou Vironos Street, 6023 Larnaca, Chypre <br>
                        <strong>Siren</strong> : 917 874 562<br>
                        <strong>Siret</strong> :  917 874 562  00015<br>
                        <strong>Crédits</strong> : <a href="https://www.pexels.com/fr-fr/">https://www.pexels.com/fr-fr/</a><br>
                        <strong>Numéro de téléphone</strong> :  07.65.28.36.28 <br>
                    </p>
                    <p>
                    </p>
            </div>
        </div>
            <p style="text-align: center;"> ............................................................................................</p><br>
            <div class="TitleConfi">
                <span>-- Confidentialité --</span>
            </div>
            
            <div class="Contconf">
                <span>
                    <p style="text-align: center;">
                        <strong>2.Confidentialité des données</strong>
                    </p>
                    <p style="text-align: center;">
                        <span>Nous nous engageons à protéger vos données personnelles et votre vie privée. Nous utilisons les informations que vous nous transmettez pour traiter vos demandes et
                        vous faire part de notre réponse.</span>
                    </p>
                </span>
            </div>

            <p style="text-align: center;"> ............................................................................................</p><br>
            <div class="Titlepers">
                <span>-- Vos données personnelles à des tiers --</span>
            </div>
             <div class="Contcomm">
                <span>
                    <p style="text-align: center;">
                        <strong>3. Vos données personnelles à des tiers</strong>
                    </p>
                    <p style="text-align: center;">
                            <span>Nous ne vendons, ni ne louons, ni ne communiquons les informations vous concernant.
                        </span>
                    </p>    
                </span>
             </div>
            
             <p style="text-align: center;"> ............................................................................................</p><br>
                <div class="Titlecomm">
                    <span>-- Modification de vos informations --</span>
                </div>
                   <div class="Continfo">
                        <span>
                            <p style="text-align: center;">
                                <strong>4. Modification de vos informations</strong>
                            </p>
                            <p style="text-align: center;">
                                <span>En application de la loi du 11 mars 1957 (art. 41) et du Code de la propriété intellectuelle du 1er juillet 1992 : l’ensemble des textes, illustrations,
                                    photographies, plans, dessins, animations, vidéos, contenus sur ce site ne peuvent être utilisés ou reproduits sans l’autorisation de l’éditeur.
                                </span>
                            </p>
                        </span>
                   </div>
<p style="text-align: center;"> ............................................................................................</p><br>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="app.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>