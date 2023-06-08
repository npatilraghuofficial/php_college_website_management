
<?php 
include("owndbu.php");
error_reporting(0);
date_default_timezone_set("Asia/Kolkatta");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>RAGHU PROJECT(2020)</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.html" class="site-logo"><img src="img/gsclogo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM & SATURDAY 08:AM - 1:00 PM</p>
				</div>
				<div class="hf-item">
					<i class="fa fa-map-marker"></i>
					<p><span>Find us:</span>KR CIRCLE AMBEDKAR VEEDI BENGALURU 560001</p>
				</div>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
			
			</div>
			<ul class="main-menu">
				<li ><a href="index.php"><font color="black">Home</a></li>
				<li ><a href="about.php"><font color="black">About Us</a></li>
				<li><a href="eventsforstu.php"><font color="black">Event</a></li>
			    <li><a href="display.php"><font color="black">NOTICE-PORTAL</a></li>
				<li class="active"><a href="contact.php"><font color="black">Contact</a></li>
				<li><a href="stulogin.php"><font color="black">login</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">
			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						<h4>Address</h4>
                     <B> <p>  <FONT COLOR="WHITE"> GOVERNMENT SCIENCE COLLEGE(GSC)<FONT><BR>
                    NRUPATUNGA ROAD,<BR>SAMPIGE RAM NAGARA,<BR>AMBEDKAR VEEDHI<BR>BENGALURU-560001,KARNATAKA</p></B>
					</div>
					<div class="contact-info">
						<h4>Phone</h4>
						<p>9876543210</p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p>gsccollege@gmail.com</p>
					</div>
					
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"></div>
			</div>
			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>ANY QUERRIES???</h3>
					<p>Contact us for any details regarding college and course details</p>
				</div>
				
<!-- load for map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>


 <div class="container"> 
 <h1></h1></br>
                    <div class="row">
             <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

     <li><input type="text" class="form-control" name="name" id="ln" size="80" placeholder="name" ></li></br>
     
    <li><input type="text" class="form-control" name="email" id="ln" placeholder=" email" ></li></br>                                            
    <li><input type="textbox" class="form-control" name="sub" id="ln" placeholder="subject" ></li></br>                                            
    <li><textarea placeholder="Message" name="sms" size="80" width="80"></textarea></li></br>

    
    <button style="margin-left: 5px;background-color: orange;" type="submit" name="submit"  class="btn btn-primary">Register</button>
                        	
                         	
        </div>
    </div>      
    </form>
	<?php 
  				
				  if (!empty($_POST)){
													
					   if(isset($_POST['submit'])){
									   
									  $name =$_POST['name'];
									  $email = $_POST['email'];
									  $sub = $_POST['sub'];
									  $sms = $_POST['sms'];
					  
	  $query = "INSERT INTO contact VALUES ('$name','$email','$sub','$sub','$id')";
	  $data = mysqli_query($conn, $query);
	  if($data){
		  echo"succesfull";
		
		?><script>alert("submitted")</script><?php
	}
		  else
		  {
			?><script>alert("already submitted")</script><?php

		  }
	  }
					
		}
					  ?>
             
			</div>
		</div>
	</section>
	<!-- Courses section end-->
   

	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3></h3>
					<p></p>
				</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
						<img src="img/gsclogosm.png" alt="">
						<p>Government Science College(NT ROAD)<BR>Dept.Collegative<br>Bengaluru Central Division<br>560001</p>
						<div class="social pt-1">
							<a href=""><i class="fa fa-twitter-square"></i></a>
							<a href=""><i class="fa fa-facebook-square"></i></a>
							<a href=""><i class="fa fa-google-plus-square"></i></a>
							<a href=""><i class="fa fa-linkedin-square"></i></a>
							<a href=""><i class="fa fa-rss-square"></i></a>
						</div>
					</div>
				</div>
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">USEFUL LINK</h6>
					<div class="dobule-link">
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">KPSC</a></li>
							<li><a href="">RRB</a></li>
							<li><a href="">Events</a></li>
							<li><a href="">Features</a></li>
						</ul>
						<ul>
							<li><a href="">Policy</a></li>
							<li><a href="">Term</a></li>
							<li><a href="">Help</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Site map</a></li>
						</ul>
					</div>
				</div>
				
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<h6 class="fw-title">CONTACT</h6>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> Govt Science College</p></li>
						<li><p><i class="fa fa-phone"></i>87225836**</p></li>
						<li><p><i class="fa fa-envelope"></i>npatilraghu@gmail.com</p></li>
						<li><p><i class="fa fa-clock-o"></i> Monday -Saturday, 08:00AM - 06:00 PM</p></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">RAGHAVENDRA N PATIL</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	
</body>
</html>