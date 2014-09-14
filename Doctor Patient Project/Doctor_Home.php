<?php
/**
 * Created by PhpStorm.
 * User: AURANGO SABBIR
 * Date: 9/14/14
 * Time: 12:40 AM
 */
echo "welcome";
require_once "Connection.php";
session_start();
$con=Connection::getConnection();
$email=$_POST['email'];
$password=$_POST['password'];
$query = "SELECT * FROM doctor WHERE email = '$email' AND password ='$password'";
$result = mysqli_query($con, $query);
$query_num_row = mysqli_num_rows($result);
if ($query_num_row == 1) {
    echo "home page";
} else {
    echo "Incorect Email or Password";
}
?>