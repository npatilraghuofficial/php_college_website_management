<?php 
include("owndbu.php");
error_reporting(0);


date_default_timezone_set("Asia/Kolkatta");


$ct=time();

$ts=date('d-m-yy',$ct);
echo $ts;


$att= 'PRESENT';


 $id=$_GET['id'];


$query = "UPDATE facatt SET Attendence='$att' WHERE id='$id';
 ;
";
$data = mysqli_query($conn, $query);
if($data)
{
    header ( "refresh:0.1; url=facatt.php");
}
else{
    echo"wrong";
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
                </script>