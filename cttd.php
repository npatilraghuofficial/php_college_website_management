    
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
$query = "SELECT * FROM classtimetable";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0 )
{
    ?>
    <table border="dotted">
    <th> day-id</th>
    <th> day-name</th>
    <th> 8:30-9:30</th>
    <th>9:30-10:30</th>
    <th>10:30-11:30</th>
    <th>11:30-12:30</th>
    <th>12:30-2:00</th>
    <th>2:00-3:00</th>
    <th>3:00-4:00</th>
    <th>4:00-5:00</th>


    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
       <tr>
        
       <td>".$result['id']."</td>
        <td>".$result['dayname']."</td>
        
        <td>".$result['first']."</td>
        <td>".$result['second']."</td>
        <td>".$result['third']."</td>

        <td>".$result['fourth']."</td>

        <td>".$result['fifth']."</td>
        <td>".$result['sixth']."</td>
        <td>".$result['seventh']."</td>
        <td>".$result['eight']."</td>
       
       
        
        </tr>";
    }

}
    ?>
<html>
<head>
   <title>time table</title>
</head>
<body bgcolor="lightgreen">
<H1><FONT COLOR="DARKCYAN"><CENTER>COLLEGE TIME TABLE FOR BCA (5TH sem) </FONT></H1>
<table border="2" cellspacing="3" align="center">
<tr>
 <td align="center">

</body>
</html>
