<?php
	include_once "db_conn.php";
	
	$sql = "CREATE DATABASE IF NOT EXISTS db_phone";
	if (mysqli_query($conn, $sql)) {
		echo "Database present or created successfully";
	} else {
		echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?> 