<?php
	/**
	 * Establishes connection with database
	 * 
	 * @author Philip Scott
	 * @date 2016-05-09
	 */
	
	$servername = "localhost";
	$username = "some_username";
	$password = "some_password";
	$dbname = "some_dbname";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Display error if connection failed
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error . "<br>");
	}
?>
