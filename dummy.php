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
 $_SESSION['uname'];
 $phonenumber= $_SESSION['phonenumber'];


$_GET['id'];
 $_GET['pic'];
$_GET['gen'];
$_GET['sname'];
$_GET['srn'];
$_GET['srn'];
 $_GET['id'];
$_GET['sname'];
 $data;

if(isset($_POST['submit']))
   {    
     $sname=$_POST['sname'];
     $sid=$_POST['id']; 
     $pic=$_GET['pic'];
     $query = "INSERT INTO vstulogin VALUES ('$id','$sid','$sname','$pic','$phonenumber')";
     $data = mysqli_query($conn, $query);
    }
    if($data)
      {
        echo"ACCESS GRANTED PLEASE WAIT......";
        header ( "refresh:0.1; url=virtualclassroomforstu.php");}
      else{
      ?><script>alert("LOG-IN BLOCKED PLEASE CONTACT FACULTY!!!")</script><?PHP
      }
?>
    <div id="MyClockDisplay" class="clock"></div>
    <style> 
     .clock{
            position:absolute;
            top:10%;
            left:90%;
            transform:translateX(-50%) translateY(-50%);
            color:BLACK;
            font-size:25px;
            border:1px solid #ccc;
            padding:0px;
            }
            </style>
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

                       
                    var time= h + ":" + m + ":" + s + "" + "_"+ session;
                    document.getElementById("MyClockDisplay").innerText = time;
                    document.getElementById("MyClockDisplay").innerContex = time;

                    setTimeout(showTime,1000);
                    }
                    showTime();
                   
  </script>


  
<html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="styleforlogincss">
      
<form name="myForm" id="myForm"  method="POST">	
<div class="login-box">
  <h1 border="legend">TERMS AND CONDITION</h1>
  <P>1) Once if the student logged in to virtual class,If he get exit without pressing log out button,then he will be not able to log-in again<br>
  if he does then he need to contact his faculty to allow acces to his virtual class</p> 
  </P>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="hidden" name="empid" value="<?php echo $_GET['empid'];?>" placeholder="">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="hidden"  name="vid" placeholder="VIRTUAL-CLASS-ID">
  </div>
  
 

  <input type="submit" name="submit" class="btn" value="Agree & Join.." >


  <td><input type="HIDDEN" name="id" size="20"  value="<?php echo $_GET['id'];?>"> <input type="file" hidden name="uploadfile"><img hidden src="<?php echo $_GET['pic'];?>" height='100' width='100'/><input hidden type="button" name="disp" value="please upload passport size photo"></td> </td>
     <td><input type="HIDDEN" name="sname" size="43" id="studentname" value="<?php echo $_GET['sname'];?>"></td>
     <input type="hidden" name="gen" value="<?php echo $_GET['gen'];?>" size="10" >
  <input type="hidden" name="gen" value="<?php echo $_GET['gen'];?>" size="10" >
             
  <td><input type="hidden" name="dob" size="30" id="dob" value="<?php echo $_GET['dob'];?>"></td>
       <td><input type="hidden" name="email"  size="60" id="emailid" value="<?php echo $_GET['phonen'];?>"></td>
      <td><input type="hidden" name="phonen"  size="60"  id="mnum" value="<?php echo $_GET['email'];?>"></td>
     

      </form>
 
  </html>