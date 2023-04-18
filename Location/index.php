<?php
if(isset($_POST['mailform'])) {
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']) AND !empty($_POST['phone']) AND !empty($_POST['motifs'])) {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"Maltaga"'."\n";
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

        mail("//", "Mail Dnautiques", $message, $header);
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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Blog Card Slider </title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="google-site-verification" content="7qVPvHOgnfw_RPPYYq805gF-p8nF2UYJTGjh0r_cyO0" />

</head>
<body>


<nav class="navbar navbar-expand-lg py-3 navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a href="./index.php" class="navbar-brand">
            <img src="./Sources/LOGO.svg" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span class="font-weight-bold" style="color: #1c306e ;">D</span><span class="font-weight-bold" style="color: #1880ad ;">nautique</span>
        </a>

        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="" class="nav-link">Accueil <span class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a href="./PHP/services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Background video -->
<div class="video-background-holder" id="accueil">
    <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="./Sources/Vidéo/ile-2946.mp4" type="video/mp4">
    </video>
    <div class="video-background-content container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-4"> <span class="underline--magical">Dnautique</h1></span>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="servicetitle">
    <span>Nos locations </span>
</div>

<!-- partial:index.partial.html -->
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">

        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>


  </div>
  <div class="blog-slider__pagination"></div>
</div>

</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script  src="script.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</body>
</html>
