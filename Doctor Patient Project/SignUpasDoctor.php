<!--Name: Nazmul Islam
	Institution: CUET,Cittagong,Bangladesh
	Dept.CSE
	Level:3
	Term:1
-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SignUp as Doctor</title>
    <link href="stylesheet/SignUpasDoctor.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="scripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="scripts/effects.js"></script>
    <script type="text/javascript" src="scripts/photo.js"></script>
    <script type="text/javascript" src="scripts/searchd.js"></script>
</head>

<body bgcolor="#FFFFFF">
<div class="help"></div>
<div id="label">
    <img src="image/logo3.png" alt="LOGO" width="500" height="193" align="middle"/>
    <hr>
</div>
<div class="notify">
    <div class="notifytext"></div>
    <div class="cross">X</div>
</div>
<div id="apDiv2"></div>
<form action="SignUpasDoctor_action.php" method="post" enctype="multipart/form-data">
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
            <td>Achived Degree</td>
            <td><input type="text" id="Achived_Degree" name="achived_degree" class="FormElement" maxlength="95" required></td>
        </tr>
            
        <tr>
            	<td>Specialist In</td>
   				<td>
                		<select name="specialist_in"  id= "specialist_in"  maxlength="45" class="FormElement"  required>
                        <option value="Addiction psychiatrist" selected >Addiction psychiatrist</option>
                        <option value="Allergist (immunologist)" selected >Allergist (immunologist)</option>
                        <option value="Anesthesiologist" selected >Anesthesiologist</option>
                        <option value="Cardiac electrophysiologist" selected >Cardiac electrophysiologist</option>
                        <option value="Cardiologist" selected >Cardiologist</option>
                        <option value="Cardiovascular surgeon" selected >Cardiovascular surgeon</option>
                        <option value="Colon and rectal surgeon" selected >Colon and rectal surgeon</option>
                        <option value="Dermatologist" selected >Dermatologist</option>
                        <option value="Doctor of osteopathy (DO)" selected >Doctor of osteopathy (DO)</option>
                        <option value="Endocrinologist" selected >Endocrinologist</option>
                        <option value="Gastroenterologist" selected >Gastroenterologist</option>
                        <option value="Gynecologist" selected >Gynecologist</option>
                        <option value="Madicine" selected >Madicine</option>
                        <option value="Neonatologist" selected >Neonatologist</option>
                        <option value="Nephrologist" selected >Nephrologist</option>
                        <option value="Neurologist" selected >Neurologist</option>
                        <option value="Oncologist" selected >Oncologist</option>
                        <option value="Oral surgeon" selected >Oral surgeon</option>
                        <option value="Orthopedic surgeon" selected >Orthopedic surgeon</option>
                        <option value="Otolaryngologist (ear, nose, and throat specialist)" selected >Otolaryngologist (ear, nose, and throat specialist)</option>
                        <option value="Pain management specialist" selected >Pain management specialist</option>
                        <option value="Pathologist" selected >Pathologist</option>
                        <option value="Phychiatrist" selected >Phychiatrist</option>
                        <option value="Plastic surgeon" selected >Plastic surgeon</option>
                        <option value="Surgeon" selected >Surgeon</option>
                        <option value="--" selected >--</option>
                    </select>
                 </td>
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
