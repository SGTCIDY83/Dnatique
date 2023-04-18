


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Blog Card Slider </title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"

    <meta name="google-site-verification" content="7qVPvHOgnfw_RPPYYq805gF-p8nF2UYJTGjh0r_cyO0" />
    <link rel="stylesheet" href="./bateau.css">

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
                <li class="nav-item active"><a href="" class="nav-link"> Accueil <span class="sr-only">(current)</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">Bootstrap static header</h1>
        <p class="font-italic mb-0">Using simple jumbotron-style component, create a nice Bootstrap 4 header with a background image.</p>
        <p class="font-italic">Snippe by
            <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u>
            </a>
        </p>
    </div>
</div>


<h3 class="text-center text-uppercase">
    Titre 1
</h3>

<section class="y-section_inner y-single_details ">
    <div class="container-fluid">
        <div class="row m-0">
            <div class="col-md-12">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link no_scroll_f collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                <h2><span class="ti-anchor"> <i class="fa-solid fa-ship"></i></span> Details</h2>
                                <span class="card_view"></span>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Eet dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul>
                                    <li>Quis nostrud exercitation ullamco laboris nisi </li>
                                    <li>Sed do eiusmod tempor incididunt ut labore</li>
                                    <li>Lorem Ipsum is simply dummy text of the printing</li>
                                    <li>When an unknown printer took a galley of type</li>
                                    <li>Advice and Assistance Investing</li>
                                    <li>Comprehensive Support for Your Business</li>
                                    <li>When an unknown printer took a galley of type</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link no_scroll_f collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                <h2><span class="ti-anchor"> <i class="fa-solid fa-ship"></i></span> Où et combien </h2>
                                <span class="card_view"></span>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body">
                                <div class="counter_outer">
                                    <div class="row clearfix text-center justify-content-center box_line_row">
                                        <div class="col-md-6">
                                            <div class="box_line">
                                                <h4>Summer</h4>
                                                <br>
                                                <ul>
                                                    <li><b>Location:</b> Caribbean</li>
                                                    <li><b>Low Rate:</b> €560,000 par week</li>
                                                    <li><b>High Rate:</b> €630,000 par week</li>

                                                </ul>
                                                <br><br>
                                                <em>Excluded: VAT, APA and othter expenses</em>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="box_line">
                                                <h4>Winter</h4>
                                                <br>
                                                <ul>
                                                    <li><b>Location:</b> Mediterranean</li>
                                                    <li><b>Low Rate:</b> €560,000 par week</li>
                                                    <li><b>High Rate:</b> €630,000 par week</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link no_scroll_f" data-toggle="collapse" href="#collapseThree">
                                <h2><span class="ti-anchor"> <i class="fa-solid fa-ship"></i></span> Caractéristiques</h2>
                                <span class="card_view"></span>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="speci_ul">
                                    <li class="white_small_font">
                                        <span>cabins</span>
                                        <span class="y-info_val">4</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Berths</span>
                                        <span class="y-info_val">8</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Showers</span>
                                        <span class="y-info_val">2</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>cabins</span>
                                        <span class="y-info_val">530</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Lverrall Length</span>
                                        <span class="y-info_val">13.26</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Hull Length</span>
                                        <span class="y-info_val">0</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Beam</span><span class="y-info_val">4.43</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Draft</span>
                                        <span class="y-info_val">1.9</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Water Capacity</span>
                                        <span class="y-info_val">530</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Fuel Capacity</span>
                                        <span class="y-info_val">200</span>
                                    </li>
                                    <li class="white_small_font">
                                        <span>Engine</span>
                                        <span class="y-info_val">52HP</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link no_scroll_f" data-toggle="collapse" href="#collapseFour">
                                <h2><span class="ti-anchor"> <i class="fa-solid fa-ship"></i></span>Intéressé à acheter?</h2>
                                <span class="card_view"></span>
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <h3 class="text-center text-uppercase">
        Galerie
    </h3>
    <div class="row">
        <div class="col-lg-10 col-md-8 col-sm-12 mx-auto my-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1561877202-53d0e24be55d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1561622245-4d9cd72441a8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1508724735996-b41f69dfe2a9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1156&q=80" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>




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

<!-- partial -->
<script src="https://kit.fontawesome.com/f2676de47d.js" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="script.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script  src="script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</body>
</html>
