<?php
	$str1 = "HTTPS://http://www.google.com";
	$str2 = "WWW.google.com";
	$str3 = "google.com";
	$pan1 = "((https://|http://|w{3}\.)+[a-z]{1,180}\.[a-z]{2,10})";
	$pan2 = "(www\.)+([a-z]{1,180}\.)+([a-z]{2,10})";
	$pan3 = "\b[a-z]{1,180}\.[a-z]{1,3}\b";
	if ((preg_match($pan1,$str1)) || (preg_match($pan2,$str2)) || (preg_match($pan3,$str2))) {
		echo "The Date is found";
	}
	else {
		echo "Not found";
	}
 ?>
