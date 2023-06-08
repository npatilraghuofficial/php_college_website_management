<?php 
include("owndbu.php");
error_reporting(0);
 $_GET['apn'];
 $_GET['pic'];
 $_GET['sn'];
 $_GET['srn'];
 $_GET['sex'];
 $_GET['dob'];
 $_GET['fn'];
 $_GET['mn'];
 $_GET['fo'];
$_GET['mi'];
$_GET['caste'];
$_GET['city'];
$_GET['course'];
$_GET['comb'];
$_GET['year'];
$_GET['dist'];
$_GET['state'];
$_GET['pa'];
$_GET['pin'];
$_GET['em'];
$_GET['mb'];

ECHO $_GET['srn'];




?>
<html>
    <head>
<div class="logo">
    <img src="logoown2.png" width="100%" >
    </div>
    <script type="text/javascript" src="valown.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
    <body bgcolor="yellowgreen">

    <style> body{
    
    width: 1300px;
    height:1300px;
    padding:0%
    margin:0%;
    border:groove;
border-color:yellowgree;

}
.logo{

width:80%;
height:13.5%;
background-image: no-repeat;
background-repeat: no-repeat;
}
.imageupload{
border:none;
width:100px;
height:120px;
display:flex;
position:absolute;
right:57%;
}
.button{
position:absolute;
top:130px;
}
</style>
        <title>form</title>
        
     
   
<form action="" method="POST" name="appform" enctype="multipart/form-data" onsubmit="return(validate());">


<table cellpadding="3" width="25%" background-color="yellowgreen" align="center"
    cellspacing="7">
    <center><h2>application form</h2></center>

    <div class="form">


    
		<tr>
			<td border="legend">Application number</td>
			<td><input type="textbox" name="apn" size="20"  value="<?php echo $_GET['apn'];?>"> <input type="file" name="uploadfile"><img src="<?php echo $_GET['pic'];?>" height='100' width='100'/><input type="button" name="disp" value="please upload passport size photo"></td> </td>
         	</tr>
       <tr>
			<td border="none">student name</td>
			<td><input type="textbox" name="sn" size="43" id="studentname" value="<?php echo $_GET['sn'];?>"></td>
		</tr>
      
        <tr>
			<td border="none">Registration number</td>
			<td><input type="textbox" name="srn" size="43" id="sid" value="<?php echo $_GET['srn'];?>"></td>
    </tr>
    <tr>
					<td>Sex</td>
					<td>
						<input type="radio" name="sex" value="<?php echo $_GET['sex'];?>" size="10" >Male 
						<input type="radio" name="sex" value="<?php echo $_GET['sex'];?>" size="10" >Female
                    </td>
                    </tr>   
                    <tr>
							<td>DOB</td>
							<td><input type="date" name="dob" size="30" id="dob" value="<?php echo $_GET['dob'];?>"></td>
                        </tr>   
                        <tr>
			<td>Father-Name</td>
			<td><input type="textbox" name="fn" value="<?php echo $_GET['fn'];?>"
			size="60" id="fn"></td>
        </tr>      
        <tr>
				<td>Mother-Name</td>
				<td><input type="textbox" name="mn" value="<?php echo $_GET['mn'];?>"
				size="60" id="mn"></td>
            </tr>
            <tr>
			<td>Father-occupation</td>
			<td><input type="textbox" name="fo"  size="60" id="fo" value="<?php echo $_GET['fo'];?>"></td>
        </tr>
        <tr>
				<td>Monthly-Income</td>
				<td><input type="textbox" name="mi" size="60" id="mi" value="<?php echo $_GET['mi'];?>"></td>
            </tr>
            <tr>
				<td>caste</td>
				<td><input type="textbox" name="caste"  size="40" id="caste" value="<?php echo $_GET['caste'];?>"></td>
            </tr>

            <tr>
				<td>City</td>
			<td>
			<select name="city" id="City"  value="<?php echo $_GET['city'];?>">
				<option value="-1" selected>select..</option>
				<option value="BENGALURU">BENGALURU</option>
				<option value="ANDRA_PRADESH">ANDRA PRADESH</option>
		        </select></td>
        </tr>
        <tr>
            <td>course</td>
            <td>
             <select name="course" id="Course" value="<?php echo $_GET['course'];?>">
				<option value="-1" selected>select..</option>
				<option value="BCA">BCA</option>
                <option value="B.Sc">B.Sc</option>
                </select></td>
        </tr>
        <tr>		
            <td>combination</td>
            <td>
            <select name="comb"  id="combi" value="<?php echo $_GET['comb'];?>">
            <option value="BCA" selected>BCA</option>
					<option value="BcBMi" selected>BcBMi</option>
					<option value="CBBT" selected>CBBT</option>
					<option value="CZMI" selected>CZMI</option>
					<option value="CBZ" selected>CBZ</option>
					<option value="CZM" selected>CZM</option>
					<option value="CBMI" selected>CBMI</option>
					<option value="EMST" selected>EMST</option>
					<option value="EMCS" selected>EMCS</option>
					<option value="MGCS" selected>MGCS</option>
					<option value="PCM" selected>PCM</option>
					<option value="PMST" selected>PMST</option>
                    <option value="PME" selected>PME</option>
                    <option value="-1" selected>select..</option>
                    
                    </select></td>
        </tr>
        
        <tr>
