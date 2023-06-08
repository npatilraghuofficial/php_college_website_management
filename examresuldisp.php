

<?php 

include("owndbu.php");
error_reporting(0);
 $sid =$_GET['id'];
 $_GET['pic'];
 $_GET['fname'];
 $_GET['dob'];
 $_GET['dept'];
 $_GET['phonen'];
 $_GET['email'];
 $_GET['gen'];?>
<html>
<title></title>
<head><CENTER><FONT COLOR="GREEN"><H2>STUDENT-PORTAL</H2></FONT></CENTER></head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/style.css"/>
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
.profile{
    width:1520px;
    padding:50px;
    align:center;
    position:relative;
}
.faculty{
    border:groove;
  
    width:AUTO;
    height:auto;}

    .video{ display:flex;
    float:right;
    padding:15px;
    position:relative;
    margin-top:5px;
    margin-right:25px}

    .news{
        width:800px;
        height:600;
        display:left;
        position:relative;
        border:groove;
    }
    .news.newspart{
        float:left;
     
    }
 </style>
<?php

include("owndbu.php");
error_reporting(0);
session_start();



$phonenumber= $_SESSION['phonenumber'];


$query ="SELECT * FROM sturesult where sid='$sid'";
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
             <table border=groove>

             <tr>
             <td></td>
             
             <TR>
            
             </tr>
             <td colspan=2  align=center>
             <FONTCOLOR=black>5TH SEMISTER RESULT</FONT>
        </td>
             <tr>
                 <td>STU-ADMISSION-ID</td>
                 <td>".$result['sid']."</td>
            </tr>
           <tr>
       <td>PROFILE PHOTO </td>
      <td><img src='".$result['picsource']."' height='100' width='100'/></td>
      
      </tr>
      <tr>
      <td COLSPAN=4></td>
     <td></td>
     
     </tr>
     <td border=none></td>
    <FONTCOLOR=GREEN><td><input type=textbox name=sn1 size=43 id=sn1 value=SUBJECT-NAME></td></FONT>
     <td><input type=textbox name=sm1 size=10 id=sm1 value=OBTAINED></td>
     <td><input type=textbox name=of1 size=10 id=of1 value=MAXIMUM></td>
 </tr>
     
        <td border=none>SUB-1</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s1']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m1']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o1']."></td>
    </tr>
    <td border=none>SUB-2</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s2']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m2']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o2']."></td>
    </tr>
    <td border=none>SUB-3</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s3']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m3']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o3']."></td>
    </tr>
    <td border=none>SUB-4</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s4']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m4']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o4']."></td>
    </tr>
    <td border=none>SUB-5</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s5']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m5']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o5']."></td>
    </tr>
    <td border=none>SUB-6</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s6']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m6']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o6']."></td>
    </tr>
    <td border=none>SUB-7</td>
        <td><input type=textbox name=sn1 size=43 id=sn1 value=".$result['s7']."></td>
        <td><input type=textbox name=sm1 size=10 id=sm1 value=".$result['m7']."></td>
        <td><input type=textbox name=of1 size=10 id=of1 value=".$result['o7']."></td>
    </tr>

    <td border=none>IA-MARKS</td>
    <td></td>
    <td><input type=textbox name=im size=10 id=sm8 value=".$result['internal']."></td>
    <td><input type=textbox name=of8 size=10 id=of8 value=".$result['iof']."></td>
</tr>
<tr>
                 <td ALIGN=CENTER></td>
                 <td ALIGN=CENTER>PERCENTAGE(%)</td>
                 <td ALIGN=CENTER colspan=2>TOTAL</td>
                
              </tr>
              <TD></TD>
            
             <td><input type=textbox name=per size=10 id=per value=".$result['percent']."> <input type=textbox name=sm8 size=10 id= value=  placeholder=%></td>
            </td>
             <td><input type=textbox name=total size=10 id=total value=".$result['total']."></td>
            <TD> <input type=textbox name=max size=10 id=max value=".$result['max']."></TD>
           
         </tr>
         <tr>
                <td>RESULT </td>
                <td>".$result['result']."</td></tr>
            </tr>
         

        </div>
        
        <td><a href='print1form.php?apn=$result[appno]' onclick='checkdelete()'></a></td>
        
        
        </tr>";header ( "refresh:15; url=stuhome.php");
    
      
        
    }?>
    <tr>
  
</div>
    </tr><?php
    

}



$phonenumber=$_POST['phonenumber'];
echo"<center><font color=black><h1></font><font color=green> $_SESSION[uname]</font></h2><center>"; 
?>
  <style>
   *{
    background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */





}
</style>
<script type="text/javascript">>

function print(){
    window.print();
}
</script>
<form action="" method="POST">
<nav class="nav-section">
	
			
			<ul class="main-menu">
				
				<li><a href="STUHOME.php">BACK</a></li>    <button onclick="print()">DOWNLOAD PHOTOCOPY</button>

		</div>
    </nav>
    