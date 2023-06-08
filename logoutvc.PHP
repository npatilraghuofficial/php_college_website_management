
<?php 
include("owndbu.php");
error_reporting(0);
session_start();
$apn = $_GET['apn'];
 echo $phonenumber= $_SESSION['phonenumber'];
$query = "DELETE FROM vstulogin WHERE phonenumber='$phonenumber';
";
$data = mysqli_query($conn, $query);
if($data)
{
    echo"<script>alert('logged-out suuccesfully')</script>";
    header ( "refresh:0; url=stuhome.php" );
}else{
    echo"record deleted failed";
    header ( "refresh:2; url=" );
}


?>