<html>


<?php 
include("owndbu.php");
error_reporting(0);
 echo $eid= $_GET['id'];

?>
<STYLE>
*{margin:5px;
padding:10px;
}

.h1{
    margin:5px;
    padding:5px;
    background:lightgreen;
    border:groove;
}
    </STYLE>
<style>
*{
    background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}</style>
        <body>
        <form method="POST">

<div class="h1"><h2>EX:<BR>
COLLEGENAME:[GSC]  &nbsp FACULTY-NAME:[XXX] SUBJECT-NAME:[YYY] NUMBER:[Z]<BR></div>
</h2>

ENTER YOUR NEW 10 DIGIT VC-ID<input type="textbox" name="vcid" class="form-control" value="<?php echo $_GET['vid'];?>" id="vcid"  class="form-control"> <br>
<input type="submit" name="update1" value="update vc-id">
</FORM>
<?php 
      if($_POST['update1'])
      {
          $vcid=$_POST['vcid'];
        
          echo $eid;
             
          $query = "INSERT INTO vclass VALUES ('$id','$eid','$vcid');
          SELECT facultydb.id,facultydb.FacultyName,facultydb.Pic,vclass.id,vclass.vid,vclass.eid
            FROM facultydb,vclass
           WHERE vclass.eid=facultydb.id
         ORDER BY vclass.id;
          ";
          $data = mysqli_multi_query($conn, $query);
      }
if($data)
{
    echo"SUCCES";
    header ( "refresh:0.9; url=askadmin.php");
    }
    else {
        echo"emp vid already already exist";
    }
      
           
?>
</body>

</html>