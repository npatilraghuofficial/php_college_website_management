
<?php
if($_POST['submit'])
    {
        $att=$_POST['att'];
        $total=$_POST['total'];
        $id=$_POST['id'];
         for($id=1; $id<=$total; $id++){
            $query ="UPDATE facatt SET Attendence='$att' WHERE id='$id'";
            $data = mysqli_query($conn, $query); 
             }
             if($data)
             {
                 echo"succesfull";
             }
                 else{echo"fail";}
                 
             }?>