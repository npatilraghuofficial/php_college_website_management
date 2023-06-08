
<html>
<title>Raghu-Prject(2020)</title>
<head><CENTER><FONT COLOR="GREEN"><H2>WELCOME TO NEWS PORTAL OF GSC</H2></FONT></CENTER></head>
<link rel="stylesheet" href="css/style.css"/>

<style>  
.faculty{
    border:groove;
  
    width:AUTO;
    height:auto;}

    .video{ display:flex;
    float:right;
    padding:15px;
    position:relative;
    margin-top:5px;
    margin-right:25px}

    .news{
        width:400px;
        height:600;
        display:left;
        position:relative;
        border:groove;
    }
    .news.newspart{
        float:left;
     
    }
 </style>


<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				
			</div>
			<ul class="main-menu">
				<li ><a href="index.php"><font color="black">Home-Page</a></li>
				<li><a href="ettd.php"><font color="black">EXAMINATION-TIME-TABLE</a></li>
				<li><a href="cttd.php"><font color="black">CLASS-TIME-TABLE</a></li>
				<li><a href="eventsforstu.php"><font color="black">EVENTS</a></li>
				<li><a href="stulogin.php"><font color="black" border="groove">login</a></li>
			</ul>
		</div>
    </nav>
    
<?php
include("owndbu.php");
error_reporting(0);
$query = "SELECT * FROM notice";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !== 0 )
{
    while($result = mysqli_fetch_assoc($data))
             {
             ?>
             <body><div id="HTMLtoPDF">
             <?php
    echo"<div class=faculty>
            <FONT COLOR=GREEN>DAILY-UPDATES</FONT><BR><marquee behavior=alternate> <table><th>".$result['feed1']."</th> </table></marquee>
            
        <div class=newspart><marquee behavior=slide bgcolor=lightgreen direction=up hspace=50 vspace=10 scrollamount=4>
                     <h3>WELCOME TO NEWS PORTAL OF GSC</h3>
                     <h3><tr><a href=".$result['feed2']." ></a></tr></h3>
                     <h3><tr>".$result['feed3']."</tr></h3>
                     <h3><tr>".$result['feed4']."</tr></h3>
                     <h3><tr>".$result['feed5']."</tr></h3>
                     <h3><tr>".$result['feed6']."</tr></h3>
                     <h3><tr>".$result['feed7']."</tr></h3>
                     <h3><tr>".$result['feed8']."</tr></h3>
                    
                     
                </marquee> </div> 
                <div class=video>
            <video controls autoplay loop><source src=video5.mp4 SIZE=10></video> 
          
            <div class=news>
           <marquee behavior=slide bgcolor=lightgreen direction=up hspace=50 vspace=10 scrollamount=10>
             <h3>ANNOUNCEMENT-1</h3><BR>
              <h3>ANNOUNCEMENT-2</h3><BR>
              <h3>ANNOUNCEMENT-3</h3><BR>
              <h3>ANNOUNCEMENT-4</h3><BR>
              <h3>ANNOUNCEMENT-5</h3><BR></marquee>
             </div></div>
      
                   
            ";
             
    }?>
<?php
    }?></div>
    
    
   
                   
   
            
                </div>
</body>




    