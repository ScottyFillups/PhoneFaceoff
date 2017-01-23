<?php 
	include_once("db_conn.php");
		
	$sql = "SELECT name FROM phonedata";
	
	if ( $result = $conn->query($sql) ) {
		$hint = "";
		$nameList = array();
		$search = $_REQUEST["search"];
		
		while ( $row = $result->fetch_assoc() ) {
			$nameList[] = $row["name"];			//Magic number: 2 is the column for names. Using numeric keys improves performance
		}
		
		if ($search !== "") {
			//$search = strtolower($search);
			$len = strlen($search);
			foreach ($nameList as $nameElem) {
				$numHints = 0;
				if ( stristr($search, substr($nameElem, 0, $len)) && $numHints <= 3 ) {
					if ($hint === "") {
						$hint = "<div class='suggestion'>" . $nameElem . "</div>";
					} else {
						$hint .= "<div class='suggestion'>" . $nameElem . "</div>";
					}
					$numHints++;
				}
			}
			echo $hint === "" ? "<div class='suggestion suggestion-disabled'>No suggestions</div>" : $hint;
		} else {
			echo " ";
		}

		$conn->close();
	} else {
		echo $conn->error;
	}
?>