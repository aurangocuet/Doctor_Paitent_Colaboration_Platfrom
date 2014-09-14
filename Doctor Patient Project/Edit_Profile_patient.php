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

	$name = $_SESSION['patient_name'];
	$age = $_SESSION['patient_age']; 
	$sex = $_SESSION['patient_sex'];
	$district = $_SESSION['patient_district'];
	echo "Previous Values: <br>";
	echo "$name<br>";
	echo "$age<br>";
	echo "$sex<br>";
	echo "$district<br>";
	$_password = mysql_real_escape_string($_POST['old_password']);
	
	if($_password==$_SESSION['patient_password'])
	{
		echo "<br>Old Password MATCH<br>";
		if(!empty($_POST['patient_name']))
		{
			$name = mysqli_real_escape_string($con,$_POST['patient_name']);
			echo "Name: $name<br>";
		}
			
		if(!empty($_POST['age']))
		{
				$age = mysqli_real_escape_string($con,$_POST['age']);
			    echo "Age: $age<br>";
		}
		
		if(!empty($_POST['sex']))
		{
				$sex = mysqli_real_escape_string($con,$_POST['sex']);
				echo "Sex: $sex<br>";
		}
			
		if(!empty($_POST['district']))
		{
			$district = mysqli_real_escape_string($con,$_POST['district']);
			echo "District: $district<br>";
		}
			
		if(!empty($_POST['new_password']))
		{
			$new_password = mysqli_real_escape_string($con,$_POST['new_password']);
			$re_new_password = mysqli_real_escape_string($con,$_POST['re_new_password']);
			echo "Trying to set NEW PASSWORD<br>";
			if($new_password==$re_new_password)
			{
				echo "Setting New PPassword<br>";
				$_password=$new_password;
			}
			else
			{
				echo "Two New Passwords Doesn't Match!";
				header('Location: Edit_Patient_Profile.html');
			}
		}
		
		echo "<br>Going to Perform Query<br>";
		echo "$name<br>";
		echo "$age<br>";
		echo "$sex<br>";
		echo "$district<br>";
				
		$query = "UPDATE patient SET name = '$name', age = '$age', sex= '$sex', district= '$district', password ='$_password'
					WHERE email='$_SESSION[patient_email]'";
		$result = mysqli_query($con,$query);
		
		$query = "SELECT * FROM patient WHERE email = '$_SESSION[patient_email]' AND password ='$_password'";
		
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
	
		echo "<br>After Updating: <br>";
		$_SESSION['patient_email'] =    $row['email'];
		echo "$_SESSION[patient_email]<br>";
		//echo "$row['email']";
		$_SESSION['patient_name'] =    $row['name'];
		echo "$_SESSION[patient_name]<br>";
		$_SESSION['patient_age'] =      $row['age'];
		echo "$_SESSION[patient_age]<br>";
		$_SESSION['patient_sex'] =     $row['sex'];
		echo "$_SESSION[patient_sex]<br>";
		$_SESSION['patient_district'] = $row['district'];
		echo "$_SESSION[patient_district]<br>";
		$_SESSION['patient_country'] = $row['country'];
		echo "$_SESSION[patient_country]<br>";
		$_SESSION['patient_password'] = $row['password'];
		echo "$_SESSION[patient_password]<br>";
		
		//header('Location: profile_patient.php');
	}
	else
	{
		echo "Incorrect Password";
	}
?>
