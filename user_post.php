<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_POST);
$uname=$_SESSION['uname'];

$qry=mysql_query("select * from register where regno='$uname'");
$row=mysql_fetch_array($qry);
$id=$row['id'];
$ph=$row['photo'];
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
<form name="form1" method="post" enctype="multipart/form-data">
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
    <div class="intro-text">
      <h2>Profile</h2>

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
	 <section id="register">
      <div class="container">
        <div class="row" data-aos="fade-up">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Post</h3>
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
              <form action="" method="post" name="form" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="title" placeholder="Title" />				  
                </div>
				<div class="form-group">
                  <select class="form-control" name="stype">				  
				  <option>Document</option>
				  <option>Image</option>
				  <option>Video</option>
				  </select>
                </div>
				<div class="form-group">
                  Select Image<input type="file" name="file">
				  
                </div>
				<div class="form-group">
                  <textarea class="form-control" name="details"></textarea>
				  
                </div>
                <div class="text-center"><input type="submit" name="btn" value="Submit"></div>
              </form>
			  
			  <div>
			  <?php
			  $rdate=date("d-m-Y");
			  if(isset($btn))
			  {
			  	$mq=mysql_query("select max(id) from user_post");
	$mr=mysql_fetch_array($mq);
	$id=$mr['max(id)']+1;
	$fname="P".$id.$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$fname);
	$ins=mysql_query("insert into user_post(id,uname,title,fname,stype,details,rdate) values($id,'$uname','$title','$fname','$stype','$details','$rdate')");
	//echo "Post Uploaded Successfully";
	?>
	<script language="javascript">
	window.location.href="user_post.php";
	</script>
	<?php
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
	
 <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Posts</h3>
          <span class="section-divider"></span>
          <p class="section-description">News/Events/Posts</p>
        </div>

        <div class="row no-gutters">
			<?php
			$qry1=mysql_query("select * from user_post where uname='$uname' order by id desc");
			while($row1=mysql_fetch_array($qry1))
			{
			?>
          <div class="col-lg-4 col-md-6">
            <div>
			<?php
			if($row['photo']=="")
			{
			?>
            <img src="img/profile.png" alt="" width="60" height="60">
			<?php
			}
			else
			{
			?>
            <img src="photo/<?php echo $row['photo']; ?>" width="60" height="60" alt="">
			<?php
			}
			?>
                         </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
			<?php
			if($row1['stype']=="Video")
			{
			?><video width="400" controls>
  <source src="upload/<?php echo $row1['fname']; ?>" type="video/mp4">
  <source src="upload/V2vvv.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video><?php
			}
			else if($row1['stype']=="Image")
			{
			?>
              <a href="img/gallery/gallery-2.jpg" class="gallery-popup">
                
				<img src="upload/<?php echo $row1['fname']; ?>" alt=""></a>            
			<?php
			}
			
			echo '<br><a href="download.php?file1='.$row1['fname'].'&folder1=upload">Download File</a>';
			
			?>
			</div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item" data-aos="fade-up">
              
                <h2><?php echo $row1['title']; ?><h2>
				<h4>Post on <?php echo $row1['rdate']; ?></h4>
				<p><?php echo $row1['details']; ?></p>                    </div>
          </div>
			<?php
			}
			?>
         

        </div>

      </div>
    </section><!-- #gallery -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php include("include/footer_admin.php"); ?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</form>
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
