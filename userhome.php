<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];

$qry=mysql_query("select * from register where regno='$uname'");
$row=mysql_fetch_array($qry);
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
          <li class="menu-active"><a href="userhome.php">Home</a></li>
          <li><a href="user_post.php">Post</a></li>
		    <li><a href="user_fund.php">Funds</a></li>
		  <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
   <section id="intro">

    <div class="intro-text">
      <h2>Profile</h2>
      <p>Welcome <?php echo $row['name']; ?></p>
      <a href="#about" class="btn-get-started scrollto">View Profile</a>
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
	 
	<section id="about">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header" data-aos="fade" data-aos-duration="1000">
              <h3 class="section-title">Profile</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <?php
			if($row['photo']=="")
			{
			?>
            <img src="img/profile.png" alt="">
			<?php
			}
			else
			{
			?>
            <img src="photo/<?php echo $row['photo']; ?>" width="200" height="230" alt="">
			<?php
			}
			?>
			<br><a href="profile_pic.php#about">Profile Picture</a>
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box" data-aos="fade-left">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Personal</a></h4>
                <p class="description">Name: <?php echo $row['name']; ?><br>
				Gender: <?php echo $row['gender']; ?><br>
				Date of Birth: <?php echo $row['dob']; ?></p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-left" data-aos-delay="100">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Contact</a></h4>
                <p class="description">Mobile No: <?php echo $row['mobile']; ?><br>
				E-mail: <?php echo $row['email']; ?></p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-left" data-aos-delay="200">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Education</a></h4>
                <p class="description"><?php echo $row['degree']."-".$row['dept'].", Batch: ".$row['year']; ?>
				
				</p>
				<?php
				$q3=mysql_query("select * from education where uname='$uname'");
				while($r3=mysql_fetch_array($q3))
				{
				echo '<p class="description">';
				echo $r3['degree'];
				echo "<br>College:".$r3['college'];
				echo "<br>Location:".$r3['location'];
				echo "<br>Year of Passing:".$r3['year'];
				echo '</p>';
				}
				?>
				<p><a href="add_edu.php">Add New</a></p>
              </div>
              <div class="col-lg-6 col-md-6 box" data-aos="fade-left" data-aos-delay="300">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Experience</a></h4>
                <?php
				$q4=mysql_query("select * from experience where uname='$uname'");
				while($r4=mysql_fetch_array($q4))
				{
				echo '<p class="description">';
				echo "Designation:".$r4['desig'];
				echo "<br>Company:".$r4['company'];
				echo "<br>Location:".$r4['location'];
				echo "<br>Experience:".$r4['experience'];
				echo '</p>';
				}
				?>
				<p><a href="add_exp.php">Add New</a></p>
              </div>
            </div>

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
   

    <!--==========================
      Contact Section
    ============================-->
	

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include("include/footer_admin.php"); ?>

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
