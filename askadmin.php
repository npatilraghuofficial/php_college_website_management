
<html>
    <head>
  <style>   
@import swal from 'sweetalert';

@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 20px;
  padding: 0;
  font-family: 'Rubik', sans-serif;
  background: url(img/pic1.jpg) no-repeat;
  background-size: cover;
     background-size: cover;
  background-attachment: fixed;
  background-position: center center;
}
.login-box{
  width: 1000px;
 height:900px;
  border: 1px groove;
  border-color:red;
  MARGIN-TOP:50px;

  position: absolutE;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}

.login-box h1{
  float: center;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.login-box h1:hover{
  float: center;
  font-size: 40px;
  border-bottom: 6px solid red;
  margin-bottom: 60px;
  padding: 13px 0;
}
.textbox{
  
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox a{
  text-decoration:none;
  color:white;
 
 }

 .textbox a:hover{
  text-decoration:none;
  color:white;
  border-bottom: 2px solid red;
  font-size:25.5px;

 }
.textbox h1:hover{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid ;
} 
 .login-box .logout a
 {
   padding:10px;
  text-decoration:none;
}
.login-box .logout a:hover
 {
  text-decoration:none;
  border-bottom:6px solid red;
}
 .clock{
            position:absolute;
            top:10%;
            left:90%;
            transform:translateX(-50%) translateY(-50%);
            color:#fff;
            font-size:25px;
            border:1px solid #ccc;
            padding:0px;
            }
</style>
<HEAD>  

</HEAD>
    <body>
     

    <div class="login-box">
    <div class="logout" ALIGN="RIGHT"><a href="index.html" ><font color="white" size="5px;" >LOGOUT</font></div></a>
    <div id="MyClockDisplay" class="clock"></div>
    <style> 
    
            </style>
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

                       
                    var time= h + ":" + m + ":" + s + "" + "_"+ session;
                    document.getElementById("MyClockDisplay").innerText = time;
                    document.getElementById("MyClockDisplay").innerContex = time;

                    setTimeout(showTime,1000);
                    }
                    showTime();
                   
  </script>





<center><h1 border="legend">Admin control Area</h1></center>
  <div class="textbox">
  <h3> <i class="fa fa-users">&nbsp&nbsp FACULTY 
      <ol>
        
             <li> <a href="addfac.php"> ADD-FACULTY PROFILE </li>
             <li> <a href="upfac.php">VIEW AND UPDATE-FACULTY PROFILE(ASSIGN VIRTUAL CLASS ID)</li>
           
             <li> <a href="facatt.php"> UPDATE-FACULTY-ATTENDENCE </li>
             <li> <a href="facsal.php"> UPDATE-FACULTY-SALARY </li></a>
            
             
      </ol></i></h3>
</DIV>
<div class="textbox"> <h3> 
<i class="fa fa-building">&nbsp&nbsp COLLEGE-CAMPUS-UPDATE</i>
             <ol>
               
             <li> <a href="upnotice.php">UPDATE NOTICE ON NOTICE BOARD</li>
             <li> <a href="cttupdate.php">UPDATE COLLEGE TIME-TABLE</li>
             <li> <a href="ettu.php">UPDATE FINAL EXAM-TIME</li>
             <li> <a href="eventsu.php">ADD EVENTS</li>
             <li> <a href="facsal.php">  </li></a>
       </ol></i></h3>
    </div>

    <div class="textbox"> <h3> 
<i class="fa fa-graduation-cap">&nbsp&nbsp STUDENT DETAILS-UPDATE</i>
             <ol>
             <li> <a href="addstu.php">ADD STUDENT DATA TO COLLEGE DATABASE (FRESHER) </li>
             <li> <a href="printstu.php">VIEW AND UPDATE-STUDENT-PROFILE</li>
              <li><a href="upexresult.php"><font>UPDATE EXAM RESULT</li>
            </LI>
                    
             <li> <a href="upextt.php"> </li>
             <li> <a href="facsal.php">  </li>
       </ol></i></h3>
    </div>
 
  

</body>
<html>