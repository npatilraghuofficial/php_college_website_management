


<style>
    .search{
        margin:auto;
        border:10px;
        
    }
td {
    padding:15px;
}
table{
    border-coLLapse:collaPse;
    border:groove;
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

.disp{
    margin-top:25px;
    margin-left:250px;
    border:groove;
    width:500px;
    height:600px;

}
</style>
<?php
include("owndbu.php");
error_reporting(0);

       $_GET['id'];
       $_GET['salary'];
       $_GET['pic'];
       $_GET['fname'];
     
?>
<form action="facsal.php" method="POST">
<i class="fas fa-user"></i>  


<tr></br>
      </div></TR>
            
      <DIV CLASS="disp">
      <table BORDER=GROOVE>
  <TR>
  <th>SALARY UPDATE</th>
  
</TR>


<tr>
<td>EMP-PROFILE-PIC <img src="<?php echo $_GET['pic'];?>" width="100" height="120"><br></td>
  <FONT COLOR="RED"><H6> *NOTE<BR>ONLY SALARY AMOUNT CAN BE AFFECTED ON UPDATE<BR>EMP-NAME AND EMPI-DCANNOT BE UPDATED HERE! </H6></FONT>
</tr>

<tr>
<td>EMP ID <input type="textbox" name="id" id="id" value="<?php echo $_GET['id'];?>" class="form-control"> <br></td>
</tr>

<tr>
<td>EMP-NAME <input type="LABEL" name="fname" id="fn" AUTOCOMPLETE=OFF value="<?php echo $_GET['fname'];?>" class="form-control"></td>
</tr>

<tr>
<td>ENTER NEW  SALARY DETAILS <input type="textbox" AUTOCOMPLETE=OFF value="<?php echo $_GET['salary'];?>" name="salary"></td>
</tr>

<tr COLSPAN="3">
<td><INPUT TYPE="SUBMIT" value="update" name="update"></td>
</tr>
<?php
if($_POST['update'])
    {
        $id= $_POST['id'];
        $salary = $_POST['salary'];    
        $query="UPDATE facultydb SET Salary='3000' WHERE id='1'";
                $data = mysqli_query($conn, $query);
            if($data)
          {
         echo"succesfull";
         }else{
        echo"wrong";
      }

}

?></div>
</TABLE>
</FORM>
 
<?php


/*<table>

             <tr>
                 <td>EMPID</td>
                 <td>".$result['id']."</td>
            </tr>

         
            <tr>
            <td>PROFILE NAME </td>
            <td>".$result['FacultyName']."</td></tr>
        </tr>
        </tr>
            <tr>
              <td>PROFILE PHOTO </td>
             <td><img src='".$result['Pic']."' height='100' width='100'/></td>
             
             </tr>
               
             <tr>
                <td>DATE OF BIRTH </td>
                <td>".$result['DOB']."</td></tr>
            </tr>
            
            <tr>
            <td>DEPARTMENT</td>
            <td>".$result['Department']."</td></tr> 
            <tr>
            <td>FACULTY-SALARY</td>
            <td>INR_".$result['Salary']."<a href=upsal.php?id=$result[id]&salary=$result[Salary]&fname=$result[FacultyName]&pic=$result[Pic]>UPDATE</a> </td>
            
       </tr>
         <tr>
            <td>EMAIL-ID</td>
            <td>".$result['EmailId']."</td>
       </tr>

       
     <tr>
            <td>EMAIL-ID</td>
            <td>".$result['EmailId']."</td>
       </tr>

        */