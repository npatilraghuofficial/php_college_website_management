

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
        width:350px;
        height:500px;
    }
    .introo{ padding:20px;


    }
    
    body{
        background-color:lightgreen;
    }
    </style>
    <body bgcolor="light green">

    <form method="POST" action="">
    <div class="introo">
    
   
        <div class="insert">
            <b>UPDATE EVENTS TIME TABLE HERE!!!!</b> 
<input type="textbox" name="dayid" class="form-control"  placeholder="enter day id here" >
<input type="textbox" name="date"class="form-control" placeholder="enter day date(yyyy/mm/dd)" >
<input type="textbox" name="p1" class="form-control"placeholder="9:30-12:30 1st sem" >
<input type="textbox" name="p2" class="form-control"placeholder="1:00 - 2:30 3rd sem" >
<input type="textbox" name="p3" class="form-control" placeholder="2:30-05:00 5th sem" >
<input type="submit" name="submit" class="btn-bt-succes" placeholder="submit" >
</div>




<?php
								  					
    if($_POST['submit']){
        
        $id = $_POST['dayid'];
       $dn = $_POST['date'];
        $p1 = $_POST['p1'];
       $p2= $_POST['p2'];
       $p3 = $_POST['p3'];
     

       $query = "UPDATE EVENTS  SET FIRSTSEM='$p1' , SECONDSEM='$p2' , THIRDSEM='$p3' WHERE ID='$id'";
       $data = mysqli_query($conn, $query);


   
       if($data){

?>
    
    <script>alert("time table updated succesfully")</script>; 

<?php
        header( "refresh:0.1; url=eventsd.php" );
           }else{
echo "<div class='alert alert-danger text-center' role='alert'>error updation failed failed please contact DEVELOPER RAGHAVENDRA!</div>";
header( "refresh:10; url=register.php" );
           }
           
   }


?>

?>
</body>
    </html>
    