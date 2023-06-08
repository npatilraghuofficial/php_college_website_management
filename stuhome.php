
<html>
<title></title>
<head><CENTER><FONT COLOR="GREEN"><H2>STUDENT-PORTAL</H2></FONT></CENTER></head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/style.css"/>
<style> 



.search{
        margin:auto;
        border:10px;
        
    }
td {
    padding:15px;
}
table{
    border-coLLapse:collaPse;
    border:groove;
    width:100%;
    color:green;
    font-family:monospace;
    font-size:20px;
    text-align:left;
}
th{
    background-color: #4caf50;
    color:white;

}
tr:hover{
    tr:nth-child(even) { background-color: lightpink;}
}
tr:nth-child(even) { background-color: lightgrey;}
.profile{
    width:1520px;
    padding:50px;
    align:center;
    position:relative;
}
.faculty{
    border:groove;
  
    width:AUTO;
    height:auto;}

    .video{ display:flex;
    float:right;
    padding:15px;
    position:relative;
    margin-top:5px;
    margin-right:25px}

    .news{
        width:800px;
        height:600;
        display:left;
        position:relative;
        border:groove;
    }
    .news.newspart{
        float:left;
     
    }
 </style>
<?php

include("owndbu.php");
error_reporting(0);
session_start();





$phonenumber= $_SESSION['phonenumber'];


$query ="SELECT * FROM studentdb where mb='$phonenumber'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !== 0 )
{
    
  
         while($result = mysqli_fetch_assoc($data))
             {
                 ?>
             <body><div class="profile">
             <?php
                
             echo"<tr>
             <table>

             <tr>
             <td></td>
             <TR>
             <td><a href=svclasslogin.php?id=$result[appno]&srn=$result[regno]&phonen=$result[mb]&pic=$result[picsource]&gen=$result[sex]&sname=$result[studentname]&dob=$result[dob]&phonen=$result[mb]&email=$result[em]'><input type=submit name=submit value=JOIN-VIRTUAL-CLASS></a></td>
             <td><a href=examresultdisp.php?id=$result[appno]&srn=$result[regno]&phonen=$result[mb]&pic=$result[picsource]&gen=$result[sex]&sname=$result[studentname]&dob=$result[dob]&phonen=$result[mb]&email=$result[em]'><input type=submit name=submit value=DISPLAY-RESULT></a></td>
             </tr>
             <tr>
                 <td>STU-ADMISSION-ID</td>
                 <td>".$result['appno']."</td>
            </tr>
            <tr>
            <td>STU-ID</td>
            <td>".$result['regno']."</td>
       </tr>


         
            <tr>
            <td>STUDENT-NAME </td>
            <td>".$result['studentname']."</td></tr>
        </tr>


        <tr>
        <td>GENDER </td>
        <td>".$result['sex']."</td></tr>
    </tr>


           </tr>
            <tr>
              <td>PROFILE PHOTO </td>
             <td><img src='".$result['picsource']."' height='100' width='100'/></td>
             
             </tr>
               
             <tr>
                <td>DATE OF BIRTH </td>
                <td>".$result['dob']."</td></tr>
            </tr>
            
            <tr>
            <td>PHONE NUMBER</td>
            <td>".$result['mb']."</td></tr>

            
            <tr>
            <td>EMAIL-ID</td>
            <td>".$result['em']."</td>
       </tr>

        </div>
        <td><a href='upfac1.php?></a></td>
        
        
        </tr>";
        
        
    }?>
    <tr>
  
</div>
    </tr><?php
    

}



$phonenumber=$_POST['phonenumber'];
echo"<center><font color=black><h1>welcome</font><font color=green> $_SESSION[uname];</font></h2><center>"; 
?>
<form action="scclasslogin.php" method="POST">
<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div>
			<ul class="main-menu">
				<li ><a href="fachome.php"><font color="black">Home-Page</a></li>
				<li><a href="eventsforstu.php"><font color="black">EVENTS</a></li>
				<li><a href="stulogin.php"><font color="black">logout</a></li>
               
		</div>
    </nav>
    