<?php
include("owndbu.php");
error_reporting(0);

if(isset($_POST['username']))

{

  $uname = $_POST['username'];
  $password = $_POST['password'];
  echo $uname;


   $sql = "SELECT * FROM adminlogin WHERE USERNAME='".$uname."' AND PASSWORD='".$password."' limit 1";
    $result = mysqli_query( $conn, $sql);
    {
        if(mysqli_num_rows($result)==1)
           {
               
           ?> 
          <script>alert("you are succesfully logged in")</script>;
          <?php
         header ( "refresh:1; url=askadmin.php");
        exit();
                
            }
            else
            {
            
             ?> 
              <script>alert("INVALID CREDENTIALS LOGIN FAILED")</script>;
             <?php
             header ( "refresh:0; url=index.html");
               exit();
               
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>    @media only screen and (min-width: 992px) and (max-width: 1199px) {
     .cont{
       position:relative;
       margin-top:20px;
     } 
    }</style>
    <title></title>
    <link rel="stylesheet" href="styleforlogin.css">
    <div class="cont">
            <div class="admin">
                
                <a href="adminlogin.php"><b><font color="yellow" size="4"><b>ADMIN</b></font></a>
                </div>


                <div class="faculty">
                
                <a href="facultylogin.php"><b><font color="yellow" size="4"><b>FACULTY</b></font></a>
                </div>
                
                <div class="student">
                
                <a href="stulogin.php"><b><font color="yellow" size="4"><b>STUDENT</b></font></a>
                </div>
</DIV>

     </head>
  <body>
      
        <form action="" method="POST">
      

<div class="login-box">
  <h1 border="legend" color="yellow">Admin Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text"  name="username"  required placeholder="Username">
  </divQ2>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" required  placeholder="Password">
  </div>
  
 

  <input type="submit" class="btn" value="Submit" onclick=val();>

  <div class="forget">
   
   <a href="" onclick=sms(); ><b><font color="yellow" size="4"><b>Forgot Password?</b></font></a>
  </div>
  
  <div class="signup">
        
       <a href="" onclick=sms(); ><b><font color="yellow" size="4"><b>New faculty /sign-up now</b></font></a>
      </div>


</div>
</form>
 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
function sms()
{
  swal("SORRYh", "Contact Your College !");
} </script>

  </body>
</html>
