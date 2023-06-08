<html>

<style>
*{background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
</style>

<?php
include("owndbu.php");
error_reporting(0);

       $_GET['id'];
   
       $_GET['salary'];

      
    ?>
    <FORM ACTION="" method="POST">
       ENTER NEW  SALARY DETAILS <input type="textbox" AUTOCOMPLETE=OFF value="<?php echo $_GET['salary'];?>" name="salary">
       <INPUT TYPE="SUBMIT" value="update" name="update">
 </FORM>
       <?php
if($_POST['update'])
{
 $id= $_POST['id'];
 $id=$_GET['id'];
 echo $id;
 $salary = $_POST['salary'];
 $query = "UPDATE FACULTYDB SET Salary='$salary' WHERE id='$id' ";
 $data = mysqli_query($conn,$query);
 if($data)
 {
     ?><script>alert("salary updated!")
        window.location.assign("askadmin.php");</script>;
    </script><?php
     echo $salary ;
     echo $id;
     }else{
     echo"wrong";
 }
}
?>
</html>