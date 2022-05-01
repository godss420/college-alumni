<?php
session_start();
include("include/dbconnect.php");
extract($_POST);

//$qry=mysql_query("select * from register where regno='$uname'");
//$row=mysql_fetch_array($qry);
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
          <li class="menu-active"><a href="admin.php">Home</a></li>
          <li><a href="admin_stu.php">Students</a></li>
		  <li><a href="admin_alumni.php">Alumni</a></li>
		  <li><a href="admin_post.php">Post Events</a></li>
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
      <h2>Student Registration</h2>
      <p>Admin Control</p>
      <a href="#about" class="btn-get-started scrollto">Control</a>
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
    <?php
	$msg="";
	$rdate=date("d-m-Y");
	if(isset($btn))
	{
			$q1=mysql_query("select * from student where regno='$regno'");
			$n1=mysql_num_rows($q1);
			if($n1==0)
			{
			
	$mq=mysql_query("select max(id) from student");
	$mr=mysql_fetch_array($mq);
	$id=$mr['max(id)']+1;
	$cc=explode("-",$dob);
	$cday=$cc[0];
	$cmonth=$cc[1];
	$ins=mysql_query("insert into student(id,name,gender,dob,cday,cmonth,mobile,email,regno,year,batch,dept,degree) values($id,'$name','$gender','$dob','$cday','$cmonth','$mobile','$email','$regno','$year','$batch','$dept','$degree')");
				if($ins)
				{
				$msg="Registered Successfully";
				}
				else
				{
				$msg="Already Exist!";
				}
			
			}
			else
			{
			$msg="Already Exist!";
			}
	}
	?>
    <section id="register">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Student</h3>
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
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
					<div id="name1" style="display:none">Enter your Name</div>
                  </div>
                  <div class="form-group col-lg-6">
                     <input type="text" name="regno" class="form-control" id="regno" placeholder="Register No." />
					<div id="city1" style="display:none">Enter your City</div>
                  </div>
                </div>
				<div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="radio" name="gender" value="Male" /> Male
					<input type="radio" name="gender" value="Female" /> Female
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control" name="dob" id="dob" placeholder="Date of Birth: DD-MM-YYYY" />
					<div id="dob1" style="display:none">Enter your Date of Birth</div>
                  </div>
                </div>
				<div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile No." />
					<div id="mobile1" style="display:none">Enter your Mobile No.</div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
					<div id="email1" style="display:none">Enter your E-mail ID</div>
                  </div>
                </div>
				
				<div class="form-row">
                  <div class="form-group col-lg-6">
                    <select class="form-control" name="year" id="year">
					<option>First Year</option>
					<option>Second Year</option>
					<option>Third Year</option>
					<option>Final Year</option>
					</select>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" class="form-control" name="batch" id="batch" placeholder="Batch Year" />
                  </div>
                </div>
				<div class="form-row">
                  <div class="form-group col-lg-6">
                    <select name="dept" class="form-control">
					<option value="">-Department-</option>
					<option>CS</option>
					<option>IT</option>
					</select>
                  </div>
                  <div class="form-group col-lg-6">
                    <select name="degree" class="form-control">
					<option value="">-Degree-</option>
					<option>BSc</option>
					<option>BCA</option>
					<option>BE</option>
					<option>B.Tech</option>
					<option>MSc</option>
					<option>MCA</option>
					<option>ME</option>
					<option>M.Tech</option>
					</select>
                  </div>
                </div>
                
                <!--<div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>-->
                <div class="text-center"><input type="submit" name="btn" value="Register" onClick="Return validate()"></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

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
