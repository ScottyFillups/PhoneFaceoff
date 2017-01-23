<?php 
	include_once("/php/db_conn.php");
		
	$hint = "";
	$nameList = array();
	$search = $_REQUEST["search"];

	$sql = "SELECT name FROM photodata";
	$result = $conn->query($sql);
	
	while ($row = $result->fetch_array(MYSQLI_NUM)) {
		$nameList = $row[2];			//Magic number: 2 is the column for names. Using numeric keys improves performance
	}
	
	if ($search !== "") {
		//$search = strtolower($search);
		$len = strlen($search);
		foreach ($nameList as $nameElem) {
			if ( stristr($search, substr($nameElem, 0, $len) ) {
				if ($hint === "") {
					$hint = $name;
				} else {
					$hint .= ", " . $name;
				}
			}
		}
	}
	
	echo $hint === "" ? "no suggestion" : $hint;
	
	$conn->close();
?>