
<?php 
include("owndbu.php");
error_reporting(0);
date_default_timezone_set("Asia/Kolkatta");

  				
				  if (!empty($_POST)){
													
					   if(isset($_POST['submit'])){
									   
									 
									  $email = $_POST['email'];
									 
					  
	  $query = "INSERT INTO subscribe VALUES ('$id','$email')";
	  $data = mysqli_query($conn, $query);
	  if($data){
		  echo"succesfull";
		
		?><script>alert("submitted")</script><?php
	}
		  else
		  {
			  ?><script>alert("email already submitted")</script><?php

		  }
	  }
					
		}
					  ?>
             

<!DOCTYPE html>
<html lang="en">
<head>
	<title>RAGHU-PROJECT(2020)</title>
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
	<link rel="stylesheet" href="css/animate.css"/>
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
					<p><span>Working time:</span>Monday - Friday: 08 AM - 06 PM</p>
				</div>
				
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div>
			<ul class="main-menu">
				<li ><a href="index.php"><font color="black">Home</a></li>
				<li class="active"><a href="about.php"><font color="black">About Us</a></li>
				<li><a href="eventsforstu.php"><font color="black">Event</a></li>
			    <li><a href="display.php"><font color="black">NOTICE-PORTAL</a></li>
				<li ><a href="contact.php"><font color="black">Contact</a></li>
				<li><a href="stulogin.php"><font color="black">login</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->


	<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>About Us</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">
		<div class="container">
			<div class="section-title text-center">
				<h3>WELCOME TO GSC</h3>
				<FONT COLOR=DARK>lets learn and teach others</FONT><p></p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text">
					<h4><FONT COLOR=GREEN>About us</h4></FONT>
					<p>The Government Science College is born out of the visionary foresight of the erstwhile Maharaja (King) of Mysore, His Highness Shri Nalvadi Krishnaraja Wodeyar on the 1st of April 1921 as an intermediate college. As a testimony to its leadership in higher education, the institution has grown from a modest intermediate college to a full-fledged undergraduate college and now into a post-graduate institution with research programs.
						GSC has been dedicated to quality education and to preparing students for leadership in diverse walks of life while at the same time being tempered by social concern, empathy and visionary leadership across two centuries. Owing to its scope and pace of change, post-2000 will go down in the history of GSC as the period of its most spectacular expansion and quality enhancement. The introduction of PG courses, research programs, with two successive NAAC accreditations of B++ and “A” followed by CPE status in 2009 and 2015 and more recently- the autonomous status are some of the milestones of the last decade.
						This temple of enlightenment has stood the test of times as a beacon of knowledge for generations of youth who have served the society from pre-independence to the post-independent era. The greatest testimonial is the contribution of its students to society and GSC is quietly proud to have contributed to society's growth over 94 years of glorious existence through a set of students who are etched as knowledge revolutionaries in the by-lanes of history. </p>
					
						<H4><FONT COLOR=GREEN>OUR MISSION</H4></FONT>
						<P><li><i class="fa fas-circle-o"></i>To instill scientific zeal and develop skilled human resource to meet contemporary challenges.</i>
							<li><i class="fa fas-circle-o"></i>To facilitate young adult learners with opportunities to hone their ethics and leadership potential.</i>
							<li><i class="fa fas-circle-o"></i>To sensitize learners towards inclusive social concerns, human rights, gender and environmental issues.</i>
							</P>

					<h4 class="pt-4"><FONT COLOR=GREEN>OUR GOALS</h4></FONT>
					<ul class="about-list">
						<li><i class="fa fa-check-square-o"></i>To impart in-depth knowledge in Science.</li>
						<li><i class="fa fa-check-square-o"></i>To build a foundation for lifelong learning.</li>
						<li><i class="fa fa-check-square-o"></i>To impart technical competence to develop skilled human resource.</li>
						<li><i class="fa fa-check-square-o"></i>To organize extension activities to promote wellbeing, leadership, social responsibilities and environmental awareness.</li>
						<li><i class="fa fa-check-square-o"></i>To promote critical and analytical thinking.</li>
						<li><i class="fa fa-check-square-o"></i>To encourage innovations through research.</li>
						<li><i class="fa fa-check-square-o"></i>To indoctrinate life skills in adult learners to meet contemporary challenges.</li>
						
					</ul>
					<h4 class="pt-4"><FONT COLOR=GREEN>OUR VISION</h4></FONT><P><B>Government Science College, Bangalore aspires to have a transformational impact on students through comprehensive education by inculcating qualities of competence, confidence and excellence.</B></P>
			
				</div>
				
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="gsc/gsc3.png" alt="">
					<img src="gsc/gsc2.png" alt="">
				
				</div>
			</div>
		</div>
	</section>
	<!-- About section end-->


	<!-- Testimonial section  -->
	<section class="testimonial-section spad">
		<div class="container">
			<div class="testimonial-slider owl-carousel">
				<div class="ts-item">
					<div class="row">
						<div class="col-md-3">
							<div class="ts-author-pic set-bg" data-setbg="gsc/gsclog2.jpg"></div>
						</div>
						<div class="col-md-9 ts-text">
							<p>“ The Government Science College is committed to cater quality education to the needy sections of society and pursue global standards of
								excellence in all endeavours by raising standards of human relations through engaged knowledge building in Science while inculcating a culture of inclusion and positive values and high ethical standards. In addition to acquiring knowledge in science, research and extension, special emphasis is given to sensitize learners towards social, gender and environmental sensitivities culminating in having a transformational impact on students through comprehensive education aimed at holistic development and leadership in a complex world. ”</p>
							<h5> GOVERNMENT SCIENCE COLLEGE (GSC)</h5>
							<span>DEPARTMENT OF COLEEGATIVE</span>
						</div>
					</div>
				</div>
				<div class="ts-item">
					<div class="row">
						<div class="col-md-2">
							<div class="ts-author-pic set-bg" data-setbg="gsc/naac.png"></div>
						</div>
						<div class="col-md-9 ts-text">
							<p>“ The college is recognized by the University Grants Commission (UGC) and has been awarded College with Potential for Excellence - CPE status for the second time. During the third cycle of NAAC accreditation, the college has been awarded A+ with a CGPA of 3.54. The college is recognised by DST - FIST.”</p>
							 
							<h5> <span> National Assessment and Accreditation Council (NAAC) </span></h5>
						</div>
					</div>
				</div>
		
				<div class="ts-item">
					<div class="row">
						<div class="col-md-3">
							<div class="ts-author-pic set-bg" data-setbg="gsc/bu.png"></div>
						</div>
						<div class="col-md-9 ts-text">
							<p>“Government Science College is situated in Bangalore in Karnataka state of India. Established in 1971, it is accredited from NAAC, AICTE and it is affiliated to Bangalore University. GSC, Bangalore offers 17 courses across 3 streams namely Science, Arts, IT and across 4 degrees like BSc, BCA, B.O.T, MSc.Hostel facility is not available for its students. ”</p>
							
							<H5><span>AFFILIATED TO BANGALORE UNIVERSITY</span></H5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial section end -->


	<!-- Team section  -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>OUR STUDENTS</h3>
				<p>The professional standards and expectations</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="gsc/raghu.jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>MR PATIL</h5>
						<p>SINGER</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="gsc/santu.png">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>FURY BRO</h5>
						<p>ARTIST</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="gsc/dar.png">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>SETTY</h5>
						<p>MR HACKER</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="img/member/4jpg">
							<div class="member-social">
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<h5>XYZ</h5>
						<p>YYYY</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					<h3>NEWSLETTER</h3>
					<p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
      
             
                </div>
				</div>
				<div class="col-md-7 col-lg-5">
					
                    <form class="newsletter" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
						<input type="text" placeholder="Enter your email" name="email">
						<button class="site-btn"  type="submit" name="submit" >SUBSCRIBE</button>
                    </form>
                    <?php 
  				
				  if (!empty($_POST)){
					 if(isset($_POST['submit'])){
						$email = $_POST['email'];
								
					  
	  $query = "INSERT INTO subscribers VALUES ('$id','$email')";
	  $data = mysqli_query($conn, $query);
	  if($data){
		  echo"succesfull";
		
		?><script>alert("subscribed!")</script><?php
	}
		  else
		  {
            ?><script>alert(" this email is already subscribed!")</script><?php

		  }
	  }
					
		}
					  ?>
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
						<li><p><i class="fa fa-envelope"></i>npatilragh@gmail.com</p></li>
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