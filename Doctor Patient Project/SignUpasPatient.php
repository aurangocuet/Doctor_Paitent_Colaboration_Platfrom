<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SignUp as Patient</title>
    <link href="stylesheet/SignUpasPaitent.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="scripts/effects.js"></script>
    <script type="text/javascript" src="scripts/photo.js"></script>
    <script type="text/javascript" src="scripts/search.js"></script>
</head>

<body bgcolor="#FFFFFF">
<div id="label">
    <img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle"/>
    <hr>
</div>
<div class="notify">
    <div class="notifytext"></div>
    <div class="cross">X</div>
</div>
<div class="help"></div>
<form action="SignUpasPatient_action.php" method="post" enctype="multipart/form-data">
    <table border="0">

        <tr>
            <td>Name</td>
            <td><input type="text" id="name" name="name" class="FormElement" maxlength="45" required></td>
        </tr>
        <tr>
            <td>User_name</td>
            <td><input type="text" id="username" name="username" class="FormElement" maxlength="45" required></td>
        </tr>
        <tr>
            <td>Email adress</td>
            <td><input type="email" id="email" name="email" class="FormElement" maxlength="45" required></td>
        </tr>

        <tr>
            <td>Image</td>
            <td><input type="file" name="photo" id="photo" class="file_upload" onClick="imageDown();"
                       onChange="readURL(this,'img_prev_Photo');" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div id="imgDisplayPhoto" align='center' style="border: 1px solid;height:160px;width:120px;">
                    <img id="img_prev_Photo" src="image/profile.png" alt="select a image" border="0"
                         style="height:160px;width:120px;">
                </div>
            </td>
        </tr>
        <tr>
            <td>Select District</td>
            <td>
                <select name="district" id="district" class="FormElement" maxlength="45" required>
                    <option value="Dhaka" selected>Dhaka</option>
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
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="number" id="age" name="age" class="FormElement" maxlength="45" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" id="password" name="password" class="FormElement" maxlength="45" required></td>
        </tr>
        <tr>
            <td>Re Enter Password</td>
            <td><input type="password" id="confirmpassword" name="re_password" class="FormElement" maxlength="45"
                       required></td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="submit" name="submit" value="submit" class="button">
            </td>
        </tr>
    </table>
</form>
<div id="contact_ifo">Copy right:CUET Contact About the developer</div>
</body>
</html>
