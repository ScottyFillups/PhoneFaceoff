<?php 
	/**
	 * Defines and calls the generateRating function, which echos 
	 * updated phone image
	 * 
	 * @author Philip Scott
	 * @date 2016-06-09
	 * @request		$name		name of phone
	 */
	
	// Establish database connection
	require_once("db_conn.php");
	
	/**
	 * Gets phone name and outputs the phone's average rating
	 *
	 * @param		$name		name of phone
	 * 				$conn		database connection
	 * @echo					html encoding for image
	 */
	function generateRating($name, $conn) {
		$name = $conn->real_escape_string($name);
		$sql = "SELECT body_rating, 
					   display_rating, 
					   platform_rating, 
					   mem_rating,
					   cam_rating,
					   comm_rating,
					   feat_rating,
					   batt_rating
				FROM phonedata WHERE name = '" . $name . "'";
				
		$result = $conn->query($sql);
		if ($result && $name) {
			$row = $result->fetch_assoc();
		} else {
			$conn->close();
			exit();
		}
		if (!$row) {
			$conn->close();
			exit();
		}
		
		$body = floatval( $row["body_rating"] );
		$display = floatval( $row["display_rating"] );
		$platform = floatval( $row["platform_rating"] );
		$mem = floatval( $row["mem_rating"] );
		$cam = floatval( $row["cam_rating"] );
		$comm = floatval( $row["comm_rating"] );
		$feat = floatval( $row["feat_rating"] );
		$batt = floatval( $row["batt_rating"] );
		
		$avg = ($body + $display + $platform + $mem + $cam + $comm + $feat + $batt) / 8;
		$avg = round($avg, 1);
		
		echo "<div class='rating-container elem-center'>" . $avg . "</div>";
	}
	
	$name = $_REQUEST["name"];
	generateRating($name, $conn);
?>