<html>
<title> hhhh</title>
<head></head>
<body>
    <style>
        *{
            background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255,255,255,0.50) 47%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: screen;
        }
</style>

<form action="" method="POST">
    DAILY UPDATE <input type="text" name="nb1" value=""  autocomplete=off placeholder="enter the text here"><BR>
          FEED2 <input type="text" name="nb2" value=""  autocomplete=off placeholder="hyperlink"><BR>
            FEED3 <input type="text" name="nb3" value=""  autocomplete=off placeholder=""><BR>
            FEED4 <input type="text" name="nb4" value=""  autocomplete=off placeholder=""><BR>
            FEED5 <input type="text" name="nb5" value=""  autocomplete=off placeholder=""><BR>
            FEED6 <input type="text" name="nb6" value=""  autocomplete=off placeholder=""><BR>
            FEED7 <input type="text" name="nb7" value=""  autocomplete=off placeholder=""><BR>
            FEED8 <input type="text" name="nb8" value=""  autocomplete=off placeholder=""><BR>





<input type="submit" name="update" VALUE="update" >
</form>
<?php
include("owndbu.php");
error_reporting(0);
if($_POST['update'])
{
    $nb1=$_POST['nb1'];
    $nb2=$_POST['nb2'];
    $nb3=$_POST['nb3'];
    $nb4=$_POST['nb4'];
    $nb5=$_POST['nb5'];
    $nb6=$_POST['nb6'];
    $nb7=$_POST['nb7'];
    $nb8=$_POST['nb8'];

    echo"";
    $query="UPDATE notice SET feed1='$nb1',feed2='$nb2',feed3='$nb3',feed4='$nb4',feed5='$nb5',feed6='$nb6',feed7='$nb7',feed8='$nb8' WHERE id='1'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        ?><script>alert("notice updated!")
        window.location.assign("display.php");</script>;
    </script><?php 
        
    }else
    {
        echo"wrongggg";
    }
}
?>



</body>

</html>
