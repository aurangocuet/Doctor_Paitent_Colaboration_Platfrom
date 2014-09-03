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
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<link href="stylesheet/hme.css" rel="stylesheet" type="text/css">

 
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF">

<div id="label">
    	<img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle" class="img"/>
    	<hr>
</div>
<div id="footer"> <p class="copyright">Copy right:CUET Contact  About the developer</p></div>


<div id="nav">
  <ul id="navigationpanel" class="MenuBarHorizontal">
    <li><a href="hme.php">Home</a></li>
    <li><a href="#">Find a Doctor</a></li>
    <li><a href="AboutUs.html">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="UserLogin.html">Log Out</a></li>
  </ul>
</div>


<div id="WelcomeMessage" class="status_name">Welcome <?php echo "$_SESSION[patient_name]" ?></div>
<div id="profile_button">
  <ul id="view_profile" class="MenuBarHorizontal">
    <li><a href="profile_patient.php">View Profile</a></li>
  </ul>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("navigationpanel", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("view_profile", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
