<?php

include 'islogedin.php';
include 'config.php';

$s = "select * from Neww where Username='".$username."'";
$result = mysqli_query($conn,$s);
while ($res = mysqli_fetch_array($result)) {
	echo "Title >> <a href='Neww.php?ID=".$res['ID']."'>".$res['Subject']."</a><< <a href='editnews.php?ID=".$res['ID']."'>Edit News</a><<</a><< <a href='deletenews.php?ID=".$res['ID']."'>Delete</a><br />";

echo "Describtion " . $res['Describtion']."<br />";

echo "<hr />";


}

?>

<title>My news</title>

  <body style="background: #95F2D9;">
  </body>


