<HTML>
<body>
<?php 
 include("owndbu.php");
 error_reporting(0);
  $sid=$_GET['id'];
  $_GET['pic'];
  $_GET['sname'];
  $_GET['dob'];
  $_GET['dept'];
  $_GET['phonen'];
  $_GET['email'];

 echo$pic=$_GET['pic'];

 
 
 
 
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
 border-color:yellowgreen;
 
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
     <center><h2>EXAMINATION MARKS UPDATION</h2></center>
 
     <div class="form">
 
 
     
         <tr>
             <td border="legend">Application number</td>
             <td><input type="textbox" name="apn" size="20"  value="<?php echo $_GET['id'];?>"> <input type="file" name="uploadfile"><img src="<?php echo $_GET['pic'];?>" height='100' width='100'/><input type="button" name="disp" value="please upload passport size photo"></td> </td>
              </tr>
        <tr>
             <td border="none" SIZE="20">student name</td>
             <td><input type="textbox" name="sn" size="43" id="sname" value="<?php echo $_GET['sname'];?>"></td>
         </tr>
                  <tr>
                 <td COLSPAN="2" ALIGN="CENTER">ENTER OBTAINED MARKS </td>
              </tr>

              <tr>
                 <td ALIGN="CENTER">NUMBER</td>
                 <td ALIGN="CENTER">SUBJECT-NAME</td>
                 <td ALIGN="CENTER" colspan="2">MARKS-OBTAINED</td>
              </tr>
              <tr>
             <td border="none">SUB-1</td>
             <td><input type="textbox" name="sn1" size="43" id="sn1" ></td>
             <td><input type="textbox" name="sm1" size="10" id="sm1" value=""></td>
             <td><input type="textbox" name="of1" size="10" id="of1" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-2</td>
             <td><input type="textbox" name="sn2" size="43" id="sn2" ></td>
             <td><input type="textbox" name="sm2" size="10" id="sm2" value=""></td>
             <td><input type="textbox" name="of2" size="10" id="of2" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-3</td>
             <td><input type="textbox" name="sn3" size="43" id="sn3" ></td>
             <td><input type="textbox" name="sm3" size="10" id="sm3" value=""></td>
             <td><input type="textbox" name="of3" size="10" id="of3" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-4</td>
             <td><input type="textbox" name="sn4" size="43" id="sn4" ></td>
             <td><input type="textbox" name="sm4" size="10" id="sm4" value=""></td>
             <td><input type="textbox" name="of4" size="10" id="of4" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-5</td>
             <td><input type="textbox" name="sn5" size="43" id="sn5" ></td>
             <td><input type="textbox" name="sm5" size="10" id="sm5" value=""></td>
             <td><input type="textbox" name="of5" size="10" id="of5" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-6</td>
             <td><input type="textbox" name="sn6" size="43" id="sn6" ></td>
             <td><input type="textbox" name="sm6" size="10" id="sm6" value=""></td>
             <td><input type="textbox" name="of6" size="10" id="of6" placeholder="out of"></td>
         </tr>
         <td border="none">SUB-7</td>
             <td><input type="textbox" name="sn7" size="43" id="sn7" ></td>
             <td><input type="textbox" name="sm7" size="10" id="sm7" value=""></td>
             <td><input type="textbox" name="of7" size="10" id="of7" placeholder="out of"></td>
         </tr>
        

         <td border="none">IA-MARKS</td>
             <td></td>
             <td><input type="textbox" name="im" size="10" id="sm8" value=""></td>
             <td><input type="textbox" name="iof" size="10" id="of8" placeholder="out of"></td>
         </tr>

         <td border="none"></td>
             <td><input type="hidden" name="sn8" size="43" id="sn8" ></td>
             <td COLSPAN="2"><input type="BUTTON" size="3" onclick="calc();" value="CALCULATE"></td>
             <td><input type="hidden" name="of8" size="10" id="of8" placeholder="out of"></td>
         </tr>

         <tr>
                 <td ALIGN="CENTER"></td>
                 <td ALIGN="CENTER">PERCENTAGE(%)</td>
                 <td ALIGN="CENTER" colspan="2">TOTAL</td>
              </tr>
              <TD></TD>
            
             <td><input type="textbox" name="per" size="10" id="per" placeholder=""> <input type="textbox" name="sm8" size="10" id="" value=""  placeholder="%"></td>
            </td>
             <td><input type="textbox" name="total" size="10" id="total" placeholder="OBTAINED"></td>
            <TD> <input type="textbox" name="max" size="10" id="max" placeholder="MAXIMUM"></TD>
            <TD> <input type="textbox" name="result" size="10" id="result" placeholder="RESULT"></TD>
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
    echo$sid=$_GET['id'];
 $pic=$_GET['pic'];
  $s1 = $_POST['sn1'];
  $s2 = $_POST['sn2'];
  $s3 = $_POST['sn3'];
  $s4 = $_POST['sn4'];
  $s5 = $_POST['sn5'];
  $s6 = $_POST['sn6'];
  $s7 = $_POST['sn7'];


 $m1 = $_POST['sm1'];
 $m2 = $_POST['sm2'];
 $m3 = $_POST['sm3'];
 $m4 = $_POST['sm4'];
 $m5 = $_POST['sm5'];
 $m6 = $_POST['sm6'];
 $m7 = $_POST['sm7'];

 
 echo $o1 = $_POST['of1'];
  $o2 = $_POST['of2'];
  $o3 = $_POST['of3'];
  $o4 = $_POST['of4'];
  $o5 = $_POST['of5'];
  $o6 = $_POST['of6'];
  $o7 = $_POST['of7'];

  

 echo $iof = $_POST['iof'];
  $im = $_POST['im'];
  $total = $_POST['total'];
 $per = $_POST['per'];
 echo$result= $_POST['result'];
 echo$max =$_POST['max'];

