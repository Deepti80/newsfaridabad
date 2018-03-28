<!doctype html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>"  >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="author" content="">
    <link rel="icon" href="<?php bloginfo('favicon.ico');?>">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
    <title><?php bloginfo('name'); ?>|
    <?php is_front_page() ? bloginfo('description'):  wp_title();?> </title>

    

    <!-- Custom styles for this template -->
    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="top-nav">
      <div class="header-top dark">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-sm-8 col-lg-8">
                      <ul class="contact-bx">
                          <li><i class="fa fa-phone pr-1 pl-2"></i><a href="#">+12 123 123 123</a></li>
                          <li><i class="fa fa-envelope-o pr-1 pl-2"></i> <a href="#">theproject@mail.com</a></li>
                      </ul>
                  </div>

                  <div class="col-12 col-sm-4 col-lg-4">
                      <div>
                          <ul class="smm-bx">
                              <li>
                                  <a href="#"> <i class="fa fa-facebook" class="social-icon"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-twitter"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-linkedin"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-google-plus"></i> </a>
                              </li>
                              <li>
                                  <a href="#"> <i class="fa fa-rss"></i> </a>
                              </li>
                          </ul>


                      </div>
                      <!-- header-top-first end -->
                  </div>

              </div>
          </div>
      </div>
  </div>
  <!-- navbar -->
  <nav class="navbar navbar-expand-md  ">
      <div class="container">
          <a class="navbar-brand logo" href="#"> Faridabad<span>24x7</span> </a>
          <button class="navbar-toggler navbar-toggler-right bg-dark" type="button" data-toggle="collapse"  data-target="#collapsenavbar">
              <span class="navbar-toggler-icon"></span>
      </button> 
      <div class="navbar-collapse collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                      <a href="" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                          <a href="" class="nav-link ">Contact us</a>
                      </li>
                      
          </ul>
      </div>

      </div>
  </nav>
  