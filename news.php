<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
include 'islogedin.php';


$subject = $_POST['subject'];
$describtion = $_POST['desc'];
$news = $_POST['news'];


$sql = "INSERT INTO `Neww` VALUES (NULL, '".$subject."', '".$describtion."', '".$news."', '".$username."')";

$done = mysqli_query($conn, $sql);



if ($done == true ) {

	header("Location:newsphp.html");	


}else {
	header("Location:newserror.html");
}

?>



