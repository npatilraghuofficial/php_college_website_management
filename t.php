<?php 
include("owndbu.php");
error_reporting(0);
$query="SELECT * FROM person";

$records=mysqli_query($conn,$query);

?>
<table>
<tr>
<TH>NAME</tH>
<th>SALARY></TH>
</tr>
<?php 
while($row =mysqli_fetch_array($records))
{

  
    echo"<tr>
    <form action=tup.php method=POST>
    <td><input type=text name=pname value='".$row['Name']."'></td>; 
   <td><input type=text name=salary value='".$row['Salary']."'></td>;
    <td><input type=hidden  name=id  value='".$row['ID']."'</td>;
    <td><input type=SUBMIT name=submit </tr>";

}
