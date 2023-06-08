<?php
include("owndbu.php");
error_reporting(0);
echo $empid = $_POST['empid'];
if(isset($_POST['vid']))
{
  $vid = $_POST['vid'];
  $empid = $_POST['empid'];
   $vid;

   $sql = "SELECT * FROM vclass WHERE vid='".$vid."' AND empid='".$empid."' limit 1";
    $result = mysqli_query( $conn, $sql);
    {
        if(mysqli_num_rows($result)==1)
           {
               
           ?> 
          <script>alert("you are succesfully logged in")</script>;
          <?php
         header ( "refresh:0.1; url=virtualclassroom.php");
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
    <title></title>
    <link rel="stylesheet" href="styleforlogin.css">
    <div class="cont">
            <div class="admin">
                              <div class="student">
                
                <a href="fachome.php"><b><font color="green" size="4"><b>logout</b></font></a>
                </div>
</DIV>

     </head>
  <body>
      
        <form action="VCLASSLOGIN.PHP" method="POST">
      

<div class="login-box">
  <h1 border="legend">VIRTUAL CLASS </h1>
 

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="empid" value="<?php echo $_GET['empid'];?>" placeholder="EMPID">
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password"  name="vid" placeholder="VIRTUAL-CLASS-ID">
  </div>
  
  <input type="submit" class="btn" value="Submit" >
</div>
</form>
 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
function sms()
{
  swal("SORRYh", "Contact Your College !");
} </script>

  </body>
</html>
