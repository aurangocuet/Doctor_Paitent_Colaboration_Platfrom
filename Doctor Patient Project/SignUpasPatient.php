<?php
include("Connection.php");
include("SQLOperation.php");
include("TableCreator.php");
$con=Connection::getConnection();
$table=TableCreator::createTablePatient();
$array=array();
		$array['name'] = mysqli_real_escape_string($con, $_POST['username']);
		$array['email'] = mysqli_real_escape_string($con, $_POST['email']);
		$array['age'] = mysqli_real_escape_string($con, $_POST['age']);
		$array['sex'] = mysqli_real_escape_string($con, $_POST['sex']);
		$array['country'] = mysqli_real_escape_string($con, $_POST['Country']);
		$array['district'] = mysqli_real_escape_string($con, $_POST['district']);
		$array['password'] = mysqli_real_escape_string($con, $_POST['password']);
		$re_password= mysqli_real_escape_string($con, $_POST['re_password']);
		if($array['password'] != $re_password)
			echo "Password doesn't match";
		else
		{
			$operation=SQLOperation::insertIntoTable("patient",$array);
	    }
?>