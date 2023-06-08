<html>
<body>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>


<head>
<form action="" method="POST">

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
tr:nth-child(even) { background-color: lightgrey;}
</style>
<?php


include("owndbu.php");
error_reporting(0);
$query = "SELECT * FROM VCLASSATT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);



if($total != 0 )
{
    ?>
       <body><div id="HTMLtoPDF">
    <table border="dotted">
    <th>VC-CLASS ID-NUMBER</th>
    <th>Addmission NUMBER</th>
    <th> STUDENT NAME</th>
    <th>ATTENDANCE</th>

  
    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo"<tr>
        <td>".$result['id']."</td>
        <td>".$result['sid']."</td>
        <td>".$result['studentname']."</td>
        <td>".$result['attendence']."</td>
     
      
</tr>";header ( "refresh:10; url=virtualclassroom.php");
    }

}
else{
    echo"table has no records";
}
?></div>




</table>
<a href="#" onclick="HTMLtoPDF()">Download PDF</a>
    <button onclick="print()">DOWNLOAD REPORT</button>
    <button HREF="virtualclassroom.php">BACK</button>


</body>
<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
<script type="text/javascript">>
function checkdelete()
{ 
 confirm ("do you want to printthe application form");
}
function print(){
    window.print();
}
</script>
<div id="MyClockDisplay" class="clock"></div>
    <script type="text/javascript">
                    function showTime()
                    {
                    var date = new Date();
                    
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session="AM";
                    if(h==0){
                        h=12;
                    }
                    if(h>12){
                        h=h-12;
                        session="PM";
                         }
                    h = (h < 10) ? "0" + h : h;
                    m = (m < 10) ? "0" + m : m;
                    s = (s < 10) ? "0" + s : s;

                       
                    var time= h + ":" + m + ":" + s + "" + session;
                    document.getElementById("MyClockDisplay").innerText = time;
                    document.getElementById("MyClockDisplay").innerContex = time;

                   
                    }
                    showTime();
                </script>