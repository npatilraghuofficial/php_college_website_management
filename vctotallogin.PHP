<style>
    	*{
			background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
td {
    padding:15px;
}
table{
    border-coLLapse:collaPse;
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
$query = "SELECT * FROM vstulogin;

";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total != 0 )
{
    ?>
    <table border="dotted">
    <th>VC-CLASS ID-NUMBER</th>
    
    <th>APPLICANT PHOTOS</th>
    <th>Addmission NUMBER</th>

    <th>STUDENT NAME</th>
    <th>MOBILE NUMBER</th>
  
  

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
        <tr><form action=VCATTREPORT.php method=POST</tr>
        <td>".$result['id']."</td>
        <td><img src='".$result['pic']."' height='100' width='100'/></td>
        <td>".$result['sid']."</td>
        <td>".$result['name']."</td>
         <td>".$result['phonenumber']."</td>
     
        <td><a href='logoutvcf.PHP?sid=$result[sid]&pic=$result[pic]&name=$result[name]&phonenumber=$result[phonenumber]'onclick='checkPRESENT()'>LOGOUT</a></td>
        <td><a href='?sid=$result[sid]&pic=$result[pic]&name=$result[name]&phonenumber=$result[phonenumber]' onclick='checkABSENT()'></a></td>
        </tr>";header ( "refresh:10; url=virtualclassroom.php");
    }

}
else{
    ?><SCRIPT>alert("NO STUDENTS LOGGED-IN YET")</SCRIPT><?PHP
    header ( "refresh:0.1; url=virtualclassroom.php" ); 
}




?>

</table>

