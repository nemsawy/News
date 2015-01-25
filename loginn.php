
<html>

<head>
</head>

<body style="background:grey;">


<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['error'])) {
	$error = $_GET['error'];
	if ($error == 'username') {
		header("location:loginerror.html")
	}else {
		echo "error";
	}
}

?>



