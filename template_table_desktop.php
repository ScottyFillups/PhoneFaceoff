<?php 
	/**
	 * Gets user input and echos a table with the respective data (desktop version)
	 * 
	 * @author Philip Scott
	 * @date 2016-05-15
	 * @request		$search1		input from first search field
	 *				$search2		input from second search field
	 *				$search3		input from third search field
	 * @echo 						table for desktop with data retrieved from database
	 */
	
	//require_once("/php/db_conn.php");
	//require_once("/php/select_phone.php");
	
	require_once("/home/phone/public_html/php/db_conn.php");
	require_once("/home/phone/public_html/php/select_phone.php");
	
	$search1 = $_REQUEST['search1'];
	$search2 = $_REQUEST['search2'];
	$search3 = $_REQUEST['search3'];
	
	$row1 = selectPhone($search1, $conn);
	$row2 = selectPhone($search2, $conn);
	$row3 = selectPhone($search3, $conn);
	
	echo "
		<table id='phone-table-desktop'>
			<tr>
				<th>Network</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Technology</td>
				<td>" . $row1["tech"] . "</td>
				<td>" . $row2["tech"] . "</td>
				<td>" . $row3["tech"] . "</td>
			</tr>
			<tr>
				<td>2G bands</td>
				<td>" . $row1["2g_bands"] . "</td>
				<td>" . $row2["2g_bands"] . "</td>
				<td>" . $row3["2g_bands"] . "</td>
			</tr>
			<tr>
				<td>3G Network</td>
				<td>" . $row1["3g_net"] . "</td>
				<td>" . $row2["3g_net"] . "</td>
				<td>" . $row3["3g_net"] . "</td>
			</tr>
			<tr>
				<td>4G Network</td>
				<td>" . $row1["4g_net"] . "</td>
				<td>" . $row2["4g_net"] . "</td>
				<td>" . $row3["4g_net"] . "</td>
			</tr>
			<tr>
				<td>Speed</td>
				<td>" . $row1["speed"] . "</td>
				<td>" . $row2["speed"] . "</td>
				<td>" . $row3["speed"] . "</td>
			</tr>
			<tr>
				<td>GPRS</td>
				<td>" . $row1["gprs"] . "</td>
				<td>" . $row2["gprs"] . "</td>
				<td>" . $row3["gprs"] . "</td>
			</tr>
			<tr>
				<td>EDGE</td>
				<td>" . $row1["edge"] . "</td>
				<td>" . $row2["edge"] . "</td>
				<td>" . $row3["edge"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Launch</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Announced</td>
				<td>" . $row1["announced"] . "</td>
				<td>" . $row2["announced"] . "</td>
				<td>" . $row3["announced"] . "</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>" . $row1["status"] . "</td>
				<td>" . $row2["status"] . "</td>
				<td>" . $row3["status"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Body</th>
				<th>" . $row1["body_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["body_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["body_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Dimensions</td>
				<td>" . $row1["dim"] . "</td>
				<td>" . $row2["dim"] . "</td>
				<td>" . $row3["dim"] . "</td>
			</tr>
			<tr>
				<td>Weight</td>
				<td>" . $row1["weight"] . "</td>
				<td>" . $row2["weight"] . "</td>
				<td>" . $row3["weight"] . "</td>
			</tr>
			<tr>
				<td>SIM</td>
				<td>" . $row1["sim"] . "</td>
				<td>" . $row2["sim"] . "</td>
				<td>" . $row3["sim"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Display</th>
				<th>" . $row1["display_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["display_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["display_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Type</td>
				<td>" . $row1["display_type"] . "</td>
				<td>" . $row2["display_type"] . "</td>
				<td>" . $row3["display_type"] . "</td>
			</tr>
			<tr>
				<td>Size</td>
				<td>" . $row1["display_size"] . "</td>
				<td>" . $row2["display_size"] . "</td>
				<td>" . $row3["display_size"] . "</td>
			</tr>
			<tr>
				<td>Resolution</td>
				<td>" . $row1["res"] . "</td>
				<td>" . $row2["res"] . "</td>
				<td>" . $row3["res"] . "</td>
			</tr>
			<tr>
				<td>Multitouch</td>
				<td>" . $row1["multitouch"] . "</td>
				<td>" . $row2["multitouch"] . "</td>
				<td>" . $row3["multitouch"] . "</td>
			</tr>
			<tr>
				<td>Protection</td>
				<td>" . $row1["protect"] . "</td>
				<td>" . $row2["protect"] . "</td>
				<td>" . $row3["protect"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Platform</th>
				<th>" . $row1["platform_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["platform_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["platform_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>OS</td>
				<td>" . $row1["os"] . "</td>
				<td>" . $row2["os"] . "</td>
				<td>" . $row3["os"] . "</td>
			</tr>
			<tr>
				<td>Chipset</td>
				<td>" . $row1["chipset"] . "</td>
				<td>" . $row2["chipset"] . "</td>
				<td>" . $row3["chipset"] . "</td>
			</tr>
			<tr>
				<td>CPU</td>
				<td>" . $row1["cpu"] . "</td>
				<td>" . $row2["cpu"] . "</td>
				<td>" . $row3["cpu"] . "</td>
			</tr>
			<tr>
				<td>GPU</td>
				<td>" . $row1["gpu"] . "</td>
				<td>" . $row2["gpu"] . "</td>
				<td>" . $row3["gpu"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Memory</th>
				<th>" . $row1["mem_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["mem_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["mem_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Card slot</td>
				<td>" . $row1["card_slot"] . "</td>
				<td>" . $row2["card_slot"] . "</td>
				<td>" . $row3["card_slot"] . "</td>
			</tr>
			<tr>
				<td>Internal</td>
				<td>" . $row1["internal"] . "</td>
				<td>" . $row2["internal"] . "</td>
				<td>" . $row3["internal"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Camera</th>
				<th>" . $row1["cam_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["cam_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["cam_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Primary</td>
				<td>" . $row1["cam_primary"] . "</td>
				<td>" . $row2["cam_primary"] . "</td>
				<td>" . $row3["cam_primary"] . "</td>
			</tr>
			<tr>
				<td>Features</td>
				<td>" . $row1["features"] . "</td>
				<td>" . $row2["features"] . "</td>
				<td>" . $row3["features"] . "</td>
			</tr>
			<tr>
				<td>Video</td>
				<td>" . $row1["video"] . "</td>
				<td>" . $row2["video"] . "</td>
				<td>" . $row3["video"] . "</td>
			</tr>
			<tr>
				<td>Secondary</td>
				<td>" . $row1["cam_secondary"] . "</td>
				<td>" . $row2["cam_secondary"] . "</td>
				<td>" . $row3["cam_secondary"] . "</td>
			</tr>
			
				
			<tr>
				<th>Sound</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Alert types</td>
				<td>" . $row1["alert_types"] . "</td>
				<td>" . $row2["alert_types"] . "</td>
				<td>" . $row3["alert_types"] . "</td>
			</tr>
			<tr>
				<td>Loudspeaker</td>
				<td>" . $row1["loudspk"] . "</td>
				<td>" . $row2["loudspk"] . "</td>
				<td>" . $row3["loudspk"] . "</td>
			</tr>
			<tr>
				<td>3.5mm jack</td>
				<td>" . $row1["3o5mm_jack"] . "</td>
				<td>" . $row2["3o5mm_jack"] . "</td>
				<td>" . $row3["3o5mm_jack"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Comm</th>
				<th>" . $row1["comm_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["comm_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["comm_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>WLAN</td>
				<td>" . $row1["wlan"] . "</td>
				<td>" . $row2["wlan"] . "</td>
				<td>" . $row3["wlan"] . "</td>
			</tr>
			<tr>
				<td>Bluetooth</td>
				<td>" . $row1["bluetooth"] . "</td>
				<td>" . $row2["bluetooth"] . "</td>
				<td>" . $row3["bluetooth"] . "</td>
			</tr>
			<tr>
				<td>GPS</td>
				<td>" . $row1["gps"] . "</td>
				<td>" . $row2["gps"] . "</td>
				<td>" . $row3["gps"] . "</td>
			</tr>
			<tr>
				<td>NFC</td>
				<td>" . $row1["nfc"] . "</td>
				<td>" . $row2["nfc"] . "</td>
				<td>" . $row3["nfc"] . "</td>
			</tr>
			<tr>
				<td>Infrared port</td>
				<td>" . $row1["infr_port"] . "</td>
				<td>" . $row2["infr_port"] . "</td>
				<td>" . $row3["infr_port"] . "</td>
			</tr>
			<tr>
				<td>Radio</td>
				<td>" . $row1["radio"] . "</td>
				<td>" . $row2["radio"] . "</td>
				<td>" . $row3["radio"] . "</td>
			</tr>
			<tr>
				<td>USB</td>
				<td>" . $row1["usb"] . "</td>
				<td>" . $row2["usb"] . "</td>
				<td>" . $row3["usb"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Features</th>
				<th>" . $row1["feat_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["feat_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["feat_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Sensors</td>
				<td>" . $row1["sensors"] . "</td>
				<td>" . $row2["sensors"] . "</td>
				<td>" . $row3["sensors"] . "</td>
			</tr>
			<tr>
				<td>Messaging</td>
				<td>" . $row1["msging"] . "</td>
				<td>" . $row2["msging"] . "</td>
				<td>" . $row3["msging"] . "</td>
			</tr>
			<tr>
				<td>Browser</td>
				<td>" . $row1["browser"] . "</td>
				<td>" . $row2["browser"] . "</td>
				<td>" . $row3["browser"] . "</td>
			</tr>
			<tr>
				<td>Java</td>
				<td>" . $row1["java"] . "</td>
				<td>" . $row2["java"] . "</td>
				<td>" . $row3["java"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Battery</th>
				<th>" . $row1["batt_rating"] . $row1["outOf10"] . "</th>
				<th>" . $row2["batt_rating"] . $row2["outOf10"] . "</th>
				<th>" . $row3["batt_rating"] . $row3["outOf10"] . "</th>
			</tr>
			<tr>
				<td>Type</td>
				<td>" . $row1["battery_type"] . "</td>
				<td>" . $row2["battery_type"] . "</td>
				<td>" . $row3["battery_type"] . "</td>
			</tr>
			<tr>
				<td>Stand-by</td>
				<td>" . $row1["stand_by"] . "</td>
				<td>" . $row2["stand_by"] . "</td>
				<td>" . $row3["stand_by"] . "</td>
			</tr>
			<tr>
				<td>Talk time</td>
				<td>" . $row1["talk_time"] . "</td>
				<td>" . $row2["talk_time"] . "</td>
				<td>" . $row3["talk_time"] . "</td>
			</tr>
			<tr>
				<td>Music play</td>
				<td>" . $row1["music_play"] . "</td>
				<td>" . $row2["music_play"] . "</td>
				<td>" . $row3["music_play"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>Misc</th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Colors</td>
				<td>" . $row1["colors"] . "</td>
				<td>" . $row2["colors"] . "</td>
				<td>" . $row3["colors"] . "</td>
			</tr>
			<tr>
				<td>SAR US</td>
				<td>" . $row1["sar_us"] . "</td>
				<td>" . $row2["sar_us"] . "</td>
				<td>" . $row3["sar_us"] . "</td>
			</tr>
			<tr>
				<td>SAR EU</td>
				<td>" . $row1["sar_eu"] . "</td>
				<td>" . $row2["sar_eu"] . "</td>
				<td>" . $row3["sar_eu"] . "</td>
			</tr>
		</table>
	";
	
	$conn->close();
?>