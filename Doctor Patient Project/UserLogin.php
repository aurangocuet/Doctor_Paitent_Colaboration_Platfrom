<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->
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
	//else
		//echo "Connection Successful.<br><br>";
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	//$result = mysqli_query($con,"SELECT * FROM patient WHERE email=".mysql_real_escape_string($email)." AND
	//password=".mysql_real_escape_string($password)."");
	
	//echo "Welcome $result <br>";
	
	$query = "SELECT * FROM patient WHERE email = '$email' AND password ='$password'";
	$result = mysqli_query($con,$query);
	
	//echo  $result;
	$query_num_row = mysqli_num_rows($result);
	if($query_num_row==1)
	{
		//$name = mysqli_re($result,0,'name');
		//echo "Welcome $name";
		/*echo "<table border='1'>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Sex</th>
		<th>Country</th>
		<th>District</th>
		<th>Passsword</th>
		</tr>";*/
		
		//$user_id = mysql_result($result,0,'email');
		//$_SESSON['user_id'] = $user_id;
		//header ('Location: hme.php'); 
		/*$row = mysqli_fetch_array($result);
		$name = $row['name'];
		echo "Welcom $name";
  		echo "<tr>";
  		echo "<td>" . $row['name'] . "</td>";
		echo "Welcome ".$row['name']." ";
  		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['age'] . "</td>";
  		echo "<td>" . $row['sex'] . "</td>";
		echo "<td>" . $row['country'] . "</td>";
  		echo "<td>" . $row['district'] . "</td>";
		echo "<td>" . $row['password'] . "</td>";
  		echo "</tr>";
		
		echo "</table>";*/
	}
	else
	{
		echo "Incorect Email or Password";	
	}
?>