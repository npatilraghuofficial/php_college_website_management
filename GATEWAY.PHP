<style>
*{background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>

<?php
include("owndbu.php");
error_reporting(0);
session_start();
echo $_SESSION['uname'];
$phonenumber= $_SESSION['phonenumber'];
echo $_SESSION['phonenumber'];

$query ="SELECT * FROM studentdb where mb='$phonenumber'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !== 0 )
{
    
  
         while($result = mysqli_fetch_assoc($data))
             {
                 ?>
             <body><div class="profile">
             <?php
                
             echo"<tr>
             <table>

             <tr>
             <td></td>
             <td><a href=dummy.php?id=$result[appno]&phonen=$result[mb]&srn=$result[regno]&pic=$result[picsource]&gen=$result[sex]&sname=$result[studentname]&dob=$result[dob]&phonen=$result[mb]&email=$result[em]'><input type=submit name=submit value=CONFIRM></a></td>
        </tr>
             <tr>
                 <td>STU-ADMISSION-ID</td>
                 <td>".$result['appno']."</td>
            </tr>
            <tr>
            <td>STU-ID</td>
            <td>".$result['regno']."</td>
       </tr>


         
            <tr>
            <td>STUDENT-NAME </td>
            <td>".$result['studentname']."</td></tr>
        </tr>


        <tr>
        <td>GENDER </td>
        <td>".$result['sex']."</td></tr>
    </tr>


           </tr>
            <tr>
              <td>PROFILE PHOTO </td>
             <td><img src='".$result['picsource']."' height='100' width='100'/></td>
             
             </tr>
               
             <tr>
                <td>DATE OF BIRTH </td>
                <td>".$result['dob']."</td></tr>
            </tr>
            
            <tr>
            <td>PHONE NUMBER</td>
            <td>".$result['mb']."</td></tr>

            
            <tr>
            <td>EMAIL-ID</td>
            <td>".$result['em']."</td>
       </tr>

        </div>
        <td><a href='upfac1.php?></a></td>
        
        
        </tr>";
        echo $empid=$result['appno'];
        
    }?>
    <tr>
  
</div>
    </tr><?php
    

}

