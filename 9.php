<?php


$names = array("moh","aly","ahmed","saad","moh2","ss");


$n = $_POST['txtnumber'];

for ($i=0;count($names) ; $i++) { 

	if ($n == $names[$i]) {
		echo $i;
		break;
	}





}



?>
