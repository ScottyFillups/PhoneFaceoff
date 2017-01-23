<?php 
	include_once("/php/db_conn.php");
	include_once("/php/select_phone.php");
	
	$search1 = $_REQUEST['search1'];
	$search2 = $_REQUEST['search2'];
	
	$row1 = SelectPhone($search1, $conn);
	$row2 = SelectPhone($search2, $conn);

	echo "
		<table id='phone-table-mobile'>
			<tr>
				<th>" . $row1["network_rating"] . $row1["outOf10"] . "</th>
				<th>Network</th>
				<th>" . $row2["network_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["tech"] . "</td>
				<td>Technology</td>
				<td>" . $row2["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["2g_bands"] . "</td>
				<td>2G bands</td>
				<td>" . $row2["2g_bands"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["3g_net"] . "</td>
				<td>3G Network</td>
				<td>" . $row2["3g_net"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["4g_net"] . "</td>
				<td>4G Network</td>
				<td>" . $row2["4g_net"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["speed"] . "</td>
				<td>Speed</td>
				<td>" . $row2["speed"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["gprs"] . "</td>
				<td>GPRS</td>
				<td>" . $row2["gprs"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["edge"] . "</td>
				<td>EDGE</td>
				<td>" . $row2["edge"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["launch_rating"] . $row1["outOf10"] . "</th>
				<th>Launch</th>
				<th>" . $row2["launch_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["announced"] . "</td>
				<td>Announced</td>
				<td>" . $row2["announced"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["status"] . "</td>
				<td>Status</td>
				<td>" . $row2["status"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["body_rating"] . $row1["outOf10"] . "</th>
				<th>Body</th>
				<th>" . $row2["body_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["dim"] . "</td>
				<td>Dimensions</td>
				<td>" . $row2["dim"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["weight"] . "</td>
				<td>Weight</td>
				<td>" . $row2["weight"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["sim"] . "</td>
				<td>SIM</td>
				<td>" . $row2["sim"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["display_rating"] . $row1["outOf10"] . "</th>
				<th>Display</th>
				<th>" . $row2["display_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["display_type"] . "</td>
				<td>Type</td>
				<td>" . $row2["display_type"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["display_size"] . "</td>
				<td>Size</td>
				<td>" . $row2["display_size"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["res"] . "</td>
				<td>Resolution</td>
				<td>" . $row2["res"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["multitouch"] . "</td>
				<td>Multitouch</td>
				<td>" . $row2["multitouch"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["protect"] . "</td>
				<td>Protection</td>
				<td>" . $row2["protect"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["platform_rating"] . $row1["outOf10"] . "</th>
				<th>Platform</th>
				<th>" . $row2["platform_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["os"] . "</td>
				<td>OS</td>
				<td>" . $row2["os"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["chipset"] . "</td>
				<td>Chipset</td>
				<td>" . $row2["chipset"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["cpu"] . "</td>
				<td>CPU</td>
				<td>" . $row2["cpu"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["gpu"] . "</td>
				<td>GPU</td>
				<td>" . $row2["gpu"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["mem_rating"] . $row1["outOf10"] . "</th>
				<th>Memory</th>
				<th>" . $row2["mem_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["card_slot"] . "</td>
				<td>Card slot</td>
				<td>" . $row2["card_slot"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["internal"] . "</td>
				<td>Internal</td>
				<td>" . $row2["internal"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["cam_rating"] . $row1["outOf10"] . "</th>
				<th>Camera</th>
				<th>" . $row2["cam_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["cam_primary"] . "</td>
				<td>Primary</td>
				<td>" . $row2["cam_primary"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["features"] . "</td>
				<td>Features</td>
				<td>" . $row2["features"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["video"] . "</td>
				<td>Video</td>
				<td>" . $row2["video"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["cam_secondary"] . "</td>
				<td>Secondary</td>
				<td>" . $row2["cam_secondary"] . "</td>
			</tr>
			
				
			<tr>
				<th>" . $row1["sound_rating"] . $row1["outOf10"] . "</th>
				<th>Sound</th>
				<th>" . $row2["sound_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["alert_types"] . "</td>
				<td>Alert types</td>
				<td>" . $row2["alert_types"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["loudspk"] . "</td>
				<td>Loudspeaker</td>
				<td>" . $row2["loudspk"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["3o5mm_jack"] . "</td>
				<td>3.5mm jack</td>
				<td>" . $row2["3o5mm_jack"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["comm_rating"] . $row1["outOf10"] . "</th>
				<th>Comm</th>
				<th>" . $row2["comm_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["wlan"] . "</td>
				<td>WLAN</td>
				<td>" . $row2["wlan"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["bluetooth"] . "</td>
				<td>Bluetooth</td>
				<td>" . $row2["bluetooth"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["gps"] . "</td>
				<td>GPS</td>
				<td>" . $row2["gps"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["nfc"] . "</td>
				<td>NFC</td>
				<td>" . $row2["nfc"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["infr_port"] . "</td>
				<td>Infrared port</td>
				<td>" . $row2["infr_port"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["radio"] . "</td>
				<td>Radio</td>
				<td>" . $row2["radio"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["usb"] . "</td>
				<td>USB</td>
				<td>" . $row2["usb"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["feat_rating"] . $row1["outOf10"] . "</th>
				<th>Features</th>
				<th>" . $row2["feat_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["sensors"] . "</td>
				<td>Sensors</td>
				<td>" . $row2["sensors"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["msging"] . "</td>
				<td>Messaging</td>
				<td>" . $row2["msging"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["browser"] . "</td>
				<td>Browser</td>
				<td>" . $row2["browser"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["java"] . "</td>
				<td>Java</td>
				<td>" . $row2["java"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["batt_rating"] . $row1["outOf10"] . "</th>
				<th>Battery</th>
				<th>" . $row2["batt_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["battery_type"] . "</td>
				<td>Type</td>
				<td>" . $row2["battery_type"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["stand_by"] . "</td>
				<td>Stand-by</td>
				<td>" . $row2["stand_by"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["talk_time"] . "</td>
				<td>Talk time</td>
				<td>" . $row2["talk_time"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["music_play"] . "</td>
				<td>Music play</td>
				<td>" . $row2["music_play"] . "</td>
			</tr>
			
			
			
			<tr>
				<th>" . $row1["misc_rating"] . $row1["outOf10"] . "</th>
				<th>Misc</th>
				<th>" . $row2["misc_rating"] . $row2["outOf10"] . "</th>
			</tr>
			<tr>
				<td>" . $row1["colors"] . "</td>
				<td>Colors</td>
				<td>" . $row2["colors"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["sar_us"] . "</td>
				<td>SAR US</td>
				<td>" . $row2["sar_us"] . "</td>
			</tr>
			<tr>
				<td>" . $row1["sar_eu"] . "</td>
				<td>SAR EU</td>
				<td>" . $row2["sar_eu"] . "</td>
			</tr>
		</table>
	";
	
	$conn->close();
?>