echo$pic2 = $_POST['uploadfile'];
 
 $filename = $_FILES["uploadfile"]["name"];
 $tempname = $_FILES["uploadfile"]["tmp_name"];
 $folder = "student/".$filename;
 move_uploaded_file($tempname, $folder);
 
  echo $folder;
  $query="INSERT INTO sturesult VALUES ('$id','$sid','$s1','$m1','$s2','$m2','$s3','$m3','$s4','$m4','$s5','$m5','$s6','$m6','$s7','$m7','$im','$total','$max','$per','$result','$pic',$o1,$o2,$o3,$o4,$o5,$o6,$o7,'$iof')";
 $data = mysqli_query($conn, $query);
 if($data)
 {
   ?><script>alert("application updated succesfully submitted");
   
   
   window.location.assign("examresultdisp.php?");</script>
   <?php  
    echo "application succesfully submitted"; 
     
     
 
 
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
 
<script> function calc()
{
    var o1=parseInt(document.getElementById("of1").value);
    var o2=parseInt(document.getElementById("of2").value);
    var o3=parseInt(document.getElementById("of3").value);
    var o4=parseInt(document.getElementById("of4").value);
    var o5=parseInt(document.getElementById("of5").value);
    var o6=parseInt(document.getElementById("of6").value);
    var o7=parseInt(document.getElementById("of7").value);
    var o8=parseInt(document.getElementById("of8").value);
  
   
    var s1=parseInt(document.getElementById("sm1").value);
    var s2=parseInt(document.getElementById("sm2").value);
    var s3=parseInt(document.getElementById("sm3").value);
    var s4=parseInt(document.getElementById("sm4").value);
    var s5=parseInt(document.getElementById("sm5").value);
    var s6=parseInt(document.getElementById("sm6").value);
    var s7=parseInt(document.getElementById("sm7").value);
    var s8=parseInt(document.getElementById("sm8").value);


var total= s1+s2+s3+s4+s5+s6+s7+s8;

var max= o1+o2+o3+o4+o5+o6+o7+o8;


    document.getElementById("max").value=max;

    document.getElementById("total").value=total;

var per = (total/max)*100;
document.getElementById("per").value=per;
var fail= "FAIL";
var pass= "PASS";
if(s1<35 ||s2<35||s3<35||s4<35||s5<35||s6<35||s7<35||s8<35)
{
   
    document.getElementById("result").value=fail;
}else
{
    document.getElementById("result").value=pass; 
}

}  </script>