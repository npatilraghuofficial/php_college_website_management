<?php 
include("owndbu.php");
error_reporting(0);
?>
<html>
    <head>
<div class="logo">
    <img src="logoown2.png" width="100%" >
    </div>
   
    <link rel="stylesheet" type="text/css" href="style.css">  
</head>
    <body bgcolor="yellowgreen">

    <style>
    
     body{
    
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
 
     
   
<form action="" method="POST" name="appform"  enctype="multipart/form-data" onsubmit="return validation();">


<table cellpadding="3" width="25%" background-color="yellowgreen" align="center"
    cellspacing="7">
    <center><h2>application form</h2></center>

    <div class="form">
<tr>
			<td border="legend">Application number</td>
			<td><input type="label" name="apn" size="10" hidden  ><input type="button" name="upload file" value="upload paasport size pic less than 1MB"> <input type="file" name="uploadfile" value=""></div>

<img src="" width="100" height="100"></td>
           
         	</tr>
       <tr>
			<td border="none">student name</td>
			<td><input type="textbox" name="sn" size="43" id="studentname"  autocomplete="off" >
            <span id="sname" font="red"></span>
            </td>
            
		</tr>
        <tr>
			<td border="none">Registration number</td>
			<td><input type="textbox" name="srn" size="43" id="sid"   autocomplete="off"  >
            <span id="stid" font="red"></span>
            </td>
    </tr>
    <tr>
					<td>Sex</td>
					<td>
						<input type="radio" name="sex" value="m" size="10" required>Male 
						<input type="radio" name="sex" value="F" size="10" required>Female
                    </td>
                    </tr>   
                    <tr>
							<td>DOB</td>
							<td><input type="date" name="dob" size="30" id="dob" required></td>
                        </tr>   
                        <tr>
			<td>Father-Name</td>
			<td><input type="textbox" name="fn" 
			size="60" id="faname" autocomplete="off" ><span id="fathername" font="red"></span></td>
        </tr>      
        <tr>
				<td>Mother-Name</td>
				<td><input type="textbox" name="mn"
				size="60" id="mname"   autocomplete="off" ><span id="mothername" font="red"></span></td>
            </tr>
            <tr>
			<td>Father-occupation</td>
			<td><input type="textbox" name="fo"  size="60" id="fo"    autocomplete="off" ><span id="father-occupation" font="red"></span></td>
        </tr>
        <tr>
				<td>Monthly-Income</td>
				<td><input type="textbox" name="mi" size="60" id="moi"   autocomplete="off" ><span id="monthly-income" font="red"></span></td>
            </tr>
            <tr>
				<td>caste</td>
				<td><input type="textbox" name="caste"  size="40" id="stcaste"   autocomplete="off" ><span id="student-caste" font="red"></span></td>
            </tr>

            <tr>
				<td>city</td>
			<td>
			<select name="city" id="City" required >
				<option value="-1" selected>select..</option>
				<option value="BENGALURU">BENGALURU</option>
				<option value="ANDRA_PRADESH">ANDRA PRADESH</option>
		        </select></td>
        </tr>
        <tr>
            <td>course</td>
            <td>
             <select name="course" id="Course" required >
				<option value="-1" selected>select..</option>
				<option value="BCA">BCA</option>
                <option value="B.Sc">B.Sc</option>
                </select></td>
        </tr>
        <tr>		
            <td>combination</td>
            <td>
            <select name="comb"  id="combi"  required >
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
    <select name="year" id="yr" required>
				<option value="-1" selected>select..</option>
				<option value="FIRST_YEAR">FIRST_YEAR</option>
                <option value="SECOND_YEAR">SECOND_YEAR</option>
                <option value="THIRD_YEAR">THIRD_YEAR</option>
                              </select></td>
        </tr>
        <tr>
        <td>disrtict</td>
        <td><select name="dist"  id="dist" required>
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
<td><select name="state" id="state" required>
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
				<td><input type="textbox" name="pa"  size="60" id="padd"   autocomplete="off" ><span id="parmanent-address" font="red"></span></td>
            </tr>
            <tr>
				<td>pin code</td>
				<td><input type="textbox" name="pin"  size="60" id="pinc"  autocomplete="off" maximumvalue="6" ><span id="pincode" font="red"></span></td>
            </tr> 
            <tr>
				<td>Email id</td>
				<td><input type="textbox" name="em"  size="60" id="emailid"   autocomplete="off" ><span id="emaili" font="red"></span></td>
            </tr>
            <tr>
				<td>Mobile No</td>
				<td><input type="textbox" name="mb"  size="60"  id="mnum"   autocomplete="off" ><span id="mobnum" font="red"></span></td>
            </tr>

            <tr>
				<td>submit</td>
				<td><input type="submit" name="submit"  ></td>
            </tr>
            <tr>
				<td></td>
            </tr>
            
     <tr></table>
     

</div>
<?php
if($_POST['submit'])
    {
        $apn = $_POST['apn'];
        $sn = $_POST['sn'];
        $srn = $_POST['srn'];
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
        $dist =$_POST['dist'];
        $state = $_POST['state'];
        $pa = $_POST['pa'];
        $pin = $_POST['pin'];
        $em = $_POST['em'];
        $mb = $_POST['mb'];
      /**file upload images */
      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "student/".$filename;
      move_uploaded_file($tempname, $folder);

        $query = "INSERT INTO studentdb VALUES ('$apn','$sn','$srn','$sex','$dob','$fn','$mn','$fo','$mi','$caste','$city','$course','$comb','$year','$dist','$state','$pa','$pin','$em','$mb','$folder','','')";
$data = mysqli_query($conn, $query);

if($data)
{
   
    ?>
    
       <script>alert("application succesfully submitted","url=printstu.php")
    
    window.location.assign("dispstu.php");</script>;
       
       <?php  
       header ( "refresh:0.1; url=printstu.php" ); 
       
   
    
}
else{
    

    echo"failed details already present please try again!!!!";
    
    header ( "refresh:0.1; url=register.php" );
}


         }
           
?>

<script>  
 function validation() {

    var stname = document.getElementById('studentname').value;
    var studentid = document.getElementById('sid').value;
    var faname = document.getElementById('faname').value;
    var mname = document.getElementById('mname').value;

    var foccupation = document.getElementById('fo').value;
    var moincome = document.getElementById('moi').value;
    var scaste = document.getElementById('stcaste').value;
    var padd = document.getElementById('padd').value;
    var pincod = document.getElementById('pinc').value;
    

    var emaili = document.getElementById('emailid').value;
    var mobilenum = document.getElementById('mnum').value;

    var correct_way=/^[A-Za-z]+$/;
    var correct_way2=/^[0-9A-Za-z]+$/;

//studentname
if (stname == "") 
             {
             document.getElementById('sname').innerHTML = "<br>**please fill name";
             return false;
             }  
             if(!isNaN(stname))
            {
                document.getElementById('sname').innerHTML ="<br>**please enter only alphabets";
                return false;
            }

           if(stname.match(correct_way))
           true;
           else
           {
            document.getElementById('sname').innerHTML ="<br>**please enter only string value";
            return false;
           }

                          
         if((stname.length <= 2) || (stname.length > 30))
            {
                document.getElementById('sname').innerHTML="<br>**name length must be between 2-30";
                return false;
            }
            if((stname.length >= 3) || (stname.length <= 30))
            {
                document.getElementById('sname').innerHTML="";
             
            }
             
 //student id
        if (studentid == "") 
          {
        document.getElementById('stid').innerHTML = "<br>**please fill correct student id";
        return false;
         }

       if((studentid.length < 5) || (studentid.length > 10))
         {
           document.getElementById('stid').innerHTML="<br>**name length must be between 5-10";
           return false;
         }
         
         if((studentid.length >= 5) || (studentid.length < 10))
         {
           document.getElementById('stid').innerHTML="";
           
         }
         
         if(studentid.match(correct_way2))
           true;
           else
           {
            document.getElementById('stid').innerHTML ="<br>***please enter correct format";
            return false;
           }
 //father name            
     
       if (faname == "") 
        {
        document.getElementById('fathername').innerHTML = "<br>**please enter father name";
        return false;
         }

         if(!isNaN(faname))
         {
             document.getElementById('fathername').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(faname.match(correct_way))
           true;
           else
           {
            document.getElementById('fathername').innerHTML ="<br>**please enter only string value";
            return false;
           }

       if((faname.length <= 2) || (faname.length > 30))
         {
           document.getElementById('fathername').innerHTML="<br>**name length must be between 3-30";
           return false;
         }
         if((faname.length >= 3) || (faname.length < 30))
         {
           document.getElementById('fathername').innerHTML="";
       
         }
       
//MOTHer name    


       if (mname == "") 
          {
        document.getElementById('mothername').innerHTML = "<br>**please enter mother name";
        return false;
         }
         if(!isNaN(mname))
         {
             document.getElementById('mothername').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(mname.match(correct_way))
         true;
         else
         {
          document.getElementById('mothername').innerHTML ="<br>**please enter only string value";
          return false;
         }

         
       if((mname.length <= 2) || (mname.length > 30))
         {
           document.getElementById('mothername').innerHTML="<br>**name length must be between 3-30";
           return false;
         }

             
       if((mname.length >= 3) || (mname.length < 30))
         {
           document.getElementById('mothername').innerHTML="";
           
         }
            
//FATHER OCCUPATION   

        if (foccupation == "") 
        {
        document.getElementById('father-occupation').innerHTML = "<br>**please enter correct father ocuupation details";
        return false;
         }
         if(!isNaN(foccupation))
         {
             document.getElementById('father-occupation').innerHTML ="<br>**please enter only alphabets";
             return false;
         }
         if(foccupation.match(correct_way))
         true;
         else
         {
          document.getElementById('father-occupation').innerHTML ="<br>**please enter only string value";
          return false;
         }

       if((foccupation.length < 5) || (foccupation.length > 30))
         {
           document.getElementById('father-occupation').innerHTML="<br>**name length must be between 5-30";
           return false;
         }
         
       if((foccupation.length >= 5) || (foccupation.length < 30))
         {
           document.getElementById('father-occupation').innerHTML="";
       
         }
            
//MONTHLY INCOME
       if (moincome == "") 
       {
       document.getElementById('monthly-income').innerHTML = "<br>**please enter correct monthly- income details";
       return false;
        }
        
     if(isNaN(moincome))
     {
         document.getElementById('monthly-income').innerHTML ="<br>**please enter numbers only not alpha characters";
         return false;
     }

      if((moincome.length < 4) || (moincome.length > 10))
       {
          document.getElementById('monthly-income').innerHTML="<br>**name length must be between 4-10";
          return false;
       }
       if((moincome.length >= 4) || (moincome.length < 10))
       {
          document.getElementById('monthly-income').innerHTML="";
         
       }
//CASTE
      if (scaste == "") 
       {
      document.getElementById('student-caste').innerHTML = "<br>**please enter caste details";
      return false;
       }
       if(!isNaN(scaste))
       {
           document.getElementById('student-caste').innerHTML ="<br>**please enter only alphabets";
           return false;
       }
       if(scaste.match(correct_way))
       true;
       else
       {
        document.getElementById('student-caste').innerHTML ="<br>**please enter only string value";
        return false;
       }

     if((scaste.length < 5) || (scaste.length > 15))
       {
         document.getElementById('student-caste').innerHTML="<br>**name length must be between 5-15";
         return false;
       }
       if((scaste.length >= 5) || (scaste.length < 15))
       {
         document.getElementById('student-caste').innerHTML="";

       }
//ADDRESS
     if (padd == "") 
       {
      document.getElementById('parmanent-address').innerHTML = "<br>**please enter permanent details";
      return false;
       }
     if((padd.length < 6) || (padd.length > 40))
      {
         document.getElementById('parmanent-address').innerHTML="<br>**name length must be between 6-40";
         return false;
       }
       if((padd.length >= 6) || (padd.length < 40))
      {
         document.getElementById('parmanent-address').innerHTML="";
      
       }

//PINCODE
     if (pincod == "") 
     {
     document.getElementById('pincode').innerHTML = "<br>**please enter pincode number";
     return false;
     }

     if(isNaN(pincod))
     {
         document.getElementById('pincode').innerHTML ="<br>**please enter numbers only not alpha characters";
         return false;
     }
    if(pincod.length <6)
    {
        document.getElementById('pincode').innerHTML="<br>**name length must be 6";
        return false;
    }
    if(pincod.length >=6)
    {
        document.getElementById('pincode').innerHTML="";
     
    }
//email
    if (emaili == "") 
    {
    document.getElementById('emaili').innerHTML = "<br>**please enter email id followed by @";
    return false;
    }
    
    if(emaili.indexOf('@') <= 0)
    {
        document.getElementById('emaili').innerHTML = "<br>**please enter valid email id followed by @";
    return false;
    }

   
    if(emaili.indexOf('gmail') <= 0)
    {
        document.getElementById('emaili').innerHTML = "<br>**missing *.gmail";
    return false;
    }

    if(emaili.indexOf('.com') <= 0)
    {
        document.getElementById('emaili').innerHTML = "<br>**missing *.com";
    return false;
    }
   
   
   

    if((emaili.length >= 5) || (padd.length < 20))
      {
         document.getElementById('emaili').innerHTML="";
      
       }


 //mobile num
   if (mobilenum == "") 
    {
   document.getElementById('mobnum').innerHTML = "<br>**please enter mobile number";
   return false;
   }
   
   if(isNaN(mobilenum))
   {
       document.getElementById('mobnum').innerHTML ="<br>**please enter numbers only not alpha characters";
       return false;
   }
   if(mobilenum.length < 10) 
   {
       document.getElementById('mobnum').innerHTML="<br>**name length must be 10 digits number";
       return false;
   }
   if(mobilenum.length = 10) 
   {
       document.getElementById('mobnum').innerHTML="<br>";
     
   }

       

    

}

    
    
    </script>
