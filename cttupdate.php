<?php 
include("owndbu.php");
error_reporting(0);
?>

<html>
    
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
        *{
            background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255,255,255,0.50) 47%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: screen;
        }
</style>
<style>
    .insert{
        padding:20px;
        margin-top:80px;
        width:250px;
        height:500px;
    }
    body{
        background-color:lightgreen;
    }
    .introo{
        padding:20px;
    }
    </style>
    <body >

    <form method="POST" action="">
    <div class="introo">
    <B>day-id &nbsp Day Name </B></br> "1" = &nbsp MONDAY</br> "2" = &nbsp TUESDAY</b></br> "3" =  &nbspWEDNESDAY</b> </br> "4" = &nbsp THURSDAY</b></br> "5" =  &nbspFRIDAY</b></br> "6" =  &nbspSATURDAY</b>
       
       </div> <div class="insert">
            <b>update time table here!!!</b> 
<input type="textbox" name="dayid" class="form-control"  placeholder="enter day id here" >
<input type="textbox" name="dayname"class="form-control" placeholder="enter day name here" >
<input type="textbox" name="p1" class="form-control"placeholder="8:30-9:30" >
<input type="textbox" name="p2" class="form-control"placeholder="9:30-10:30" >
<input type="textbox" name="p3" class="form-control" placeholder="10:30-11:30" >
<input type="textbox" name="p4" class="form-control" placeholder="11:30-12:30" >
<input type="textbox" name="p5" class="form-control" placeholder="12:30-2:00" >
<input type="textbox" name="p6" class="form-control" placeholder="2:00-3:00" >
<input type="textbox" name="p7" class="form-control"placeholder="3:00-4:00" >
<input type="textbox" name="p8" class="form-control"placeholder="4:00-5:00" >
<input type="submit" name="submit" class="btn-bt-succes" placeholder="submit" >
</div>

<?php
								  					
    if($_POST['submit']){
        
        echo $id = $_POST['dayid'];
       echo $dn = $_POST['dayname'];
       echo $p1 = $_POST['p1'];
       echo $p2= $_POST['p2'];
       echo $p3 = $_POST['p3'];
       echo $p4= $_POST['p4'];
       echo $p5 = $_POST['p5'];
       echo $p6= $_POST['p6'];
       echo $p7 = $_POST['p7'];
       echo $p8 = $_POST['p8'];
       echo $id;


       $query = "UPDATE classtimetable SET FIRST='$p1' , SECOND='$p2' , THIRD='$p3' , FOURTH='$p4' , FIFTH='$p5' , SIXTH='$p6' , SEVENTH='$p7' , EIGHT='$p8' WHERE ID='$id'";
       $data = mysqli_query($conn, $query);

 ECHO $data;
   
       if($data){
echo "<div class='alert alert-success text-center' role='alert'>time table updated</div>";
    
?>
<script>alert("TIME TABLE  updated succesfully")</script>; 
<?php

               header( "refresh:3; url=cttd.php" );
           }else{
echo "<div class='alert alert-danger text-center' role='alert'>error updation failed failed please contact DEVELOPER RAGHAVENDRA!</div>";
header( "refresh:10; url=register.php" );
           }
           
   }


?>

?>
</body>
    </html>
    