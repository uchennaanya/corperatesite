<?php

	$server = "localhost";
	$user = "root";
	$db = "pin3";
	$password = "";
	
	if ($conn = new mysqli($server, $user, $password, $db)) {
		
	} else {
		
		die(mysqli_error($conn));
		
	}

?>