<?php 
include("owndbu.php");
error_reporting(0);


date_default_timezone_set("Asia/Kolkatta");


$ct=time();

$ts=date('d-m-yy',$ct);
echo $ts;


$att= 'PRESENT';
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
{?><SCRIPT>alert("ATTENADANCE UPDATED AS PRESENT");</SCRIPT><?
    header ( "refresh:0.1; url=vcatt.php");
}
else{
    
    ?>
    
       <script>alert("Attendance already submitted you cannot reupdate it")</script>; 
       <?php   header ( "refresh:0.1; url=vcatt.php");
}

?>



<div id="MyClockDisplay" class="clock"></div>
    <script type="text/javascript">
                    function showTime()
                    {
                    var date = new Date();
                    
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session="AM";
                    if(h==0){
                        h=12;
                    }
                    if(h>12){
                        h=h-12;
                        session="PM";
                         }
                    h = (h < 10) ? "0" + h : h;
                    m = (m < 10) ? "0" + m : m;
                    s = (s < 10) ? "0" + s : s;

                       
                    var time= h + ":" + m + ":" + s + "" + session;
                    document.getElementById("MyClockDisplay").innerText = time;
                    document.getElementById("MyClockDisplay").innerContex = time;

                   
                    }
                    showTime();
                    function checkPRESENT()
                         { 
                        alert("ATTENADANCE UPDATED AS PRESENT THIS CANNOT RE-UPDATED");
                       }

                </script>