<?php 
	include("owndbu.php");
	session_start(); 
	ob_start();
	
	
?>
<style>
    *{
        background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #9FFFF1, #0FEFB0);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #33333222, #FFE0B7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}

</style>
<head>
<div class="logo">

    </div>
	<link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	body{
	
margin-top:5px;
padding:auto;
width:1300px;
height:auto;
border:groove;
border-color:green;
	background-color: green;
	background-size: 100%;
	background-repeat: no-repeat; 
	text-align: center;
	font-size: 17px;
	color: white;
	padding-right: : 0px;


}
*
{
	box-sizing: border-box;
}
.container{
    margin-top:40px;
    align:center;
    padding:20px;
}
.logo{

width:100%;
height:13.5%;
background-image: no-repeat;
background-repeat: no-repeat;
}

h1{
	color: white;
     font-family: times new roman;
     text-align: center;
     text-transform: capitalize;
    
}
.row{
    align:center;
    margin-left:450px;

}
.row li{
    text-decoration :none;
    list-style:none;
}
input{

     background: white;
     border-style: box;
     border-radius: 0px;
     border-width: 3px;
     height: auto;
     width: auto;
     text-align: center;
     color: black;
}
{
	-webkit-filter:grayscale(100%);/* safari 6.0-9.0*/
	filter: grayscale(100%);
}


button{
     
     color: white;
     background-color: #4CAF50;
     border-radius: 15px;
     height: 2rem;
     background: transparent;
     width: 6rem;
     border-style: solid;
     border-width: 0px;
     
 }

</style>
</head>


<body>

                  <div class="container"> 
 <h1>College Faculty SIG-UP</h1></br>
                    <div class="row">
             <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

     <li><input type="text" class="form-control" name="empid" id="ln" placeholder="empid" required></li></br>
     
    <li><input type="text" class="form-control" name="ph" id="ln" placeholder="Phone Number" required></li></br>                                            
    <li><input type="text" class="form-control" name="un" id="ln" placeholder="Username" required></li></br>                                            
    <li><input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required></li></br>
    <button style="margin-left: 5px;background-color: orange;" type="submit" name="submit"  class="btn btn-primary">Register</button>
                        	
                         	
        </div>
    </div>      
                       
         </form>
                           
                            
                <?php 
  				
					if (!empty($_POST)){
								  					
					 	if(isset($_POST['submit'])){
								 		
										$id =$_POST['empid'];
									    $ph = $_POST['ph'];
                                        $un = $_POST['un'];
										$pass = $_POST['pass'];
                                        
										
                                        $query = "UPDATE facultydb SET USERNAME='$un', PASSWORD='$pass' WHERE id='$id' AND PhoneNumber='$ph';
                                        
                                        SELECT facultydb.id,facultydb.username,facultydb.password,facultylogin.id
                                            FROM facultydb,facultylogin
                                            WHERE facultylogin.id=facultydb.id
                                            ORDER BY facultylogin.id;
                                       ";
                                        $data = mysqli_multi_query($conn, $query);
                                        if($query){
								echo "<div class='alert alert-success text-center' role='alert'>FACULTY Registered Successfully NOW YOU CAN ACCESS DATABASE</div>";
												header( "refresh:0.2; url=facultylogin.php" );
											}else{
								echo "<div class='alert alert-danger text-center' role='alert'>Error:login failed please contact DEVELOPER RAGHAVENDRA!</div>";
								header( "refresh:1; url=index.php" );
											}
								    		
									}
								 }
  		
  							?>
                        </div>
                </div>
                   
                </div>
              
             
    </body>
 
</html>