
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dnautique - Locations</title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="/Dnatique/ressources/Dnautique.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="google-site-verification" content="7qVPvHOgnfw_RPPYYq805gF-p8nF2UYJTGjh0r_cyO0" />

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
    <div class="container">

        <a href="./index.php" class="navbar-brand">
            <img src="./Sources/LOGO.svg" width="48" alt="" class="d-inline-block align-middle mr-2">
            <span class="font-weight-bold" style="color: #1c306e ;">D</span><span class="font-weight-bold" style="color: #1880ad ;">nautique</span>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarContent" class="collapse navbar-collapse">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="./index.php" class="nav-link font-weight-bold text-uppercase">Accueil</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link font-weight-bold text-uppercase dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >Nos locations</a>
                    <div class="dropdown-menu" >
                        <a class="dropdown-item font-weight-bold" href="../Location/Bateaux%200"><i class="fa-solid fa-ship"></i> Bateau 1</a>
                        <a class="dropdown-item font-weight-bold" href="../Location/Bateaux%200"><i class="fa-solid fa-ship"></i> Bateau 2 </a>
                    </div>
                </li>
                <li class="nav-item"><a href="./Contact/index.php" class="nav-link font-weight-bold text-uppercase">Contactez-nous</a></li>
            </ul>
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
                <h1 class="display-4" data-aos="zoom-in"> <span class="underline--magical">Dnautique</h1></span>
                </p>
            </div>
        </div>
        <div class="arrow-container">
            <h1>Arrow fade out on scroll</h1>
            <div class="arrow" id="arrow"></div>
        </div>
    </div>
</div>



<div data-aos="fade-up" class="servicetitle">
    <span>Nos locations</span>
</div>

<!-- partial:index.partial.html -->
<div data-aos="fade-left" class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">

        <img src="/Dnatique/ressources/Images-bateaux/image00022.jpeg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
        <a href="Bateaux 0/index.php" class="blog-slider__button">Notre bateau</a>
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
        <a href="Bateaux%201/index.php" class="blog-slider__button">Notre bateau</a>
      </div>
    </div>


  </div>
  <div class="blog-slider__pagination"></div>
</div>

</div>

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



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script  src="script.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="https://kit.fontawesome.com/f2676de47d.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</body>
</html>
