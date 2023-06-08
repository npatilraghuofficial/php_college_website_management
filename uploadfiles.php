
<html>
   <style>
   *{
			background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
<?php
 error_reporting(0);
 include("owndbu.php");
 $n=$_POST['n'];
?>


<!DOCTYPE html>
<html>
<head><FONT COLOR="RED"> Note* <BR> UPLOAD ONLY PDF FILE(.PDF EXTENTION  AND FILE NAME WITHOUT INTERSPACE</FONT> </head>
<body>
<form method="POST" enctype="multipart/form-data" >

<?php 
   if($_POST['submit'])
   {
      
            $dn=$_POST['dn'];
           echo $filename ;
          
      $filename = $_FILES["file"]["name"];
      $tempname = $_FILES["file"]["tmp_name"];
      $folder = "assg/".$filename;

      move_uploaded_file($tempname, $folder);
      $query = "INSERT INTO assgfiles VALUES ('$id','$folder','$dn')";
        $data = mysqli_query($conn, $query);
        
if($data)
{
   
    ?>
    
       <script>confirm("file uploaded succesfully","url=printstu.php")
    
    window.location.assign("dispfiles.php");</script>;
       
       <?php  
       header ( "refresh:0.1; url=displayfiles.php" ); 
       
   
    
}
else{
    

    echo"failed details already present please try again!!!!";
    
    header ( "refresh:0.1; url=register.php" );
}


         }
           
?>
          echo"
          <TABLE>
       <td> Document Name<input type=textbox name=dn id=fn required class=form-control></br></td> 
       
        <td> Document <input type=file name=file id=file class=form-control></br> </td>
        <td>   <a href='uploadfiles.php?id=$i&file=$_POST[file]'>upload</a></td>


         </table>"
       
         
      
    
     
     
        <INPUT TYPE="SUBMIT" NAME="submit" VALUE="UPLOAD">
    </FORM>
  


