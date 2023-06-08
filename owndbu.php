<?php
$username = "frsiv_25887008";
$password = "Npatilraghu#rnp";
$servername = "sql311.freesite.vip";
$database = "frsiv_25887008_gsc2";
$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo"";
    }
else
{
    die("not connected".mysqli_connect_error());
}
    
    ?>
