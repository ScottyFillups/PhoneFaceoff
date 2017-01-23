<?php 
	include_once("/php/db_conn.php");
	//In practice, the "WHERE" will equal a php variable the user input. " 'WHERE name = ' . $input "
	$sql = "SELECT * FROM phonedata WHERE id = '1'";	//It might need to be 1 instead of '1'
	$result = $conn->query($sql);
	
	if ($result) {
		$row = $result->fetch_assoc();
	} else {
		echo "<br>Error retrieving data";
		
		$conn->close();
		exit();
	}
	
	/*
	<tr>
		<th class='title'>" . $row["name"] . "</th>
		<th class='title'></th>
		<th class='title'>Network</th>
	</tr>
	*/
	
	echo "
		<table>
			<tr>
				<th colspan='3'>Network</th>
			</tr>
			<tr>
				<td>" . $row["tech"] . "</td>
				<td>Technology</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["2g_bands"] . "</td>
				<td>2G bands</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["3g_net"] . "</td>
				<td>3G Network</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["4g_net"] . "</td>
				<td>4G Network</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["speed"] . "</td>
				<td>Speed</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["gprs"] . "</td>
				<td>GPRS</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["edge"] . "</td>
				<td>EDGE</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Launch</th>
			</tr>
			<tr>
				<td>" . $row["announced"] . "</td>
				<td>Announced</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["status"] . "</td>
				<td>Status</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Body</th>
			</tr>
			<tr>
				<td>" . $row["dim"] . "</td>
				<td>Dimensions</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["weight"] . "</td>
				<td>Weight</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["sim"] . "</td>
				<td>SIM</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Display</th>
			</tr>
			<tr>
				<td>" . $row["display_type"] . "</td>
				<td>Type</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["display_size"] . "</td>
				<td>Size</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["res"] . "</td>
				<td>Resolution</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["multitouch"] . "</td>
				<td>Multitouch</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["protect"] . "</td>
				<td>Protection</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Platform</th>
			</tr>
			<tr>
				<td>" . $row["os"] . "</td>
				<td>OS</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["chipset"] . "</td>
				<td>Chipset</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["cpu"] . "</td>
				<td>CPU</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["gpu"] . "</td>
				<td>GPU</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Memory</th>
			</tr>
			<tr>
				<td>" . $row["card_slot"] . "</td>
				<td>Card slot</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["internal"] . "</td>
				<td>Internal</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Camera</th>
			</tr>
			<tr>
				<td>" . $row["cam_primary"] . "</td>
				<td>Primary</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["features"] . "</td>
				<td>Features</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["video"] . "</td>
				<td>Video</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["cam_secondary"] . "</td>
				<td>Secondary</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
				
			<tr>
				<th colspan='3'>Sound</th>
			</tr>
			<tr>
				<td>" . $row["alert_types"] . "</td>
				<td>Alert types</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["loudspk"] . "</td>
				<td>Loudspeaker</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["3o5mm_jack"] . "</td>
				<td>3.5mm jack</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Comm</th>
			</tr>
			<tr>
				<td>" . $row["wlan"] . "</td>
				<td>WLAN</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["bluetooth"] . "</td>
				<td>Bluetooth</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["gps"] . "</td>
				<td>GPS</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["nfc"] . "</td>
				<td>NFC</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["infr_port"] . "</td>
				<td>Infrared port</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["radio"] . "</td>
				<td>Radio</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["usb"] . "</td>
				<td>USB</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Features</th>
			</tr>
			<tr>
				<td>" . $row["sensors"] . "</td>
				<td>Sensors</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["msging"] . "</td>
				<td>Messaging</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["browser"] . "</td>
				<td>Browser</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["java"] . "</td>
				<td>Java</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Battery</th>
			</tr>
			<tr>
				<td>" . $row["battery_type"] . "</td>
				<td>Type</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["stand_by"] . "</td>
				<td>Stand-by</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["talk_time"] . "</td>
				<td>Talk time</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["music_play"] . "</td>
				<td>Music play</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			
			
			
			<tr>
				<th colspan='3'>Misc</th>
			</tr>
			<tr>
				<td>" . $row["colors"] . "</td>
				<td>Colors</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["sar_us"] . "</td>
				<td>SAR US</td>
				<td>" . $row["tech"] . "</td>
			</tr>
			<tr>
				<td>" . $row["sar_eu"] . "</td>
				<td>SAR EU</td>
				<td>" . $row["tech"] . "</td>
			</tr>
		</table>
	";
	
	$conn->close();
?>