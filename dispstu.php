<style>

*{background-image: linear-gradient(to top, #dfe9f3 0%, white 100%);

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
$query = "SELECT * FROM STUDENTDB";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total != 0 )
{
    ?>
    <table border="dotted">
    
    <th>APPLICATION NUMBER</th>
    <th>APPLICANT PHOTOS</th>

    <th>STUDENT NAME</th>
    <th>REGISTER NUMBER</th>
    <th>SEX</th>
    <th>DATE OF BIRTH</th>
    <th>FATHER NAME</th>
    <th>MOTHER NAME</th>
    <th>FATHER OCCUPATION</th>
    <th>MONTHLY INCOME</th>
    <th>CASTE</th>
    <th>CITY</th>
    <th>COURSE</th>
    <th>COMBINATION</th>
    <th>YEAR</th>
    <th>DISTRICT</th>
    <th>STATE</th>
    <th>RESIDENTIAL ADDRESS</th>
    <th>PINCODE</th>
    <th>EMAIL ID</th>
    <th>MOBILE NUMBER</th>
    <th colspan ="3">OPERATIONS</th>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
       
        <td>".$result['appno']."</td>
        <td><img src='".$result['picsource']."' height='100' width='100'/></td>
   

        <td>".$result['studentname']."</td>
        <td>".$result['regno']."</td>
        <td>".$result['sex']."</td>
        <td>".$result['dob']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['mothername']."</td>
        <td>".$result['fatheroccupation']."</td>
        <td>".$result['mi']."</td>
        <td>".$result['caste']."</td>
        <td>".$result['city']."</td>
        <td>".$result['course']."</td>
        <td>".$result['comb']."</td>
        <td>".$result['year']."</td>
        <td>".$result['dist']."</td>
        <td>".$result['state']."</td>
        <td>".$result['pa']."</td>
        <td>".$result['pincode']."</td>
        <td>".$result['em']."</td>
        <td>".$result['mb']."</td>
        <td><a href='upstu.php?apn=$result[appno]&pic=$result[picsource]&sn=$result[studentname]&srn=$result[regno]&sex=$result[sex]&dob=$result[dob]&fn=$result[fname]&mn=$result[mothername]&fo=$result[fatheroccupation]&mi=$result[mi]&caste=$result[caste]&course=$result[course]&comb=$result[comb]&yr=$result[yr]&dist=$result[dist]&state=$result[state]&pa=$result[pa]&pin=$result[pincode]&em=$result[em]&mb=$result[mb]'>EDIT</a></td>
        <td><a href='delstu.php?apn=$result[appno]' onclick='checkdelete()'>DELETE</a></td>
        </tr>";
    }

}
else{
    echo"table has no records";
}




?>

</table>
<script>
function checkdelete()
{ 
 confirm ("are you sure ?? do you really want to delete the record you cannot undo the action");
}
</script>