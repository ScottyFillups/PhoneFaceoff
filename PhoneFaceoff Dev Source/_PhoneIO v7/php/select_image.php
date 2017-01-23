<?php 
	/**
	 * Defines and calls the returnImage function, which echos 
	 * updated phone image
	 * 
	 * @author Philip Scott
	 * @date 2016-05-13
	 * @request		$name		name of phone
	 */
	
	// Establish database connection
	require_once("db_conn.php");
	
	/**
	 * Gets phone name and outputs html encoding for its image
	 *
	 * @param		$name		name of phone
	 * 				$conn		database connection
	 * @echo					html encoding for image
	 */
	function returnImage($name, $conn) {
		$name = $conn->real_escape_string($name);
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