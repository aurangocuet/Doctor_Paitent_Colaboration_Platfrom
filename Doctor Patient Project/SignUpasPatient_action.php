	<script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="scripts/effects.js"></script>
    <script type="text/javascript" src="scripts/photo.js"></script>
    <script type="text/javascript" src="scripts/search.js"></script>
<?php
	require_once 'Connection.php';
	//require_once 'SignUpasPatient.php';
	include("SQLOperation.php");
	include("TableCreator.php");
	$con=Connection::getConnection();
	$table=TableCreator::createTablePatient();
	$array=array();
	if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['sex'
		]) && isset($_POST['district']) && isset($_POST['password']) && isset($_POST['re_password']))
	{
			$array['name'] = strtolower(htmlentities(mysqli_real_escape_string($con, $_POST['name'])));
			$array['user_name'] = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
			$array['email'] = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
			$name=$_POST['username']; 
			$array['image']=$name. '.jpg';
			$array['district'] = strtolower(htmlentities(mysqli_real_escape_string($con,$_POST['district'])));
			$array['age'] = strtolower(htmlentities(mysqli_real_escape_string($con,$_POST['age'])));
			$array['sex'] = strtolower(htmlentities(mysqli_real_escape_string($con,$_POST['sex'])));
			$array['password'] = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
			$re_password =htmlentities(mysqli_real_escape_string($con,$_POST['re_password']));
			$target = "image/";    
	        $target=$target.$array['image'];	    
			$max_size = 2097152;
			if(!empty($array))
			{
				$query_username_num_rows=0;
				$query_email_num_rows=0;
						$query_username = "SELECT * FROM `patient` WHERE  `user_name`='".$array['user_name']."'";
						echo "<br/>".$query_username;
						if($query_username_run = mysqli_query($con,$query_username)){
						$query_username_num_rows = mysqli_num_rows($query_username_run);
						echo "<br/>".$query_username_num_rows;
						}
						$query_email = "SELECT * FROM  `patient` WHERE  `email` LIKE  '".$array['email']."'";
						if($query_email_run = mysqli_query($con,$query_email)){
						$query_email_num_rows = mysqli_num_rows($query_email_run);
						echo "<br/>".$query_email_num_rows;
						}
						if($query_username_num_rows == 1)
						{

							 echo'<script type="text/javascript">
									$(".notify").slideDown(1000);
									$(".cross").click(function(e) {$(".notify").slideUp(1000);});
									$(".notify > .notifytext").html("Username already chosen");
									</script>';	
						}
						else if($query_email_num_rows >=1)
						{
							echo'<script type="text/javascript">
									$(".notify").slideDown(1000);
									$(".cross").click(function(e) {
									$(".notify").slideUp(1000);
										});
									$(".notify > .notifytext").html("Email Id already registered.");
									</script>';	
						}
						else if($array['password'] != $re_password)
						{
							echo'<script type="text/javascript">
							$(".notify").slideDown(1000);
							$(".cross").click(function(e) {$(".notify").slideUp(1000);});
							$(".notify > .notifytext").html("Password combination does not match.");
							</script>';	
						}
						else
						{
							if(isset($_POST['submit'])){
								echo "<br/>hbbj";
								if(!isset($FILES['photo']['size']))
							$size = $_FILES['photo']['size'];
							    echo "<br/>".$size;
  			                $type = $_FILES['photo']['type'];
							if($size < $max_size && ($type=='image/jpg' || $type='image/jpeg')){
						    if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {    
								 echo "The file ". basename( $_FILES['photo']['name']). 
   								  " has been uploaded, and your information has been added to the directory"; 

						    }  else {    
								 echo "Sorry, there was a problem uploading your file.";  
							}  
								 SQLOperation::insertIntoTable("patient",$array);
					       }
							else 
							{
							echo'<script type="text/javascript">
							$(".notify").slideDown(1000);
							$(".cross").click(function(e) {
							$(".notify").slideUp(1000);
								});
							$(".notify > .notifytext").html("Please fill all the fields.");
							</script>';	
							}		
				}
	    }
      }
}
?>