

<html>
<body>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
<form action="" method="POST">
<div class="search">
<font color="green"bg- color="succes"> ENTER YOUR MOBILE NUMBER</font><input type="text" PLACEHOLDER="" name="search" class="form-control">
    <input type="submit" name="submit" align="center" class="btn btn-dark">
</div>
</head>
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
tr:nth-child(even) { background-color: lightgreen;}

    *{
        background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
</style>

<?php
include("owndbu.php");
error_reporting(0);
$phonen= $_POST['search'];
$query = "SELECT * FROM facultydb where PhoneNumber='$phonen'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !== 0 )
{
    ?>    <?php
    if($_POST['submit']) 
    { 
         while($result = mysqli_fetch_assoc($data))
             {
                 ?>
             <body> <form action="upsal.php" method="POST"
             <?php
                
             echo"<tr>
             <table>

             <tr>
                 <td>EMPID</td>
                 <td>".$result['id']."</td>
            </tr>

         
            <tr>
            <td>PROFILE NAME </td>
            <td>".$result['FacultyName']."</td></tr>
        </tr>
        </tr>
            <tr>
              <td>PROFILE PHOTO </td>
             <td><img src='".$result['Pic']."' height='100' width='100'/></td>
             
             </tr>
               
             <tr>
                <td>DATE OF BIRTH </td>
                <td>".$result['DOB']."</td></tr>
            </tr>
            
            <tr>
            <td>DEPARTMENT</td>
            <td>".$result['Department']."</td></tr> 
            <tr>
            <td>FACULTY-SALARY</td>
            <td>INR_".$result['Salary']."<a href=upsal.php?id=$result[id]&salary=$result[Salary]&fname=$result[FacultyName]&pic=$result[Pic]>UPDATE</a> </td>
            
       </tr>
         <tr>
            <td>EMAIL-ID</td>
            <td>".$result['EmailId']."</td>
       </tr>

       
     <tr>
            <td>EMAIL-ID</td>
            <td>".$result['EmailId']."</td>
       </tr>

        </div>
        <td><a href='upfac1.php?id=$result[id]&pic=$result[Pic]&gen=$result[Sex]&fname=$result[FacultyName]&dob=$result[DOB]&dept=$result[Department]&phonen=$result[PhoneNumber]&email=$result[EmailId]'>EDIT/UPDATE FORM</a></td>
        
        
        </tr>";
    }?>
    <tr>
 

    </tr><?php
    }

}
else{
  echo "THIS NUMBER HAS NO DATA IN OUR DATABASE";
}
?>

</table>

</body>





