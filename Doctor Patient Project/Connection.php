<!-- Aurangajeb Alam Sabbir --!>

<?php
class Connection{
	public static $con=null;
	public static $database_name="project32"; 
	public static function getConnection(){
		  $user = "web";
          $password = "1234";
		  $database=Connection::$database_name;
	      $database_create_sql= "CREATE DATABASE IF NOT EXISTS ".$database;
		  $use_database_sql="USE ".$database;
		  $con=mysqli_connect("localhost",$user,$password);
	// Check connection
	if (mysqli_connect_errno()){ 
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if(!mysqli_query($con,$database_create_sql)){
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