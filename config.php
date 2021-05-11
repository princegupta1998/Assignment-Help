<?php  
	$db_user = "webassig_webassign1";
	$db_pass = "-wcDi1x~Sn0-";
	$db_name = "webassig_webassignment";

	$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>