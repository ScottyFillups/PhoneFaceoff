<!DOCTYPE html>
<html>
	<head>
		<title>PhoneFaceoff.io</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style_main.css">
		
		<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="icons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="icons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="icons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="icons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="icons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="icons/manifest.json">
		<link rel="mask-icon" href="icons/safari-pinned-tab.svg" color="#e9618c">
		<link rel="shortcut icon" href="icons/favicon.ico">
		<meta name="apple-mobile-web-app-title" content="PhoneFaceoff.io">
		<meta name="application-name" content="PhoneFaceoff.io">
		<meta name="msapplication-TileColor" content="#e9618c">
		<meta name="msapplication-TileImage" content="icons/mstile-144x144.png">
		<meta name="msapplication-config" content="icons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">
		
	</head>
	<body class="phone">
		<div class="container-fluid child-center">
			<h1 class="pink title">PHONEFACEOFF.IO</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 child-center">
					<span class="glyphicon glyphicon-search button-search"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="phone-container">
						<img src="test.png">
						<input type="text" class="phone-input" placeholder="Enter a phone name">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="phone-container">
						<img src="test.png">
						<input type="text" class="phone-input" placeholder="Enter a phone name">
					</div>
				</div>
			</div>
			<div class="row">
				<?php include("template_table.php") ?>
			</div>
		</div>
	</body>
</html>