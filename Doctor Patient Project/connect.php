<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
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
	else
		echo "Connection Successfull!.";
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
	if (mysqli_query($con,$create_table)) 
  		echo "Table persons created successfully"; 
	else
  		echo "Error creating table: " . mysqli_error($con);
?>
</body>
</html>