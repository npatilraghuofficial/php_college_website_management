
<style>
*{background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
<?php
include("owndbu.php");
error_reporting(0);
session_start();
echo"<font color=black><h1>welcome</font><font color=green> $_SESSION[uname];</font></h2>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head><a href="logoutvc.php">LOG-OUT</a></head>
    <STYLE>
        .LAYOUT{
            width:1000px;
            border:groove;
            margin-left:350px;
            margin-right:50px;
		}
		.main{
			border:groove;
			width:1100px;
			height:700px;
			float:right;
			margin-right:50px;
			margin-top:50px;
		}
		.video{ display:flex;
    float:right;
    padding:15px;
    position:relative;
    margin-top:5px;
    margin-right:25px}
        </STYLE>
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/></head>
<DIV CLASS="LAYOUT"
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>virtual class room</span>
		</div>
    </div>
    
</DIV>
	
			<div class="main">


			<div class="video">
                    <video controls autoplay loop><source src="princi.mp4"></video> 
					</div>
					
					
	</div>	
				<!-- sidebar -->
<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">

					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">DOWNLOAD</h4>
						<div class="tags">
							<a href="dispfiles.php">ASSAIGNMENTS</a>
						
							
						</div>
                    </div>
                    
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">video-class-links</h4>
						<ul>
							<B><li><a href="princi.mp4">chapter 1</a></li></B>
							<B>	<li><a href="">chapter 2</a></li></B>
							<B><li><a href="">chapter 3</a></li></B>
							<B><li><a href="">chapter 4</a></li></B>
							<B><li><a href="">chapter 5</a></li></B>
							<B><li><a href="">chapter 6</a></li></B>
							<B><li><a href="">chapter 7 </a></li></B>
							<B><li><a href=""> chapter 8 </a></li></B>
							<B><li><a href=""></a></li>
							<li><a href="">Education</a></li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page section end -->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-7">
					<div class="section-title mb-md-0">
					
				</div>
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
					
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	
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