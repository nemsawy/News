<?php

echo "sss";


$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];	
$is_logedin = false;
include ('config.php');


$sql = "select from users where username = '".$username."' and password = '".$password."'";

$result = mysqli_query($conn,$sql);

while ($res = mysqli_fetch_array(result)){
	$is_logedin = True;
}

if ($is_logedin == true) {
	setcookie("username",$username);
    header("Location:cp.php");
}
else {
	echo "username or password incorrect";
}

?>