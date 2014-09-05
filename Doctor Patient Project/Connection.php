<?php
class Connection{
	public static $con=null;
	public static function getConnection(){
		  $user = "web";
          $password = "1234";
	      $databases_name= "project31";
		  $use_database_sql="USE project31";
		  $con=mysqli_connect("localhost",$user,$password,$databases_name);
	// Check connection
	if (mysqli_connect_errno()){ 
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	if (!mysqli_query($con,$use_database_sql))
  	 die('Error: ' . mysqli_error($con));
	return $con;
	}
}
?>