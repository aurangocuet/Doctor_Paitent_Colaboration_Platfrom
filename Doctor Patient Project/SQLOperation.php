<?php
require_once 'Connection.php';
$con=null;
class SQLOperation{	
	public function createTablePatient(){
		 $con=Connection::getConnection();
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
	 }
	 
	 
	 public function insertIntoTable($table_name,$array)
	 {
		 $con=Connection::getConnection();
		 require('StringBuilder.php');
		 $str=new StringBuilder();
		 $str->Append("INSERT INTO ");
		 $str->Append($table_name);
		 $str->Append(" ");
		 $str->Append("(");
		 foreach($array as $key=>$value)
		 {
			 $str->Append($key);
			 $str->Append(",");
		 }
		 $str->Remove($str->Count());
		 $str->Append(")");
		 $str->Append(" ");
		 $str->Append("VALUES");
		 $str->Append("(");
		 reset($array);
		 foreach($array as $key=>$value)
		 {
			 $str->Append("'");
			 $str->Append($value);
			 $str->Append("'");
			 $str->Append(",");
		 }
		 $str->Remove($str->Count());
		 $str->Append(")");
		 echo $str->ToString();
		 if (!mysqli_query($con,$str->ToString()))
		   echo "Error creating table: " . mysqli_error($con);
	 }
}
?>