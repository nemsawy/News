<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
include 'islogedin.php';

$newsid = $_GET['ID'];

$d = "delete from Neww where id=".$newsid." and username='".$username."'";

mysqli_query($conn,$d);

header("Location:myneww.php");



?>