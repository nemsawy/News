<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';
$sql = "select * from Neww";
$result = mysqli_query($conn,$sql);

	
while ($res = mysqli_fetch_array($result)) {
echo "Title >> <a href='mynews.php?Username=".$res['Username']."'>".$res['Subject']."</a><br />";
echo "Describtion " . $res['Describtion']."<br />";
echo "<hr />";
}
?>
  <body style="background: #95F2D9;">
  </body>