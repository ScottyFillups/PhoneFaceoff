<?php
	$servername = "localhost";
	$username = "phone_ADMIN";
	$password = "1j9o5h0n";
	$dbname = "phone_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error . "<br>");
	}
?>