<td>year</td>
<td>
    <select name="year" id="yr" value="<?php echo $_GET['year'];?>">
					<option value="-1" selected>select..</option>
					<option value="FIRST_YEAR">FIRST_YEAR</option>
                <option value="SECOND_YEAR">SECOND_YEAR</option>
                <option value="THIRD_YEAR">THIRD_YEAR</option>
                              </select></td>
        </tr>
        <tr>
        <td>disrtict</td>
        <td><select name="dist"  id="dist" value="<?php echo $_GET['dist'];?>">
        <option value="-1" selected>select..</option>
        <option value="Bagalkot">Bagalkot</option>
                <option value="Bangalore">Bangalore</option>
				<option value="Belgaum">Belgaum</option>
                <option value="Bijapura">Bijapura</option>
                <option value="Gadag">Gadag</option>
                <option value="Mysore">Mysore</option>
                <option value="Kolar">Kolar</option>
                <option value="Davanagere">Davanagere</option>
                <option value="Gulbarga">Gulbarga</option>
                <option value="Dharwad">Dharwad</option>
                <option value="Raichur">Raichur</option>
                <option value="Tumkur">Tumkur</option>
                </select></td>
        </tr> 
 <tr>
<td>state</td>
<td><select name="state" id="state"><option value="<?php echo $_GET['state'];?>" ></option>

<option value="-1" selected>select..</option>

				<option value="Karnataka">Karnataka</option>
                <option value="Andhra_Pradesh">Andhra_Pradesh</option>
				<option value="Tamil_nadu">Tamil_nadu</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Gujarath">Gujarath</option>
                <option value="New_delhi">New_delhi</option>
                <option value="Kerala">Kerala</option>
                <option value="Poducherry">Poducherry</option>    
            </select></td>
        </tr> 
        <tr>
				<td>permanent Address</td>
				<td><input type="textbox" name="pa"  size="60" id="pa" value="<?php echo $_GET['pa'];?>" ></td>
            </tr>
            <tr>
				<td>pin code</td>
				<td><input type="textbox" name="pin"  size="60" id="pin"  value="<?php echo $_GET['pin'];?>"></td>
            </tr>
            <tr>
				<td>Email id</td>
				<td><input type="textbox" name="em"  size="60" id="emailid" value="<?php echo $_GET['em'];?>"></td>
            </tr>
            <tr>
				<td>Mobile No</td>
				<td><input type="textbox" name="mb"  size="60"  id="mnum" value="<?php echo $_GET['mb'];?>"></td>
            </tr>

            <tr>
				<td>submit</td>
				<td><input type="submit" name="update"  value="update" ></td>
                <td><a href="print1formusingmobilenum.php"><b>PRINT</b></a></td>
            </tr>
     <tr></table>
     

</div>
<?php
if($_POST['update'])
{
 $apn = $_POST['apn'];
 $sn = $_POST['sn'];
 $srn= $_POST['srn'];
 $sex = $_POST['sex'];
 $dob = $_POST['dob'];
 $fn = $_POST['fn'];
 $mn = $_POST['mn'];
 $fo = $_POST['fo'];
 $mi = $_POST['mi'];
$caste = $_POST['caste'];
$city = $_POST['city'];
$course = $_POST['course'];
$comb = $_POST['comb'];
$year = $_POST['year'];

$dist = $_POST['dist'];
$state = $_POST['state'];
$pa = $_POST['pa'];
$pin = $_POST['pin'];
$em = $_POST['em'];
$mb = $_POST['mb'];
$pic = $_FILES['picsource'];

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "student/".$filename;
move_uploaded_file($tempname, $folder);

 echo $folder;
$query = "UPDATE studentdb SET STUDENTNAME='$sn' , REGNO='$srn' , SEX='$sex' , DOB='$dob' , FNAME='$fn' , MOTHERNAME='$mn' ,FATHEROCCUPATION='$fo', MI='$mi' , CASTE='$caste' , CITY='$city' , COURSE='$course' , COMB='$comb' , year='$year' , DIST='$dist' , STATE='$state' , PA='$pa' , PINCODE='$pin' , EM='$em' , MB='$mb',PICSOURCE='$folder' WHERE APPNO='$apn' ";
$data = mysqli_query($conn, $query);
if($data)
{
  ?><script>alert("application updated succesfully submitted");
  
  
  window.location.assign("dispstu.php");</script>
  <?php  
   echo "application succesfully submitted"; 
    
    

    echo"<a href='print1formusingmobilenum.php'>check your updated list here</a>";   ;

}else
{
    echo"<font color='darkred'>record not updated";
   echo $pic;

}
}else

    {
       echo"<font color='red'>click on the update button to update your details";

    }
           
?>



