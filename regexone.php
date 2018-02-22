<?php
	$str1 = "ABCDE1234F";
	$str2 = "ABCDE1234M";
	$pan1 = "/[A-Z]{5}[0-9]{4}\F/";
	$pan2 = "/[A-Z]{5}[0-9]{4}\M/";
	if ((preg_match($pan1,$str1)) || (preg_match($pan2,$str2))) {
		echo "The Date is found";
	}
	else {
		echo "Not found";
	}
 ?>
