<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$id = $_GET['ID'];
include 'config.php';
$sql = "select * from Neww where ID=".$id;
$result = mysqli_query($conn,$sql);
while ($res = mysqli_fetch_array($result)) {
      echo "Title: ".$res['Subject']."<br />"."<br />";
      echo "Describtion: ".$res['Describtion']."<br />"."<br />";
      echo "Username: ".$res['Username']."<br />"."<br />";
      echo "Article: ".$res['News']."<br />"."<br />";
echo "<hr />";
}
?>


  <body style="background: #95F2D9;">
  </body>