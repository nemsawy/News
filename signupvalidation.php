<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

function testStringIsNotEmpty($string){

	if (empty($string)) {
	    return false;
	  } else {
	  	return true;
	  }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$email = $_POST['txtemail'];
$fullname = $_POST['txtfullname'];

if (testStringIsNotEmpty($email)){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
    }else {
    		echo "Email is correct";	

     $email = ($_POST['txtemail']);
  	}
} else {
	echo "Email is required";
}

/*
   
    
 
include 'config.php';

$q = "INSERT INTO `users` VALUES ('".$username."', '".$password."', '".$email."', '".$fullname."');";

$done = mysqli_query($conn,$q);
if ($done == true ) {
	
	header("Location:news.html");

	
}
else {
	echo "username / email already exist";
	}




?>