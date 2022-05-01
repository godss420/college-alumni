<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];

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
          <li><a href="admin_stu.php">Students</a></li>
		  <li><a href="admin_alumni.php">Alumni</a></li>
		  <li><a href="admin_post.php">Post Events</a></li>
		  <li><a href="admin_fund.php">View Fund</a></li>
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
      <h2>Administrator</h2>
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
   
    <section id="register">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Alumni Member</h3>
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
                    <input type="radio" name="gender" value="Male" /> Male
					<input type="radio" name="gender" value="Female" /> Female
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="year" class="form-control" id="location" placeholder="Batch" />
                  </div>
                </div>
				<div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="location" class="form-control" id="location" placeholder="Location" />
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="text" name="desig" class="form-control" id="location" placeholder="Designation" />
                  </div>
                </div>
				
                <div class="text-center"><input type="submit" name="btn" value="Submit"></div>
              </form>
			  
			  <div>
			  <?php
			  if(isset($btn))
			  {
			  	if($gender!="")
				{
				$q=" where gender='$gender'";
				}
				if($year!="")
				{
					if($q=="")
					{
					$q=" where year='$year'";
					}
					else
					{
					$q.=" && year='$year'";
					}
				}
				if($location!="")
				{
					if($q=="")
					{
					$q=" where location like '%$location%'";
					}
					else
					{
					$q.=" && location like '%$location%'";
					}
				}
				if($desig!="")
				{
					if($q=="")
					{
					$q=" where desig like '%$desig%'";
					}
					else
					{
					$q.=" && desig like '%$desig%'";
					}
				}
			  $qry=mysql_query("select * from register $q");
			  while($row=@mysql_fetch_array($qry))
			  {
			  ?>
			  <table width="333" border="1">
			  <tr>
			    <td colspan="4" class="alert-danger"><?php echo $row['name']." (".$row['regno'].") ".$row['desig']; ?></td>
			    </tr>
			  <tr>
			    <td width="64" align="left" class="alert-secondary">Gender</td>
			    <td width="77" align="left"><?php echo $row['gender']; ?></td>
			    <td width="56" align="left" class="alert-secondary">D.O.B</td>
			    <td width="108" align="left"><?php echo $row['dob']; ?></td>
			  </tr>
			  <tr>
                <td align="left" class="alert-secondary">Mobile</td>
			    <td align="left"><?php echo $row['mobile']; ?></td>
			    <td align="left" class="alert-secondary">Email</td>
			    <td align="left"><?php echo $row['email']; ?></td>
			    </tr>
			  <tr>
                <td align="left" class="alert-secondary">Department</td>
			    <td align="left"><?php echo $row['dept']; ?></td>
			    <td align="left" class="alert-secondary">Degree</td>
			    <td align="left"><?php echo $row['degree']; ?></td>
			    </tr>
			  <tr>
			    <td align="left" class="alert-secondary">Batch</td>
			    <td colspan="3" align="left"><?php echo $row['batch']; ?></td>
			    </tr>
			  <tr>
			    <td align="left" class="alert-secondary">Location</td>
			    <td colspan="3" align="left"><?php echo $row['location']; ?></td>
			    </tr>
			  <tr>
			    <td colspan="4" align="left"><strong>Education</strong></td>
			    </tr>
			  <tr>
			    <td colspan="4" align="left"><table width="100" border="1">
                  <tr>
                    <th scope="col">Degree</th>
                    <th scope="col">College</th>
                    <th scope="col">Location</th>
                    <th scope="col">Year</th>
                  </tr>
				  <?php
				  $q5=mysql_query("select * from education where uname='".$row['regno']."'");
				  while($r5=mysql_fetch_array($q5))
				  {
				  ?>
                  <tr>
                    <th scope="row"><?php echo $r5['degree']; ?></th>
                    <td><?php echo $r5['college']; ?></td>
                    <td><?php echo $r5['location']; ?></td>
                    <td><?php echo $r5['year']; ?></td>
                  </tr>
				  <?php
				  }
				  ?>
                </table></td>
			    </tr>
			  <tr>
			    <td colspan="4" align="left"><strong>Experience</strong></td>
			    </tr>
			  <tr>
			    <td colspan="4" align="left"><table width="100" border="1">
                  <tr>
                    <th scope="col">Designation</th>
                    <th scope="col">Company</th>
                    <th scope="col">Location</th>
                    <th scope="col">Experience</th>
                  </tr>
                  <?php
				  $q6=mysql_query("select * from experience where uname='".$row['regno']."'");
				  while($r6=mysql_fetch_array($q6))
				  {
				  ?>
                  <tr>
                    <th scope="row"><?php echo $r6['desig']; ?></th>
                    <td><?php echo $r6['company']; ?></td>
                    <td><?php echo $r6['location']; ?></td>
                    <td><?php echo $r6['experience']; ?></td>
                  </tr>
                  <?php
				  }
				  ?>
                </table></td>
			    </tr>
			  </table>
			  <?php
			  }
			  }
			  ?>
			  </div>
			  
			  
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
