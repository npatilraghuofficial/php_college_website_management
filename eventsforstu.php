    
  <html>  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
</style>

<?php
include("owndbu.php");
error_reporting(0);
$query = "SELECT * FROM events";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0 )
{
    ?>
    <table border="dotted" colspan="2">
    <th> id</th>
    <th> DATE</th>
      <th>  1ST SEMESTER &nbsp <br>9:30 AM TO 12:30PM <br></th>
    <th>  3RDT SEMESTER &nbsp <br>12:30 AM TO 02:30PM</th>
    <th>  5ST SEMESTER &nbsp<br>2:30 AM TO 5:00PM</th>


    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
       <tr>
        
       <td>".$result['ID']."</td>
        <td>".$result['date']."</td>
        
        <td>".$result['firstsem']."</td>
        <td>".$result['secondsem']."</td>
        <td>".$result['thirdsem']."</td>

       
        
        </tr>";
    }

}
    ?>
<html>
<head>
   <title>EVENTS</title>
</head>
<body bgcolor="lightgreen">
<H1><FONT COLOR="DARKCYAN"><CENTER>COLLEGE ANNUAL EVENTS TIME TABLE </FONT></H1>
<table border="2" cellspacing="3" align="center">
<tr>
 <td align="center">


</body>
</html>
