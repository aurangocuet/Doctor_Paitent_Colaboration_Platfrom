<!-- Aurangajeb Alam Sabbir --!>

<?php
class Connection{
	public static $con=null;
	public static function getConnection(){
		  $user = "web";
          $password = "1234";
	      $databases_name= "CREATE DATABASE IF NOT EXISTS project33";
		  $use_database_sql="USE project33";
		  $con=mysqli_connect("localhost",$user,$password);
	// Check connection
	if (mysqli_connect_errno()){ 
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if(!mysqli_query($con,$databases_name)){
		die('Error: ' . mysqli_error($con));
	}else{
		echo "database created succecfully";
	}
		 
	if (!mysqli_query($con,$use_database_sql))
  	    die('Error: ' . mysqli_error($con));		
	return $con;
	}
}
?>