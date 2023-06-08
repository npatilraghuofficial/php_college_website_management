<?php
include("owndbu.php");
error_reporting(0);

if(isset($_POST['username']))

{

  $uname = $_POST['username'];
  $password = $_POST['password'];
  echo $uname;

   $sql = "SELECT * FROM LOGIN WHERE USERNAME='".$uname."' AND PASSWORD='".$password."' limit 1";
    $result = mysqli_query( $conn, $sql);
    {
        if(mysqli_num_rows($result)==1)
           {
               
           ?> 
          <script>alert("you are succesfully logged in")</script>;
          <?php
         header ( "refresh:1; url=askdb.php");
        exit();
                
            }
            else
            {
             ?> 
              <script>alert("INVALID CREDENTIALS LOGIN FAILED")</script>;
             <?php
             header ( "refresh:0; url=loginref2.php");
               exit();
               
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styleforlogin.css">
    <div class="cont">
            <div class="admin">
                
                <a href="adminlogin.php"><b><font color="green" size="4"><b>ADMIN</b></font></a>
                </div>


                <div class="faculty">
                
                <a href="facultylogin.php"><b><font color="green" size="4"><b>FACULTY</b></font></a>
                </div>
                
                <div class="student">
                
                <a href="stulogin.php"><b><font color="green" size="4"><b>STUDENT</b></font></a>
                </div>
</DIV>
     </head>
  <body>
      
        <form action="" method="POST">
      

<div class="login-box">
  <h1 border="legend">Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text"  name="username" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>
  
 

  <input type="submit" class="btn" value="Submit" >

  <div class="forget">
   
   <a href="forgetfaculty.php"><b><font color="green" size="4"><b>Forgot Password?</b></font></a>
  </div>
  
  <div class="signup">
        
       <a href="facultyreg.php"><b><font color="green" size="4"><b>New faculty /sign-up now</b></font></a>
      </div>


</div>
</form>

  </body>
</html>
