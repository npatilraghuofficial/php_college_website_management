<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>jhdjhdj

<style>
*{background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);



}
table{
    border-coLLapse:collaPse;
    border:groove;
    width:100%;
    color:green;
    font-family:monospace;
    font-size:20px;
    text-align:left;
    margin:20px;
    padding:30px;
    
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

  $ct=time();

 $ts=date('d-m-yy',$ct);
 echo $ts;

$query = "SELECT * FROM facatt ";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
echo"$total";
if($total !== 0 )
{
   ?> 
   <table align="center" >
       <tr colspan="2">
       <th  > FACULTY-ID</th>
   <th > FACULTY-NAME</th>
   <th > ATTENDENCE</th>
  
</tr>
   <?php
  
  

   while($result = mysqli_fetch_assoc($data))
             {
                 ?>
            
             <?php
            
             echo"
             
           
             <tr><form action=attreport.php method=POST</tr>
             <td>".$result['id']."</td>
             <td>".$result['FacultyName']."</td>
  
             <td>'<a href=upfacattp.php?id=$result[id]?pic=$result[Pic]?fname=$result[FacultyName]=> PRESENT <a href=upfacatta.php?id=$result[id]?pic=$result[Pic]fname=$result[FacultyName]>ABSENT</td>
             <input type=hidden name=id value='".$result['id']."'> </td>  </tr>
             <input type=hidden name=id value='".$result['Pic']."'> </td>  </tr>
             

             
             
        </tr>";
    }}?>
   


</table>
<footer>
    
<input type="submit" name="submit" value="GET REPORT" class="form-control">
</footer>
    

