<?php
	/**
	 * Selects phone row from database based on passed phone name
	 * If input field is empty, return an empty row
	 * 
	 * @author Philip Scott
	 * @date 2016-05-13
	 * @param		$search		phone name
	 *				$conn		database connection
	 * @return		$row		all the data stored in a phone row
	 */
	
	function selectPhone($search, $conn) {
		$sql = $conn->prepare("SELECT name FROM phonedata");
		$sql->execute();
		$phone = [];
		foreach ($sql->get_result() as $row)
		{
			$phone[] = $row['name'];
		}
		
		$search = $conn->real_escape_string($search);
		$index = array_search(strtolower($search), array_map("strtolower", $phone));
		
		if ($index) {
			$sql = "SELECT * FROM phonedata WHERE id = '" . ($index + 1) . "'";
		} else {
			$sql = "SELECT * FROM phonedata WHERE id = '1'";
		}
		
		$result = $conn->query($sql);
		if ($result) {
			$row = $result->fetch_assoc();
			return $row;
		} else {
			echo "<br>Error retrieving data";
			
			$conn->close();
			exit();
		}
	}
?>