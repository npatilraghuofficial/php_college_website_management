<?php 
include("owndbu.php");
error_reporting(0);



$att= 'ABSENT';
echo $att;
echo $id;
echo $value;

$ct=time();

$ts=date('m-d-y',$ct);

echo $ts;
$datee=getdate();
echo $id=$_GET['id'];
$ct=time();

$ts=date('m-d-y g: i a',$ct);
echo"$ts";

$query = "UPDATE facatt SET Attendence='$att' WHERE id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{

    header ( "refresh:0.1; url=facatt.php");
}
else{
    echo"wrong";
}
?>