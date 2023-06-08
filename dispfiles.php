<!DOCTYPE html>
<html>
    <head>

</head>
<title> download assaignment </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <form action="" method="POST">

</head>
<style>
    	*{
			background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
    .search{
        margin:auto;
        border:10px;
        
    }
td {
    padding:10px;
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

$query = "SELECT * FROM assgfiles";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total !== 0 )
{
    ?>   <TABLE>
    <TH>ID<TH>
    <TH>FILENAME<TH>
    <TH>ACTION<TH> </TR><?php
    
         while($result = mysqli_fetch_assoc($data))
             {
                 ?>
             <body><div id="HTMLtoPDF">
             <?php
               
             echo"<tr>
           
              <td>".$result['id']."</td>
                 <td>".$result['NAME']."</td>
                 
              <td ><a href=".$result['file']." >".$result['file']." <INPUT TYPE=BUTTON  class=btn-btn-primary NAME=BUTTON VALUE=DOWNLOAD> </a></td>
            </tr>
   </div>
       
        
        </tr>";
    }
    ?>
    <tr>
  
    </tr><?php
    

}
else{
  echo "THIS NUMBER HAS NO APPLICATION";
}
?>
</table>



    

       