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
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php#login">Alumini</a></li>
		  <li class="menu-active"><a href="login2.php#login">Student</a></li>
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

  </section>
  <!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
	 <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">About Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Alumni Association
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            <p align="justify">
              College aims at the training of young men and women of quality to be leaders in all walks of life and to serve their fellowmen in justice and truth. It is expected that this training will play a vital role in bringing about the desired change for the betterment of the people of our country, particularly the poorer and marginalised sections of society, especially the dalits. Further, it will foster an atmosphere of intellectual vigour and moral rectitude in which the young men and women of our Country may find their fulfillment and achieve greatness as eminent men and women of service. Alumni Association collaborates towards this great venture effectively preparing the students to become socially conscious men and women.
            </p>

          </div>
        </div>

      </div>
    </section>
   <!-- #about -->

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
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Student</h3>
          <span class="section-divider"></span>
          <p class="section-description">College Student</p>
        </div>

        <div class="row no-gutters">

          <!--<div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-1.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-1.jpg" alt="">              </a>            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-2.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-2.jpg" alt="">              </a>            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-3.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-3.jpg" alt="">              </a>            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-4.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-4.jpg" alt="">              </a>            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-5.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-5.jpg" alt="">              </a>            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              <a href="img/gallery/gallery-6.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-6.jpg" alt="">              </a>            </div>
          </div>-->

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
	<?php
	$msg="";
			if(isset($btn))
			{
			$q1=mysql_query("select * from student where regno='$uname' && dob='$dob'");
			$n1=mysql_num_rows($q1);
				if($n1==1)
				{
				$_SESSION['uname']=$uname;
				?>
				<script language="javascript">
				window.location.href="stuhome.php";
				</script>
				<?php
				}
				else
				{
				$msg="Invalid User!";
				}
			}
			
			?>
    <section id="login">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Alumni</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <img src="img/imgdages.jpg" width="217" height="159">
            </div>
          </div>
			
          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage"><?php echo $msg; ?></div>
              <div id="errormessage"></div>
              <form action="" method="post" name="form">
                
				<div class="form-group">
                  <input type="text" class="form-control" name="uname" id="uname" placeholder="Reg No." data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="text-center"><input type="submit" name="btn" value="Login"></div>
				<div><a href="admin.php">New Member Register here</a></div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include("include/footer.php"); ?>

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
