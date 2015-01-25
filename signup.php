<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$email = $_POST['txtemail'];
$fullname = $_POST['txtfullname'];


    
 
include 'config.php';

$q = "INSERT INTO `users` VALUES ('".$username."', '".$password."', '".$email."', '".$fullname."');";

$done = mysqli_query($conn,$q);
if ($done == true ) {
	
	header("Location:cp.php");

	
}
else {
	echo "username / email already exist";
	}




?>