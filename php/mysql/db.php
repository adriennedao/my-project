<?php

$connection = mysqli_connect("localhost", "root", "", "loginapp");
	if(!$connection) {
	echo "We are connected";
	
	die("Database connection failed");
	}



?>