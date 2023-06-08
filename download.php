<!DOCTYPE html>
<html>
<head>
	<title>Download File using PHP</title>
</head>
<body>



</body>
</html>
<?php
include("owndbu.php"); 
error_reporting(0);
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $stat=$conn ->prepare("SELECT * FROM assgfiles where id=?");
    $stat->bindparam(1,$id);
    $stat->execute();
    $data=$stat->fetch();
    $file='assg/'.$data['filename'];

} 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'assg/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
	
		header("Content-type:applicatiion/pdf");
		header("Content-Disposition: attachment; filename=");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

 ?>

