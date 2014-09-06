<?php 
	session_start();
	include ("Connection.php");
	$con=Connection::getConnection();
	$_password; $age; $name; $sex; $district; $new_password; $re_new_password;
	
	$_password = mysql_real_escape_string($_POST['old_password']);
	
	if($_password==$_SESSION['patient_password'])
	{
		//if(isset($_POST['patient_name']))
			$name = mysqli_real_escape_string($con,$_POST['patient_name']);
			echo "$name<br>";
		//else
			//$name = $_SESSION['patient_name'];
			
		//if(isset($_POST['age']))
			$age = mysqli_real_escape_string($con,$_POST['age']);
			echo "$age<br>";
		//else
			//$age = $_SESSION['patient_age'];
			
		//if(isset($_POST['sex']))
			$sex = mysqli_real_escape_string($con,$_POST['sex']);
			echo "$sex<br>";
		//else
			//$sex = $_SESSION['patient_sex'];
			
		//if(isset($_POST['district']))
			$district = mysqli_real_escape_string($con,$_POST['district']);
			echo "$district<br>";
		//else
			//$district = $_SESSION['patient_district'];
			
		//if(isset($_POST['new_password']))
		//{
			//$new_password = mysqli_real_escape_string($_POST['new_password']);
			//$re_new_password = mysqli_real_escape_string($_POST['re_new_password']);
			//if($new_password==$re_new_password)
			//{
			//	$_password=$new_password;
			//}
			//else
			//{
			//	echo "Two New Passwords Doesn't Match!";
			//	header('Location: Edit_Patient_Profile.html');
			//}
		//}
				
		$query = "UPDATE patient SET name = '$name', age = '$age', sex= '$sex', district= '$district', password ='$_password'
					WHERE email='$_SESSION[patient_email]'";
		$result = mysqli_query($con,$query);
		
		$query = "SELECT * FROM patient WHERE email = '$_SESSION[patient_email]' AND password ='$_password'";
		
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
	
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
		
		header('Location: profile_patient.php');
	}
	else
	{
		echo "Incorrect Password";
	}
?>
