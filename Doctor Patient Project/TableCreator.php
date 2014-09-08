<!-- Aurangajeb Alam Sabbir --!>

<?php
//include ("Connection.php");
require_once 'Connection.php';
$con=Connection::getConnection();

	class TableCreator{
		public static function createTablePatient(){
		 $con=Connection::getConnection();
		 $create_table="CREATE  TABLE IF NOT EXISTS `patient` (
 						  `name` VARCHAR(30) NOT NULL ,
 						  `user_name` VARCHAR(20) NOT NULL ,
						  `email` VARCHAR(45) NOT NULL ,
 						  `image` VARCHAR(45) NOT NULL ,
 						  `district` VARCHAR(15) NOT NULL ,
						  `sex` VARCHAR(10) NOT NULL ,
						  `age` INT NOT NULL ,
				          `password` VARCHAR(10) NOT NULL ,
 						   PRIMARY KEY (`email`) )";

	  // Execute query
	  if (!mysqli_query($con,$create_table))
		 echo "Error creating table: " . mysqli_error($con);
	 }
	 
	 
	 public static function createTableDoctor(){
		 $con=Connection::getConnection();
		 $create_table="CREATE  TABLE IF NOT EXISTS `doctor` (
  						`name` VARCHAR(30) NOT NULL ,
  						`user_name` VARCHAR(20) NOT NULL ,
  						`email` VARCHAR(45) NOT NULL ,
 					    `image` VARCHAR(45) NOT NULL ,
  					    `district` VARCHAR(15) NOT NULL ,
  					    `sex` VARCHAR(10) NOT NULL ,
  					    `age` INT NOT NULL ,
  					    `achieved_degree` VARCHAR(60) NOT NULL ,
 					    `specialized_in` VARCHAR(30) NOT NULL ,
 				   	    `password` VARCHAR(10) NOT NULL ,
 						 PRIMARY KEY (`email`) )";

	  // Execute query
	  if (!mysqli_query($con,$create_table))
		 echo "Error creating table: " . mysqli_error($con);
	 }
	 
	 
	 public static function createTableDoctor_location(){
		 $con=Connection::getConnection();
		 $create_table="CREATE  TABLE IF NOT EXISTS `doctor_location` (
  						 `saturday` VARCHAR(10) NULL ,
  						 `sunday` VARCHAR(10) NULL ,
  						 `monday` VARCHAR(10) NULL ,
 						 `tuesday` VARCHAR(10) NULL ,
  						 `wednesday` VARCHAR(10) NULL ,
 						 `thrusday` VARCHAR(10) NULL ,
 						 `friday` VARCHAR(10) NULL ,
 						 `doctor_email` VARCHAR(45) NOT NULL ,
 						 PRIMARY KEY (`doctor_email`),
 						 FOREIGN KEY (`doctor_email`) REFERENCES `doctor`(`email`)
   						 ON DELETE CASCADE)";

	  // Execute query
	  if (!mysqli_query($con,$create_table))
		 echo "Error creating table: " . mysqli_error($con);
	 }
	 
	 public static function createTableDoctor_description(){
		 $con=Connection::getConnection();
		 $create_table="CREATE  TABLE IF NOT EXISTS `doctor_location` (
  						 `saturday` VARCHAR(60) NULL ,
  						 `sunday` VARCHAR(60) NULL ,
  						 `monday` VARCHAR(60) NULL ,
 						 `tuesday` VARCHAR(60) NULL ,
  						 `wednesday` VARCHAR(60) NULL ,
 						 `thrusday` VARCHAR(60) NULL ,
 						 `friday` VARCHAR(60) NULL ,
 						 `doctor_email` VARCHAR(45) NOT NULL ,
 						 PRIMARY KEY (`doctor_email`),
 						 FOREIGN KEY (`doctor_email`) REFERENCES `doctor`(`email`)
   						 ON DELETE CASCADE)";

	  // Execute query
	  if (!mysqli_query($con,$create_table))
		 echo "Error creating table: " . mysqli_error($con);
	 }
}
?>