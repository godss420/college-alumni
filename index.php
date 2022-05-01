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
	<p>
	<?php
	$cd=date("d");
	$cm=date("m");
	
	$mk=mktime(0,0,0,date("m"),date("d")+1,date("Y"));
	$bd=date("d-m",$mk);
	$bdd=@explode("-",$bd);
	mysql_query("update student set msg_cnt=0 where cday!=".$bdd[0]." && cmonth!=".$bdd[1]."");
	$q2=mysql_query("select * from student where cday=".$bdd[0]." && cmonth=".$bdd[1]." && msg_cnt=0");
	while($r2=mysql_fetch_array($q2))
	{
		$q3=mysql_query("select * from student where regno!='".$r2['regno']."' && dept='".$r2['dept']."' && degree='".$r2['degree']."' && year='".$r2['year']."'");
		while($r3=mysql_fetch_array($q3))
		{
		$mobile=$r3['mobile'];
		$message=$r2['name']." - ".$r2['regno']." Birthday on tomorrow";
		echo '<iframe src="http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=AccessContr&password=1848260591&sendername=Access&mobileno=91'.$mobile.',&message='.$message.'" style="display:block"></iframe>';
		mysql_query("update student set msg_cnt=1 where cday=".$bdd[0]." && cmonth=".$bdd[1]."");
		}
	}
	$q4=mysql_query("select * from student where cday='$cd' && cmonth='$cm'");
	$n4=mysql_num_rows($q4);
	if($n4>0)
	{
	?>
	<h2>Birthday Wishes</h2>
	<?php
	while($r4=mysql_fetch_array($q4))
	{
	?>
	<h3><?php echo $r4['name'].", ".$r4['regno'].", ".$r4['dept'].", ".$r4['degree'].", ".$r4['year']; ?></h3>
	<?php
	}
	}
	?>
	</p>
          </div>
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
