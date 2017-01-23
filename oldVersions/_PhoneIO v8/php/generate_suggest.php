<?php 
	/**
	 * Generates suggestions by matching passed search term with phone name substrings
	 * If the search term matches a substring in the phone name, starting from the beginning, it will be echoed
	 * Limit of 3 suggestions to avoid excessive page length
	 *
	 * @author Philip Scott
	 * @date 2016-05-22
	 * @request		search		search term
	 * @echo					html encoding for the suggestion elements
	 */
	
	// Establish database connection
	require_once("db_conn.php");
		
	$sql = "SELECT name FROM phonedata";
	
	if ( $result = $conn->query($sql) ) {
		$hint = "";
		$nameList = array();
		$search = $_REQUEST["search"];
		$search = $conn->real_escape_string($search);
		
		while ( $row = $result->fetch_assoc() ) {
			$nameList[] = $row["name"];	
		}
		
		if ($search !== "") {
			$len = strlen($search);
			foreach ($nameList as $nameElem) {
				$numHints = 0;
				if ( strtolower($search) === strtolower($nameElem) ) {
					echo " ";
					exit();
				}
				else if ( stristr($search, substr($nameElem, 0, $len)) && $numHints <= 3 ) {
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