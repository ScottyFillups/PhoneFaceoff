<?php 
	/**
	 * Displays all the phones in the database on a single page
	 * Shows an image and its name
	 * 
	 * @author Philip Scott
	 * @date 2016-06-09
	 * @echo				HTML encoding for phone names and images
	 */
	
	// Establish database connection
	require_once("db_conn.php");
		
	$sql = "SELECT image, name FROM phonedata";
	
	if ( $result = $conn->query($sql) ) {
		$imageList = array();
		$nameList = array();
		
		while ( $row = $result->fetch_assoc() ) {
			$imageList[] = $row["image"];
			$nameList[] = $row["name"];				
		}
		for ($i = 0; $i < count($imageList); $i++ ) {
			if (!$imageList[$i]) {
				echo " ";
			}
			else if ($i === 1) {
				echo   "<div class='row'>
							<div class='col-md-3'>
								<div class='img-list'>
									<img height='200' width='135' src='/images/" . $imageList[$i] . "' />
									<br>
									<p>" . $nameList[$i] . "</p>
								</div>
							</div>";
			}
			else if ($i % 5 === 0) {
				echo   "</div>
						<div class='row'>
							<div class='col-md-3'>
								<div class='img-list'>
									<img height='200' width='135' src='/images/" . $imageList[$i] . "' />
									<br>
									<p>" . $nameList[$i] . "</p>
								</div>
							</div>";
			}
			else if ( ($i % 5 === 0) && ($i + 1 === count($imageList)) ) {
				echo   "</div>
						<div class='row'>
							<div class='col-md-3'>
								<div class='img-list'>
									<img height='200' width='135' src='/images/" . $imageList[$i] . "' />
									<br>
									<p>" . $nameList[$i] . "</p>
								</div>
							</div>
						</div>";
			}
			else if ( $i + 1 === count($imageList) ) {
				echo    "<div class='col-md-3'>
							<div class='img-list'>
								<img height='200' width='135' src='/images/" . $imageList[$i] . "' />
								<br>
								<p>" . $nameList[$i] . "</p>
							</div>
						</div>
					</div>";
			}
			else if ( $imageList[$i] ) {
				echo    "<div class='col-md-3'>
							<div class='img-list'>
								<img height='200' width='135' src='/images/" . $imageList[$i] . "' />
								<br>
								<p>" . $nameList[$i] . "</p>
							</div>
						</div>";
			}
		}
		$conn->close();
	} else {
		echo $conn->error;
	}
?>