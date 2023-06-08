<?php
include("owndbu.php");
error_reporting(0);
session_start();
if(isset($_POST['submit']))
{
  $uname = $_POST['username'];
  $password = $_POST['password'];
$result=mysqli_query($conn,'SELECT * FROM FACULTYDB WHERE USERNAME="'.$uname.'" AND PASSWORD="'.$password.'"');
if(mysqli_num_rows($result)==1)
            {
                $_SESSION['uname']=$uname;
                header('location:fachome.php');
            }

else
echo"nooooooooo";
        }
        <script>alert("you are succesfully logged in")</script>;


?>
<form method="POST">

<div class="textbox">
<i class="fas fa-user"></i>
<input type="text"  name="username" placeholder="Username" required>
</div>
<div class="textbox">
<i class="fas fa-lock"></i>
<input type="password" name="password" placeholder="Password"  required>
</div>



<input type="submit" name="submit" class="btn" value="Submit" >
</FORM>