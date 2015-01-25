<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

$keyword = $_GET['txtkeyword'];

$q = "select * from Neww where News like '%".$keyword."%'";

$result = mysqli_query($conn, $q);

while ($res = mysqli_fetch_array($result)) {
	echo $res['Subject'];
}









?>