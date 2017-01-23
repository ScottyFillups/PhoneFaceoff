<!DOCTYPE html>
<html>
	<head>
		<title>PhoneFaceoff.io</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<!-- Needed for jquery animate() with colours -->
		<script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"
				integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE="
				crossorigin="anonymous">
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="/js/js_functions.js"></script>
		<script src="/js/js_input.js"></script>
		<script src="/js/js_viewport.js"></script>
		<script src="/js/js_image.js"></script>
		<script src="/js/js_table.js"></script>
		<script src="/js/js_suggest.js"></script>
		<script src="/js/js_rating.js"></script>
		<script src="style_index.js"></script>
		<link rel="stylesheet" type="text/css" href="style_main.css">
		<?php require_once("template_favicon.php"); ?>
	</head>
	<body class="phone">
	
		<div class="wrapper">
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
					<div id="phone-input">
					</div>
				</div>
				
				<!-- Data table -->
				<div class="row">
					<div id="phone-table">
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			&#169; 2016 Philip Scott & Geoff Hasko
		</footer>
	</body>
</html>