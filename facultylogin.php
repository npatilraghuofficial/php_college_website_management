
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styleforlogin.css">
    <div class="cont">
            <div class="admin">
                
                <a href="adminlogin.php"><b><font color="orange" size="4"><b>ADMIN</b></font></a>
                </div>


                <div class="faculty">
                
                <a href="facultylogin.php"><b><font color="orange" size="4"><b>FACULTY</b></font></a>
                </div>
                
                <div class="student">
                
                <a href="stulogin.php"><b><font color="orange" size="4"><b>STUDENT</b></font></a>
                </div>
</DIV>
     </head>
    
  <body>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
        <form method="POST">
      

<div class="login-box">
  <h1 border="legend">Faculty Login</h1>
  <div class="textbox">
    <i class="fas fa-phone"></i>
    <input type="text"  name="phonenumber" placeholder="phonenumber" >
  </div>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text"  name="username" placeholder="Username" required>
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password"  required>
    <input type="hidden" name="id">
  </div>
  
 

  <input type="submit" name="submit" class="btn" value="Submit" >

  <div class="forget">
   
   <a href="forgetfac.php" onclick=sms2(); ><b><font color="orange" size="4"><b>Forgot Password?</b></font></a>
  </div>
  
  <div class="signup">
        
       <a href="facultyreg.php"><b><font color="orange" size="4"><b>New faculty /sign-up now</b></font></a>
      </div>



      <?php
include("owndbu.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
  $uname = $_POST['username'];
  $id = $_POST['id'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
$result=mysqli_query($conn,'SELECT * FROM facultydb WHERE USERNAME="'.$uname.'" AND PASSWORD="'.$password.'"');
if(mysqli_num_rows($result)==1)
            {
              ?><script>alert("you are succesfully logged in")</script>;<?php
                $_SESSION['uname']=$uname;
                $_SESSION['id']=$id;
                $_SESSION['phonenumber']=$phonenumber;
               
                header ( "refresh:0.1; url=fachome.php" ); 
            }

else{
echo"invalid credentials";}
        


          }
?>
</div>
</form>

  </body>
</html>
