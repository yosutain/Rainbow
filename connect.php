<?php 
	$servername = "XXX.X.XX.X";
	$username = "USERNAME";
	$password = "PASSWORD";
	$database = "DATABASE";

	$db = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
?>
