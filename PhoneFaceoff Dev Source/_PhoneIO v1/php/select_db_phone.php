<?php
	include_once "db_conn.php";
	
	if (mysqli_select_db($conn,"db_phone")) {
		echo "Connection to database successful<br>";
	} else {
		echo "Connection to database failed. REEEEEEEEEEEE<br>";
	}
?> 