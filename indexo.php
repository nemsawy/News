<?php

include 'config.php';

$sql = "select * from Neww";

$result = mysqli_query($conn,$sql);

while ($res = mysqli_fetch_array($result)) {


echo "Title >> <a href='Neww.php?ID=".$res['ID']."'>".$res['Subject']."</a><br />";

echo "Describtion " . $res['Describtion']."<br />";

echo "<hr />";


}

?>

<title>All news</title>

  <body style="background: #95F2D9;">
  </body>