<?php
	$user = "web";
	$password = "1234";
	$databases_name= "project31";
	$con=mysqli_connect("localhost",$user,$password,$databases_name);
	// Check connection
	if (mysqli_connect_errno()) 
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	//else
		//echo "Connection Successfull!.";
	// Create table
	$create_table="CREATE TABLE IF NOT EXISTS patient(
					name VARCHAR(30),
					email VARCHAR(30) PRIMARY KEY,
					age int,
					sex CHAR(10),
					country VARCHAR(10),
					district VARCHAR(10),
					password VARCHAR(20))";

	// Execute query
	if (!mysqli_query($con,$create_table))
		 echo "Error creating table: " . mysqli_error($con);
  		//echo "Table persons created successfully"; 
	//else
  		//
	
	//if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['age']) && 
		//isset($_POST['sex']) && isset($_POST['country']) && isset($_POST['district']) && 
		//isset($_POST['password']) && isset($_POST['re_password']))
	//{
		//Get data from patient
		$name = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$age = mysqli_real_escape_string($con, $_POST['age']);
		$sex = mysqli_real_escape_string($con, $_POST['sex']);
		$country = mysqli_real_escape_string($con, $_POST['country']);
		$district = mysqli_real_escape_string($con, $_POST['district']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$re_password = mysqli_real_escape_string($con, $_POST['re_password']);
		echo "$_POST[sex]";
		echo "$_POST[country]";
		echo "$sex";
		echo "$country";
		//Ceck Two password matches or not
		if($password!=$re_password)
			echo "Password doesn't match";
		else
		{
			$insert_patient_info="INSERT INTO patient (name, email, age, sex, country, district, password )
				VALUES ('$name', '$email', '$age', '$sex', '$country', '$district', '$password')";

			if (!mysqli_query($con,$insert_patient_info))
  					die('Error: ' . mysqli_error($con));
			else
				echo "Data Inserted Successfully";
		}
	//}
	//else
		//echo "Data is not set";
?>