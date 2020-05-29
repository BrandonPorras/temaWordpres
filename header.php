<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
  <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>

    <!-- Header -->
    <header>

        <!-- Navegation -->
        <div class="nav-position">

            <!-- White Layer / Responsive -->
            <div id="blank" class="square-NonActive"></div>

            <nav class="navbar navbar-expand-lg navbar-light py-5">

                <!-- Hamburger Menu -->
                <button id="hamb" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <!-- Navegation Bar -->
                <div class="collapse navbar-collapse" id="navbarNav">

                    <!-- Navegation Options -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Home -->
                        <li class="nav-item lr-padding"><a class="nav-link btn-hover" href="/">HOME</a></li>

                        <!-- About Us -->
                        <li class="nav-item lr-padding"><a class="nav-link btn-hover" href="/">ABOUT US</a></li>

                        <!-- Contact -->
                        <li class="nav-item lr-padding"><a class="nav-link btn-hover" href="/">CONTACT</a></li>

                        <!-- Login -->
                        <li class="nav-item lr-padding"><a class="nav-link btn-hover" href="/">LOGIN</a></li>

                        <!-- Sign Up -->
                        <li class="nav-item lr-padding d-flex align-items-center justify-content-center">
                            
                            <!-- Sign Up Button -->
                            <a class="btn-sign-in" href="/">SIGN UP</a>
                        
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!-- Carousel Indicator -->
            <ol class="carousel-indicators">

              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              
            </ol>

            <!-- Carousel Images -->
            <div class="carousel-inner">

                <!-- Carousel #1 / First Image -->
                <div class="carousel-item active">

                    <img class="imgsCarrucel" src="wp-content/themes/ursart/image/slider_01.png" alt="First slide">

                    <!-- Carousel Content #1 -->
                    <div class="carousel-img">

                        <!-- Page Title / First Row -->
                        <div class="row d-flex justify-content-center">

                            <!-- Title -->
                            <h1 class="main-logo">~ Ursart ~</h1>

                        </div>

                        <!-- Line / Second Row -->
                        <div class="row"><hr class="header-hr"></div>

                        <!-- Description / Third Row -->
                        <div class="container">

                            <div class="row d-flex justify-content-center">

                                <!-- Description -->
                                <p class="text-center description-height py-3">

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum architecto, molestiae 
                                    officiis voluptatibus dolores nesciunt quo necessitatibus fugiat atque provident 
                                    tempora quos dolorum, impedit, culpa rem delectus ut inventore 

                                </p>

                            </div>

                        </div>

                        <!-- Button / Fourth Row -->
                        <div class="row d-flex justify-content-center my-5">
                            
                            <a href="#!" class="btn-see-more"><strong>See More</strong></a>

                        </div>

                    </div>

                </div>

                <!-- Carousel #2 / Second Image -->
                <div class="carousel-item">
                    
                    <img class="imgsCarrucel" src="wp-content/themes/ursart/image/slider_02.png" alt="Second slide">

                    <!-- Carousel Content #2 -->
                    <div class="carousel-img">

                        <!-- Page Title / First Row -->
                        <div class="row d-flex justify-content-center">

                            <!-- Title -->
                            <h1 class="main-logo">~ Ursart ~</h1>

                        </div>

                        <!-- Line / Second Row -->
                        <div class="row"><hr class="header-hr"></div>

                        <!-- Description / Third Row -->
                        <div class="container">

                            <div class="row d-flex justify-content-center">

                                <!-- Description -->
                                <p class="text-center description-height py-3">

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum architecto, molestiae 
                                    officiis voluptatibus dolores nesciunt quo necessitatibus fugiat atque provident 
                                    tempora quos dolorum, impedit, culpa rem delectus ut inventore 

                                </p>

                            </div>

                        </div>

                        <!-- Button / Fourth Row -->
                        <div class="row d-flex justify-content-center my-5">
                            
                            <a href="#!" class="btn-see-more"><strong>See More</strong></a>

                        </div>

                    </div>

                </div>

                <!-- Carousel #2 / Second Image -->
                <div class="carousel-item">
                    
                    <img class="imgsCarrucel" src="wp-content/themes/ursart/image/slider_03.png" alt="Third slide">

                    <!-- Carousel Content #2 -->
                    <div class="carousel-img">

                        <!-- Page Title / First Row -->
                        <div class="row d-flex justify-content-center">

                            <!-- Title -->
                            <h1 class="main-logo">~ Ursart ~</h1>

                        </div>

                        <!-- Line / Second Row -->
                        <div class="row"><hr class="header-hr"></div>

                        <!-- Description / Third Row -->
                        <div class="container">

                            <div class="row d-flex justify-content-center">

                                <!-- Description -->
                                <p class="text-center description-height py-3">

                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum architecto, molestiae 
                                    officiis voluptatibus dolores nesciunt quo necessitatibus fugiat atque provident 
                                    tempora quos dolorum, impedit, culpa rem delectus ut inventore 

                                </p>

                            </div>

                        </div>

                        <!-- Button / Fourth Row -->
                        <div class="row d-flex justify-content-center my-5">
                            
                            <a href="#!" class="btn-see-more"><strong>See More</strong></a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Left Sign -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>

            </a>

            <!-- Right Sign -->
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>

            </a>

        </div>

    </header>



