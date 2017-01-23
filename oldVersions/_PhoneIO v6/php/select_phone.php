<?php
	function SelectPhone($search, $conn) {
		//Below is an example of a prepared statement. This works:
		$sql = $conn->prepare("SELECT name FROM phonedata");
		$sql->execute();
		$phone = [];
		foreach ($sql->get_result() as $row)
		{
			$phone[] = $row['name'];
		}
		$index = array_search(strtolower($search), array_map("strtolower", $phone));
		
		if ($index) {
			//In practice, the "WHERE" will equal a php variable the user input. " 'WHERE name = ' . $input "
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