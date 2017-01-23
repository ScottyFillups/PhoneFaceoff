<?php
	include_once "db_conn.php";
	
	$sql = "TRUNCATE phonedata";

	if ($conn->query($sql)) {
		echo "Data truncated successfully<br>";
	} else {
		echo "Error truncating data in table<br>";
	}

	$sql = "INSERT INTO phonedata (
				image,
				name,
				tech,
				2g_bands,
				3g_net,
				4g_net,
				speed,
				gprs,
				edge,
				announced,
				status,
				dim,
				weight,
				sim,
				display_type,
				display_size,
				res,
				multitouch,
				protect,
				os,
				chipset,
				cpu,
				gpu,
				card_slot,
				internal,
				cam_primary,
				features,
				video,
				cam_secondary,
				alert_types,
				loudspk,
				3o5mm_jack,
				wlan,
				bluetooth,
				gps,
				nfc,
				infr_port,
				radio,
				usb,
				sensors,
				msging,
				browser,
				java,
				battery_type,
				stand_by,
				talk_time,
				music_play,
				colors,
				sar_us,
				sar_eu
			) VALUES (
				'motorola_moto_g4_play.png',
				'Motorola Moto G4 Play',
				'GSM / CDMA / HSPA / LTE',
				'GSM 850 / 900 / 1800 / 1900<br>CDMA 800 / 1900 - XT1607, XT1609',
				'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - XT1607',
				'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100), 5(850), 7(2600), 8(900), 12(700), 13(700), 17(700), 25(1900), 26(850), 41(2500) - XT1607<br>LTE band 2(1900), 4(1700/2100), 5(850), 13(700) - XT1609',
				'HSPA 42.2/5.76 Mbps, LTE Cat4 150/50 Mbps, EV-DO Rev.A 3.1 Mbps',
				'Yes',
				'Yes',
				'2016, May',
				'Coming soon',
				'144.4 x 72 x 9.9 mm (5.69 x 2.83 x 0.39 in)',
				'137 g (4.83 oz)',
				'Micro-SIM',
				'IPS LCD capacitive touchscreen, 16M colors',
				'5.0 inches (~66.3% screen-to-body ratio)',
				'720 x 1280 pixels (~294 ppi pixel density)',
				'Yes',
				'',
				'Android OS, v6.0.1 (Marshmallow)',
				'Qualcomm MSM8916 Snapdragon 410',
				'Quad-core 1.2 GHz Cortex-A53',
				'Adreno 306',    
				'microSD, up to 128 GB (dedicated slot)',
				'8/16 GB, 1/2 GB RAM',
				'8 MP, f/2.2, autofocus, LED flash',
				'Geo-tagging, touch focus, face detection, panorama, HDR',
				'1080p@30fps',
				'5 MP, f/2.2',
				'Vibration, MP3, WAV ringtones',
				'Yes',
				'Yes',
				'Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot',
				'v4.1, A2DP, LE',
				'Yes, with A-GPS, GLONASS, BDS',
				'Yes (optional)',
				'No',
				'FM radio',
				'microUSB v2.0',
				'Accelerometer, proximity',
				'SMS(threaded view), MMS, Email, Push Email, IM',
				'HTML5',
				'No',
				'Non-removable Li-Ion 2800 mAh battery',
				'',    
				'',
				'',
				'Black, White',
				'',
				''
			)";
			
	if ($conn->query($sql)) {
		echo "Data inserted successfully";
	} else {
		echo "Error inserting data into table";
	}

	$conn->close();
?>