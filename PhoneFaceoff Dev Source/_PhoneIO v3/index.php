<!DOCTYPE html>
<html>
	<head>
		<title>PhoneFaceoff.io</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="style_index.js"></script>
		<link rel="stylesheet" type="text/css" href="style_main.css">
		<?php include_once("template_favicon.php") ?>
	</head>
	<body class="phone">
		<div class="container-fluid child-center">
			<h1 class="pink title">PHONEFACEOFF.IO</h1>
		</div>
		<div class="container">
			
			<!-- Search button -->
			<div class="row">
				<div class="col-sm-12 child-center">
					<a href="search.php" class="glyphicon glyphicon-search button-search"></a>
				</div>
			</div>
			
			<!-- Input and phone images -->
			<div class="row">
				<div class="col-xs-6">
					<div class="phone-container">
						<img class="img-responsive elem-center" src="test.png">
						
						<div class="input-group phone-input-group">
							<input type="text" class="phone-input" placeholder="Enter a phone name">
							<span class="input-group-addon phone-input-button glyphicon glyphicon-arrow-right"></span>
						</div>
						
					</div>
				</div>
				<div class="col-xs-6">
					<div class="phone-container">
						<img class="img-responsive elem-center" src="<?php include('template_image.php') ?>">
						
						<div class="input-group phone-input-group">
							<input type="text" class="phone-input" placeholder="Enter a phone name">
							<span class="input-group-addon phone-input-button glyphicon glyphicon-arrow-right"></span>
						</div>
						
					</div>
				</div>
			</div>
			
			<!-- Data table -->
			<div class="row">
				<?php include_once("template_table.php") ?>
			</div>
		</div>
	</body>
</html>