<?php 

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "loginsystem";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	if (!$conn) {
		echo "Failed to connect: " .mysqli_connect_error();
	}

	if(mysqli_ping($conn)) {
		echo "Connection successful.";
	}

	else {
		echo "Error: " . mysqli_error($conn);
	}