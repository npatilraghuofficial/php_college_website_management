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

</head>
<style>

</style>


<?php
include("owndbu.php");
error_reporting(0);
session_start();
$phonenumber= $_SESSION['phonenumber'];
echo $_SESSION['phonenumber'];

$query ="SELECT * FROM facultydb where PhoneNumber='$phonenumber'";
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
                 <td>EMPID</td>
                 <td>".$result['id']."</td>
            </tr>

         
            <tr>
            <td>PROFILE NAME </td>
            <td>".$result['FacultyName']."</td></tr>
        </tr>


        <tr>
        <td>GENDER </td>
        <td>".$result['Sex']."</td></tr>
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
            <td>PHONE NUMBER</td>
            <td>".$result['PhoneNumber']."</td></tr>

            
            <tr>
            <td>EMAIL-ID</td>
            <td>".$result['EmailId']."</td>
       </tr>

        </div>
        <td><a href='upfac1.php?id=$result[id]&pic=$result[Pic]&gen=$result[Sex]&fname=$result[FacultyName]&dob=$result[DOB]&dept=$result[Department]&phonen=$result[PhoneNumber]&email=$result[EmailId]'></a></td>
        
        
        </tr>";
    }?>
    <tr>
  
</div>
    </tr><?php
    

}
else{
  echo "THIS NUMBER HAS NO RECORD IN OUR DATABASE";
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