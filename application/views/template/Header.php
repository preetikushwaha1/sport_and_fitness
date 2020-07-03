<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sport & Fitness</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet"-->


    <!--link href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" rel="stylesheet"-->

    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"-->
    <!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" rel="stylesheet"-->

    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/flaticon/font/flaticon.css');?>">
  
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="<?php echo site_url('Main');?>">Sport & Fitness</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="<?php echo site_url('Main');?>">Home</a>
                       
                      </li>
                       <li class="has-children">
                  
                         <a href="#">Our Programs</a>
                           <ul class="dropdown arrow-top">
                              <li> <a href="#Fitness_program">Fitness Programs</a></li>
                              <li><a href="#Sports_program">Sport Programs</a></li>
                            </ul>
                      </li>

                       <li class="has-children">
                  
                         <a href="#">Features</a>
                           <ul class="dropdown arrow-top">
                              <li> <a href="#Fitness_Features">Fitness Features</a></li>
                              <li><a href="#Sports_Features">Sport Features</a></li>
                            </ul>
                      </li>

                      <li><a href="#our_gallery">Our Gallery</a></li>
                      <li><a href="#contact_us">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  



     <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay"
       style="background-image: url('<?php echo base_url("sport_assets/img/basket_ball.jpg");?>')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center" data-aos="fade">
              <h2 class="caption mb-1"> </h2>
              <h1 class="">Welcome To SportLife</h1>
              
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" 
      style="background-image: url('<?php echo base_url("assets/images/hero_2.jpg");?>')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h2 class="caption mb-2">Enjoy With Us</h2>
              <h1 class="">Yoga &amp; Meditation</h1>
            </div>
          </div>
        </div>
      </div> 

        <div class="site-blocks-cover overlay" 
      style="background-image: url('<?php echo base_url("sport_assets/img/football.jpg");?>')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center" data-aos="fade">
              <h2 class="caption mb-2"></h2>
              <h1 class="">Welcome To SportsLife</h1>
            </div>
          </div>
        </div>
      </div> 

        <div class="site-blocks-cover overlay" 
      style="background-image: url('<?php echo base_url("sport_assets/img/Fitness.jpeg");?>')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h2 class="caption mb-2"></h2>
              <h1 class="">Fitness</h1>
              <p>fitness is first and foremost about feeling good and being able to move without pain</p>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <div class="site-block-half d-flex" data-aos="fade-right">
      <div class="image bg-image" style="background-image: url('<?php echo base_url("assets/images/img_1.jpg");?>')"></div>
      <div class="text" >
        <h2 class="font-family-serif">Welcome To Yogalife</h2>
        <p class="mb-5"data-aos="fade-left" >We  all  know  that Yoga is  aimed at  uniting  the mind, the body and the spirit. Yogis view that the mind and the body are one, and that if it is given the right yoga kit and tools, and taken to the right  environment  that  it  can  find  harmony  and  heal  itself. </p>
        <p><a href="#" class="btn btn-primary pill px-4 py-3 text-white">See The Yoga Pricing</a></p>

      </div>
    </div>


    <div class="site-block-half d-flex" data-aos="fade-right">
     
      <div class="text">
        <h2 class="font-family-serif">Welcome To SportLife</h2>
        <p class="mb-5" data-aos="fade-left">Sport (or sports) is all forms of usually competitive physical activity which, through casual or organised participation, aim to use, maintain or improve physical ability and skills while providing entertainment to participants, and in some cases, spectators. </p>
        <p><a href="#" class="btn btn-primary pill px-4 py-3 text-white">See The Yoga Pricing</a></p>

      </div>
       <div class="image bg-image" style="background-image: url('<?php echo base_url("sport_assets/img/basket_ball.jpg");?>')"></div>
    </div>

  