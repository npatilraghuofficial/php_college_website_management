<?php 
include("owndbu.php");
error_reporting(0);


date_default_timezone_set("Asia/Kolkatta");


$ct=time();

$ts=date('d-m-yy',$ct);
echo $ts;


$att= 'ABSENT';
$sid=$_GET['sid'];
$phonenumber=$_GET['phonenumber'];
$name=$_GET['name'];
$pic=$_GET['pic'];



 $query = "
 INSERT INTO vclassatt VALUES ('$id','$sid','$name','$att','$pic');
  SELECT vstulogin.sid,vstulogin.name,vstulogin.pic,vclassatt.sid,vclassatt.Attendence
 FROM vstulogin,vclassatt
 WHERE vstulogin.sid=vclassatt.sid
 ORDER BY vclassatt.id;
 ";
$data = mysqli_multi_query($conn, $query);
if($data)
{?><SCRIPT>alert("ATTENADANCE UPDATED AS ABSENT");</SCRIPT><?
    header ( "refresh:0.1; url=vcatt.php");
}
else{
    
    ?>
    
       <script>alert("Attendance already submitted you cannot reupdate it")</script>; 
       <?php   header ( "refresh:0.1; url=vcatt.php");
}
?>



