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
background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
</style>


<?php
include("owndbu.php");
error_reporting(0);
$mobilenum = $_POST['search'];
$query = "SELECT * FROM  STUDENTDB where mb='$mobilenum'";
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
             <body><div id="HTMLtoPDF">
             <?php
                
             echo"<tr>
             <table>
             

             <tr>
             <td><button onclick=print()>printpage</button></td>
             <td><a href='upstu.php?apn=$result[appno]&pic=$result[picsource]&sn=$result[studentname]&srn=$result[regno]&sex=$result[sex]&dob=$result[dob]&fn=$result[fname]&mn=$result[mothername]&fo=$result[fatheroccupation]&mi=$result[mi]&caste=$result[caste]&course=$result[course]&comb=$result[comb]&year=$result[year]&dist=$result[dist]&state=$result[state]&pa=$result[pa]&pin=$result[pincode]&em=$result[em]&mb=$result[mb]'>EDIT/UPDATE FORM</a></td>
             </tr>

             <tr>
                 <td>APPLICATION NUMBER</td>
                 <td>".$result['appno']."</td>
            </tr>
            <tr>
              
            <td><a href=# onclick=HTMLtoPDF()>Download PDF</a></td>
            </tr>

       
            <tr>
              <td>APPLICANT PHOTO </td>
             <td><img src='".$result['picsource']."' height='100' width='100'/></td>
             
                </tr>
                <tr>
                <td>STUDENT NAME </td>
                <td>".$result['studentname']."</td></tr>
                </tr>
            

                <tr>
                <td>STUDENT REGISTER NUMBER </td>
                <td>".$result['regno']."</td></tr>
            </tr>

            

            
            <tr>
            <td>SEX</td>
            <td>".$result['sex']."</td></tr>  </tr>

            <tr>
            <td>DATE OF BIRTH</td>
            <td>".$result['dob']."</td></tr>

            <tr>
            <td>FATHER NAME</td>
            <td>".$result['fname']."</td></tr>      
            
            <tr>
            <td>MOTHER NAME</td>
            <td>".$result['fname']."</td></tr>   

            <tr>
            <td>FATHER OCCUPATIOIN</td>
            <td>".$result['fatheroccupation']."</td></tr>  

            <tr>
            <td> MONTHLY INCOME</td>
            <td>".$result['mi']."</td></tr>        
            
            <tr>
            <td>CASTE</td>
            <td>".$result['caste']."</td></tr>

            <tr>
            <td>CITY</td>
            <td>".$result['city']."</td></tr>

            <tr>
            <td>COURSE</td>
            <td>".$result['course']."</td></tr>   
            <tr>
            <td>COMBINATION</td>
            <td>".$result['comb']."</td></tr>     
            <tr>
            <td>YEAR</td>
            <td>".$result['year']."</td></tr>
            <tr>
            <td>DISTRICT</td>
            <td>".$result['dist']."</td></tr>
            <tr>
            <td>STATE</td>
            <td>".$result['state']."</td></tr>
            <tr>
            <td>RESIDENTIAL ADDRESS</td>
            <td>".$result['pa']."</td></tr>   
            <tr>
            <td>PINCODE</td>
            <td>".$result['pincode']."</td>
            </tr> 

            <tr>
            <td>EMAIL-ID</td>
            <td>".$result['em']."</td></tr>   
            <tr>
            <td>MOBILE NUMBER</td>
            <td>".$result['mb']."</td></tr> 
            
            
                
                
       
       
       
            </div>
        
        
        </tr>";
    }?>
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