<?php 
	include("owndbu.php");
	session_start(); 
	ob_start();
	
	
?>


 <div class="container"> 
 <h1>College Faculty SIG-UP</h1></br>
                    <div class="row">
             <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

     <li><input type="text" class="form-control" name="empid" id="ln" placeholder="name" ></li></br>
     
    <li><input type="text" class="form-control" name="email" id="ln" placeholder=" email" ></li></br>                                            
    <li><input type="text" class="form-control" name="sub" id="ln" placeholder="subject" ></li></br>                                            
    <li><textarea placeholder="Message" name="sms"></textarea></li></br>

    
    <button style="margin-left: 5px;background-color: orange;" type="submit" name="submit"  class="btn btn-primary">Register</button>
                        	
                         	
        </div>
    </div>      
    </form>
                           
                            
                <?php 
  				
					if (!empty($_POST)){
								  					
					 	if(isset($_POST['submit'])){
								 		
										$name =$_POST['name'];
									    $email = $_POST['email'];
                                        $sub = $_POST['sub'];
										$sms = $_POST['sms'];
                        
        $query = "INSERT INTO contact VALUES ('$name','$email','$sub','$sub','$id')";
        $data = mysqli_query($conn, $query);
        if($data){
            echo"succesfull";}
            else
            {
                echo"wrong";

            }
        }
                      
          }
                        