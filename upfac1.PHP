
<?php 

      include("owndbu.php");
      error_reporting(0);
       $_GET['id'];
       $_GET['pic'];
       $_GET['fname'];
       $_GET['dob'];
       $_GET['dept'];
       $_GET['phonen'];
       $_GET['email'];
       $_GET['gen'];
       
      echo $_GET['gen'];

    ?>
    

<html>


    <title>UPDATE  FACULTY</title>
    <HEAD>
        <H2><CENTER>UPDATE FACULTY PROFILE</CENTER><H2><BR>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<head>
    </head>
    <style>
    *{
        background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



}
    <style>
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        
        body{
       	font-family: 'Rubik', sans-serif;
        }
        .fa{
            width:700px;
            height:auto;
            border:groove;
           margin-left:35%;
        }.img{
            margin-left:80%;
            border:groove;
            float:right;
            position:relative;
            margin-bottom:15px;
            padding:10px;
        }

    .left{
        margin-top:-120px;
        border:line;
        height:170px;
        padding:100px;
    }
        </style>
    <BODY>
        <div class="fa">
        <form  name="facreg" action="" method="post" width="200px" enctype="multipart/form-data">
       
        <div class="id">   
        <i class="fas fa-userid"></i>  
        EMP ID <input type="textbox" name="id" id="id" value="<?php echo $_GET['id'];?>" class="form-control"> <br>
        <div class="left"><H5> <FONT COLOR="RED">*NOTE </H5<BR><H6>NEW IMAGE MUST BE UPDATED <br>IF ANY CHANGES MADE TO EXISTING DATA</FONT></h6>
        <div class="img"><img src="<?php echo $_GET['pic'] ?>" width="100px" height="110px">
        </div></div>
       </br>
      </div>
      <div class="pic">   
        <i class="fas fa-image"></i>  
       
        photo<input type="file" name="uploadfile" id="uploadfile" class="form-control"><br>
      
    </div>


      
        <div class="name">   
        <i class="fas fa-user"></i>  
        Faculty Name <input type="textbox" name="fname" id="fn" value="<?php echo $_GET['fname'];?>" class="form-control"></br>
      </div>
      <DIV CLASS="sex">
      <i class="fas fa-venus"></i>  
      SEX &nbsp <FONT COLOR="Blue"><h5>EXISTING-GENDER DETAILS &nbsp<b><?php echo $_GET['gen'];?></FONT> <label class="radio-inline">
      <input type="radio" name="gen"  size="2" id="ln1" value="MALE" >MALE</label>
      <label class="radio-inline"><input type="radio" name="gen" size="2" id="ln2" value="FEMALE" >FEMALE</label><br>
      </div>
      
      
      <div class="date">   
        <i class="fas fa-calendar"></i>  
        DOB <input type="date" name="dob" id="dob" value="<?php echo $_GET['dob'];?>" class="form-control"> </BR>
    </div>
  

    <div class="dept">   
        <i class="fas fa-building"></i>     

       
       DEPARTMENT<FONT COLOR="GREEN"><h5>CURRENT-DEPARTMENT &nbsp<b><?php echo $_GET['dept'];?></FONT> <select name="dept" id="dept" > 
             <option value="<?php echo $_GET['dept'];?>"></option>
            <option value="COMPUTER-SCIENCE">COMPUTER SCIENCE</option>
            <option value="LIFE-SCIENCE">LIFE SCIENCE</option>
            <option value="PHYSICAL-SCIENCE">PHYSICAL SCIENCE</option>
        </select>
       </br>
       <BR>

    </div>

    <div class="phonenumber">   
        <i class="fas fa-phone"></i>  
        Phone Number<input type="textbox" name="phonen" id="pn" value="<?php echo $_GET['phonen'];?>"class="form-control"></br>
    </div>

   

    <div class="email">    
        <i class="fas fa-at"></i>  
       Email-Id</font><input type="textbox" name="email" id="em" value="<?php echo $_GET['email'];?>"class="form-control"></br>
    </div>

    <div class="submit">    
        <i class="fas fa-go"></i>  
       <input type="submit"  color="red" name="update"value="UPDATE" id="update" class="form-control"></br>
    </div>
     <div>
        </form>
      
      <?PHP  
      if($_POST['update'])
      {
          $id=$_POST['id'];
          $pic=$_POST['pic'];        
          $fname=$_POST['fname'];
          $gen=$_POST['gen'];
          $dob=$_POST['dob'];
          $dept=$_POST['dept'];
          $phonen=$_POST['phonen'];
          $email=$_POST['email'];

          $filename = $_FILES["uploadfile"]["name"];
          $tempname = $_FILES["uploadfile"]["tmp_name"];
          $folder = "faculty/".$filename;
          move_uploaded_file($tempname, $folder);
          echo $gen;      
         
          $ts=time();
          
$query = "UPDATE facultydb SET FacultyName='$fname' , Sex='$gen', DOB='$dob' , Department='$dept' , PhoneNumber='$phonen', EmailId='$email' , PIC='$folder' WHERE id='$id'";
$data = mysqli_query($conn, $query);
if($data)
{
    ?>
    <script>alert("FACULTY PROFILE UPDATETD SUCCESFULLY")</script>
    <?php
    header ("refresh:0.1; url=askadmin.php");
}else
{
    echo"<font color='darkred'> record not updated"; ?>
    <script>alert("UPDATE FAILED!!!")</script>
    <?php
  

}
}else

    {
       
    }
           
?>




      
      
      
     </body>