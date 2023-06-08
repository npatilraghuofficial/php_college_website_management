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
*{
    background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
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
.table{
    margin:20px;
    padding:10px;
    width:700px;
    }
   
</style>
<?php
include("owndbu.php");
error_reporting(0);
$phonen= $_POST['search'];
$query = "SELECT * FROM STUDENTDB where mb='$phonen'";
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
             <body><div class="table">
             <?php
                
             echo"<tr>
             <table>
             <tH COLSPAN='2'><a href='upexresult1.php?id=$result[appno]&pic=$result[picsource]&gen=$result[Sex]&sname=$result[studentname]&dob=$result[dob]&dept=$result[dept]&phonen=$result[mb]&email=$result[EmailId]ALIGN=CENTER'>NEXT</a></tH>
             <tr>
                 <td>ADMISSION NUMBER</td>
                 <td>".$result['appno']."</td>
            </tr> 
            <tr>
            <td>PROFILE NAME </td>
            <td>".$result['studentname']."</td></tr>
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
            <td>DEPARTMENT</td>
            <td>".$result['dept']."</td></tr> 

            <tr>
            <td>PHONE NUMBER</td>
            <td>".$result['mb']."</td></tr>

        </div>
        
        
        
        </tr>"; }
    $vcid=$_POST['vcid'];
    ?>
    <tr>
    

    </tr><?php
    }

}
else{
  echo "THIS NUMBER HAS NO APPLICATION";
}
?>

</table>



</body>
<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
<script type="text/javascript">>
function checkdelete()
{ 
 confirm ("do you want to printthe application form");
}
function print(){
    window.print();
}
</script>

<body>