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

mail("sgtcody83@gmail.com", "Mail Dnautiques", $message, $header);
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./UK_style.css">
    <title>Dnautiques</title>

</head>
<body>
<H1>tesy</H1>

<!-- Menu -->

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
   
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        
      
        <div class="collapse navbar-collapse" id="navbarToggler">

          <ul class="navbar-nav w-100 d-flex justify-content-center align-items-center">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#accueil">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#contact">Contact</a>
            </li>          
          </ul>
        </div>
        <a href="../index.php" class="text-dark">
          <button type="button" class="btn btn-light" >
            <img src="../ressources/Flag_of_the_France.png" >
            </a>
          </button>
      </nav>

      <!-- Accueil -->

      <div id="Accueil"class="bgimg-1">
        <div class="caption">
        <span class="border">Dnautiques</span>
        </div>
      </div>

<!-- Services -->

<div class="py-5" id="services">

    <h2 class="text-center mb-5 text-uppercase">Services</h2>
        <div class="container">

          <div class="row">

            <div class="col-lg-4 col-md-6 col-12">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                  <h4>Services 1</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam mollitia molestias ipsum adipisci maxime?</p>

                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                  <h4>Services 2</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam mollitia molestias ipsum adipisci maxime?</p>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card mb-4 shadow-sm">
                <div class="card-body">
                <h4>Services 3</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam mollitia molestias ipsum adipisci maxime?</p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <h2 class="text-center mb-5 text-uppercase">Préstations de services</h2>

      <section id="banner" class="parallax">
        <h1 style="color:rgb(255, 255, 255)">Dnautiques répond à tout vos besoins !</h1>
      </section>

    <!--  Contact -->

<section class=" text-black mb-0" id="contact">

  <div class="container">
    <h2 class="titreContact text-center">Vous avez un problèmes, Dnautiques est là pour vous !</h2>
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
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Votre numéro de téléphone">
              </div>
                <div class="form-group col-md-6">
                  <label for="exampleFormControlSelect1">Motifs</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="motifs">
                    <option>Motifs 1</option>
                    <option>Motifs 2</option>
                    <option>Motifs 3</option>
                    <option>Motifs 4</option>
                    <option>Motifs 5</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" name="mailform">
          </form>
          <p class="text-center"> <?php if(isset($msg)) {
         echo $msg;
      }
      ?>
      </div>
    </div>    
  </div>
</section> 
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>
</html>