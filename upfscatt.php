<?php 
include("owndbu.php");
error_reporting(0);

$query="UPDATE FACATT SET Attendence='$_POST[att]' WHERE id='$_POST[id]' ";

mysqli_query($con,$query);
{
    header("refresh:2; url=index.php");
    else
    echo"not updated";
}