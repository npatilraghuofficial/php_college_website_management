
<?php 
include("owndbu.php");
error_reporting(0);
date_default_timezone_set("Asia/Kolkatta");
?>
    <form class="form-horizontal" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">

<li><input type="text" class="form-control" name="email" id="ln" size="80" placeholder="name" ></li></br>


<button style="margin-left: 5px;background-color: orange;" type="submit" name="submit"  class="btn btn-primary">Register</button>
<?php 
  				
				  if (!empty($_POST)){
					 if(isset($_POST['submit'])){
						$email = $_POST['email'];
								
					  
	  $query = "INSERT INTO subscribers VALUES ('$id','uuu')";
	  $data = mysqli_query($conn, $query);
	  if($data){
		  echo"succesfull";
		
		?><script>alert("submitted")</script><?php
	}
		  else
		  {
			  echo"wrong";

		  }
	  }
					
		}
					  ?>
             
			</div>
		</div>
	</section>
	<!-- Courses section end-->
              
	<?php 
  				
				  if (!empty($_POST)){
													
					   if(isset($_POST['submit'])){
									   
									
									  $email = $_POST['email'];
									 
														  
	 $query = "INSERT INTO contact VALUES ('$name','$email')";
	  $data = mysqli_query($conn, $query);
	  if($data){
		  echo"succesfull";}
		  else
		  {
			  echo"wrong";

		  }
	  }
					
					   }
					  ?>