<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->
<?php
	session_start();
	$user = "web";
	$password = "1234";
	$databases_name= "project31";
	$con=mysqli_connect("localhost",$user,$password,$databases_name);
	// Check connection
	if (mysqli_connect_errno()) 
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
		echo "Connection Successful.<br><br>";
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$query = "SELECT * FROM patient WHERE email = '$email' AND password ='$password'";
	$result = mysqli_query($con,$query);
	
	//echo  $result;
	$query_num_row = mysqli_num_rows($result);
	if($query_num_row==1)
	{
		
		$row = mysqli_fetch_array($result);
	
		$_SESSION['patient_email'] =    $row['email'];
		$_SESSION['patient_name'] =    $row['name'];
		$_SESSION['patient_age'] =      $row['age'];
		$_SESSION['patient_sex'] =     $row['sex'];
		$_SESSION['patient_district'] = $row['district'];
		$_SESSION['patient_country'] = $row['country'];
		$_SESSION['patient_password'] = $row['password'];
		
		header('Location: hme.php'); 
	}
	else
	{
		echo "Incorect Email or Password";	
	}
?>