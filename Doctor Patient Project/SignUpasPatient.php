<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SignUp as Patient</title>
	<link href="stylesheet/SignUpasPaitent.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="scripts/effects.js"></script>
    <script type="text/javascript" src="scripts/photo.js"></script>
    <script type="text/javascript" src="scripts/search.js"></script>
</head>

<body bgcolor="#FFFFFF">
<div id="label">
    	<img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle" />
    	<hr>
</div>
<div id="apDiv2"></div>
<div id="contact_ifo">Copy right:CUET Contact   About the    developer	</div>
<?php
	require_once 'Connection.php';
	
	if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['sex'
		]) && isset($_POST['district']) && isset($_POST['password']) && isset($_POST['re_password']))
	{
			$name = strtolower(htmlentities($_POST['name']));
			$username = htmlentities($_POST['username']);
			$email = htmlentities($_POST['email']);
			$age = strtolower(htmlentities($_POST['age']));
			$sex = strtolower(htmlentities($_POST['sex']));
			$district = strtolower(htmlentities($_POST['district']));
			$password = htmlentities($_POST['password']);
			$re_password =htmlentities($_POST['re_password']);
			$filename = htmlentities(basename($_FILES['file']['name']));
 			$size = $_FILES['file']['size'];
  			$type = $_FILES['file']['type'];
  			$tmp_name = $_FILES['file']['tmp_name'];
  			$extension = strtolower(substr($filename, strpos($filename,'.')+1));
			$max_size = 2097152;
			$location = 'profiles/';
			if(!empty($name) && !empty($username) && !empty($filename) && !empty($age) && !empty($sex) && !empty($city) && !empty
			($email) && !empty($password) && !empty($re_password))
			{
						$query_username = "SELECT * FROM `patient` WHERE  `user_name` LIKE  '".$username."'";
						$query_username_run = mysql_query($query_username);
						$query_username_num_rows = mysql_num_rows($query_username_run);
						$query_email = "SELECT * FROM  `signup` WHERE  `email` LIKE  '".$email."'";
						$query_email_run = mysql_query($query_email);
						$query_email_num_rows = mysql_num_rows($query_email_run);
						if($query_username_num_rows == 1)
						{
							 echo'<script type="text/javascript">
									$(".notify").slideDown(1000);
									$(".cross").click(function(e) {$(".notify").slideUp(1000);});
									$(".notify > .notifytext").html("Username already chosen");
									</script>';	
						}
						else if($query_email_num_rows >=1)
						{
							echo'<script type="text/javascript">
									$(".notify").slideDown(1000);
									$(".cross").click(function(e) {
									$(".notify").slideUp(1000);
										});
									$(".notify > .notifytext").html("Email Id already registered.");
									</script>';	
						}
						else if($password != $confirmpassword)
						{
							echo'<script type="text/javascript">
							$(".notify").slideDown(1000);
							$(".cross").click(function(e) {$(".notify").slideUp(1000);});
							$(".notify > .notifytext").html("Password combination does not match.");
							</script>';	
						}
						else
						{
							if(($extension =='jpg' || $extension == 'jpeg') && $size < $max_size && ($type=='image/jpg' || $type
							=='image/jpeg'))
							{
								 move_uploaded_file($tmp_name,$location.$filename);
								 $extension = '.'.$extension;
								 rename($location.$filename,$location.$username.$extension);
								 
								 $query = "INSERT INTO `prject31`.`patient` (`name`, `user_name`, `email`, `image`, `district`, `sex`
								 , `age`, `password`) VALUES ('".$name."', '".$username."', '".$email."',
								  '".$location.$username.$extension."','".$district."', '".$sex."', '".$age."', '".$password."')";
								 
								 if($query_run = mysql_query($query))
								 {
									echo'<script type="text/javascript">
										$(".notify").slideDown(1000);
										$(\'form\').slideUp(1000);
										$(".cross").click(function(e) {$(".notify").slideUp(1000);});
										
										$(".notify > .notifytext").html("You\'ve successfully signed up. Click to go on <a href=
										\'userlogin.php\'>login page</a>");
										</script>';	
								}
							}
							else 
							{
								 echo'<script type="text/javascript">
										$(".notify").slideDown(1000);
										$(\'form\').slideUp(1000);
										$(".cross").click(function(e) {
										$(".notify").slideUp(1000);
										});
										
										$(".notify > .notifytext").html("File should be less than 2 MB and JPEG/JPG");
										
										</script>';	
							 }
							 
					}
		
				}
				else 
				{
					echo'<script type="text/javascript">
							$(".notify").slideDown(1000);
							$(".cross").click(function(e) {
							$(".notify").slideUp(1000);
								});
							$(".notify > .notifytext").html("Please fill all the fields.");
							</script>';	
					}		
				}
?>
<form action="SignUpasPatient.php" method="post">
	<table border="0">
        	        
            <tr>
            	<td>Name</td>
   				<td><input type="text" name="name" class="FormElement" maxlength="45" required></td>
            </tr>
            <tr>
            	<td>User_name</td>
   				<td><input type="text" name="username" class="FormElement" maxlength="45" required></td>
            </tr>
            <tr>
            	<td>Email adress</td>
   				<td><input type="email" name="email" class="FormElement" maxlength="45" required></td>
            </tr>
            
            <tr>
            	<td>Image</td>
   				<td><input type="file" name="file" id="photo" class="file_upload" onClick="imageDown();" onChange="readURL(this,'img_prev_Photo');" required></td>
            </tr>
            <tr>
                <td></td>
                <td><div id="imgDisplayPhoto" align='center' style="border: 1px solid;height:160px;width:120px;">
                  <img id="img_prev_Photo" src="image/profile.png"  alt="select a image" border="0"  style="height:160px;width:120px;">
                </div> </td>
            </tr>
            <tr>
            	<td>Select District</td>
   				<td>
               	  <select name="district" id="district" class="FormElement" maxlength="45" required>
                    	<option value="Dhaka" selected >Dhaka</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Sylet">Sylet</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Rangpur">Rangpur</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>Sex</td>
   				<td>  
               	  <select name="sex" id="sex" class="FormElement" maxlength="45" required>
                    	<option value="Male" selected >Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
	  <tr>
            	<td>Age</td>
   				<td><input type="number" name="age" class="FormElement" maxlength="45" required></td>
            </tr>
	  <tr>
            	<td>Password</td>
    			<td><input type="password" name="password" class="FormElement" maxlength="45" required></td>
            </tr>
	  <tr>
            	<td>Re Enter Password</td>
   				<td><input type="password" name="re_password" class="FormElement" maxlength="45" required></td>
	  </tr>   
	  <tr>
            	<td>
                </td>
                <td>
                  	<input type="submit" value="submit" class="button">
                </td>
            </tr>
  </table>
</form>
</body>
</html>
