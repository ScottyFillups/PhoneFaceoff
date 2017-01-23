<?php 
	include_once("/php/db_conn.php");
	//In practice, the "WHERE" will equal a php variable the user input. " 'WHERE name = ' . $input "
	$sql = "SELECT image FROM phonedata WHERE id = '1'";	//It might need to be 1 instead of '1'
	$result = $conn->query($sql);
	
	if ($result) {
		$row = $result->fetch_assoc();
	} else {
		echo "/images/default.png";
		
		$conn->close();
		exit();
	}
	
	echo "/images/" . $row["image"];
?>