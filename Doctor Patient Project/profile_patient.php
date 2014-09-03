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
	<title>SignUp as Patient</title>
<link href="stylesheet/SignUpasPaitent.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF">
<div id="label">
    	<img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle" />
    	<hr>
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
</body>
</html>
