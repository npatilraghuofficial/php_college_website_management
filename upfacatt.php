<?php 
include("owndbu.php");
error_reporting(0);
$id=$_POST['id'];
$att= 'PRESENT';
echo $att;


$query = "UPDATE facatt SET Attendance='$att' WHERE id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
    echo"succed";
}
else{
    echo"wrong";
}
?>