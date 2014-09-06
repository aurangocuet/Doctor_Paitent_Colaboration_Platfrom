<?php
	session_start();
	include ("Connection.php");
	$con=Connection::getConnection();
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	//$result = mysqli_query($con,"SELECT * FROM patient WHERE email=".mysql_real_escape_string($email)." AND
	//password=".mysql_real_escape_string($password)."");
	
	//echo "Welcome $result <br>";
	
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