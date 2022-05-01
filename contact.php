<?php
session_start();
include("include/dbconnect.php");
extract($_POST);




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php include("include/title.php"); ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/aos/aos.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Alumni</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></img></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="login.php#login">Alumini</a></li>
		  <li><a href="login2.php#login">Student</a></li>
          <li><a href="login3.php#login">Admin</a></li>
		  <li><a href="contact.php#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Alumni</h2>
      <p>Welcome to College Alumni</p>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>

   <!-- <div class="product-screens">

      <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
        <!--<img src="img/Schoto.jpg" alt="">     </div>

      <!--<div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
        <img src="img/product-screen-2.png" alt="">      </div>

      <div class="product-screen-3" data-aos="fade-up">
        <img src="img/product-screen-3.png" alt="">      </div>
    </div>-->

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="contact" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Alumni Association
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 content" data-aos="fade-left">
            <p align="justify">
              
            </p>

          </div>
        </div>
<div class="content"><p><iframe allowfullscreen="" frameborder="0" height="230" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15626.93332966535!2d78.0873656!3d11.7132901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x786937287cc3f1eb!2sGovernment+College+of+Engineering!5e0!3m2!1sen!2sin!4v1505893814243" style="border:0" height=" 900" width="1280"></iframe></p>
</div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <!-- #features -->
 
    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <!-- #more-features -->

    <!--==========================
      Clients
    ============================-->
    <!-- #more-features -->

    <!--==========================
      Pricing Section
    ============================-->
    <!-- #pricing -->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->
   <!-- #faq -->

    <!--==========================
      Our Team Section
    ============================-->
    <!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include("include/footer.php"); ?><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/aos/aos.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
