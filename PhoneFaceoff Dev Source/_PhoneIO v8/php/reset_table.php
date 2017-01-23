<?php
    /**
	 * Re-creates the phonedata table
	 *
	 * @author Philip Scott
	 * @date 2016-05-05
	 * @echo					success and/or error messages regarding table reset
	 */
	
	// Establish database connection
	require_once "db_conn.php";
	
	$sql = "DROP TABLE IF EXISTS phonedata";
	
	if ($conn->query($sql)) {
		echo "Tables dropped successfully<br>";
	} else {
		echo "Error dropping tables<br>";
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS phonedata (
				id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				image VARCHAR(255),
				name VARCHAR(255),
				tech VARCHAR(255),
				2g_bands VARCHAR(255),
				3g_net VARCHAR(255),
				4g_net VARCHAR(255),
				speed VARCHAR(255),
				gprs VARCHAR(255),
				edge VARCHAR(255),
				announced VARCHAR(255),
				status VARCHAR(255),
				dim VARCHAR(255),
				weight VARCHAR(255),
				sim VARCHAR(255),
				display_type VARCHAR(255),
				display_size VARCHAR(255),
				res VARCHAR(255),
				multitouch VARCHAR(255),
				protect VARCHAR(255),
				os VARCHAR(255),
				chipset VARCHAR(255),
				cpu VARCHAR(255),
				gpu VARCHAR(255),
				card_slot VARCHAR(255),
				internal VARCHAR(255),
				cam_primary VARCHAR(255),
				features VARCHAR(255),
				video VARCHAR(255),
				cam_secondary VARCHAR(255),
				alert_types VARCHAR(255),
				loudspk VARCHAR(255),
				3o5mm_jack VARCHAR(255),
				wlan VARCHAR(255),
				bluetooth VARCHAR(255),
				gps VARCHAR(255),
				nfc VARCHAR(255),
				infr_port VARCHAR(255),
				radio VARCHAR(255),
				usb VARCHAR(255),
				sensors VARCHAR(255),
				msging VARCHAR(255),
				browser VARCHAR(255),
				java VARCHAR(255),
				battery_type VARCHAR(255),
				stand_by VARCHAR(255),
				talk_time VARCHAR(255),
				music_play VARCHAR(255),
				colors VARCHAR(255),
				sar_us VARCHAR(255),
				sar_eu VARCHAR(255),
				network_rating VARCHAR(3),
				launch_rating VARCHAR(3),
				body_rating VARCHAR(3),
				display_rating VARCHAR(3),
				platform_rating VARCHAR(3),
				mem_rating VARCHAR(3),
				cam_rating VARCHAR(3),
				sound_rating VARCHAR(3),
				comm_rating VARCHAR(3),
				feat_rating VARCHAR(3),
				batt_rating VARCHAR(3),
				misc_rating VARCHAR(3),
				outOf10 VARCHAR(5) DEFAULT ' / 10'
			)";
			
	if ($conn->query($sql)) {
		echo "Tables created successfully<br>";
	} else {
		echo "Error creating tables<br>";
	}

	$conn->close();
?>
