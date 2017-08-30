<?php
	/**
	 * Establishes connection with database
	 * 
	 * @author Philip Scott
	 * @date 2016-05-09
	 */
	
	$servername = "localhost";
	$username = "phone_ADMIN";
	$password = "d1s4rr4y1s4v1rus";
	$dbname = "phone_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Display error if connection failed
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error . "<br>");
	}
?>
