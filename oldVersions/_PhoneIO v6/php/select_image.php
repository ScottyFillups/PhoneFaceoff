<?php 
	include_once("db_conn.php");
	
	function returnImage($name, $conn) {
		$sql = "SELECT image FROM phonedata WHERE name = '" . $name . "'";
		$result = $conn->query($sql);
		
		if ($result) {
			$row = $result->fetch_assoc();
		} else {
			echo "<img class='img-responsive elem-center' src='/images/default.png'>";
		}
		
		if ($row["image"] == "") {
			echo "<img class='img-responsive elem-center' src='/images/default.png'>";
		} else {
			echo "<img class='img-responsive elem-center' src='/images/" . $row["image"] . "'>";
		}
	}
	
	$name = $_REQUEST["name"];
	returnImage($name, $conn);
?>