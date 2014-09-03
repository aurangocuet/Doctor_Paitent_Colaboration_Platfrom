<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->

<?php
session_start();
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Patient's Profile</title>
<link href="stylesheet/profile_patient.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF">
<div id="label">
    	<img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle" />
    	<hr>
</div>
<div id="nav">
  <ul id="navigationpanel" class="MenuBarHorizontal">
    <li><a href="hme.php">Home</a></li>
    <li><a href="#">Find a Doctor</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="UserLogin.html">Log Out</a></li>
  </ul>
</div>
<div id="edit_button">
  <ul id="edit" class="MenuBarHorizontal">
<li><a href="Edit_Patient_Profile.html">Edit Profile</a></li>
  </ul>
</div>
<div id="apDiv2"></div>
<div id="contact_ifo">Copy right:CUET Contact   About the    developer	</div>
<form action="SignUpasPatient.php" method="post">
	<table border="0">
        	        
            <tr>
            	<td>Name</td>
   				<td> <?php echo "$_SESSION[patient_name]" ?></td>
            </tr>
   			<tr>
            	<td>Email adress</td>
   				<td><?php echo  "$_SESSION[patient_email]" ?></td>
            </tr>
            <tr>
            	<td>Age</td>
   				<td><?php echo "$_SESSION[patient_age]" ?></td>
            </tr>
            <tr>
            	<td>Sex</td>
   				<td><?php echo "$_SESSION[patient_sex]" ?></td>
            </tr>
            <tr>
            	<td>Your Country</td>
   				<td><?php echo "$_SESSION[patient_country]" ?></td>
            </tr>
            <tr>
            	<td>Your District</td>
   				<td><?php echo "$_SESSION[patient_district]" ?></td>
            </tr>
            </tr>
  </table>
</form>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
