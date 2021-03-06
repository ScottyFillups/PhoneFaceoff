<?php 
	/**
	 * Echos out the images and input fields for mobile. Created to simplify index.php
	 * 
	 * @author Philip Scott
	 * @date 2016-05-16
	 * @echo 						images and input fields for mobile
	 */
	
	echo "
		<div id='phone-input-mobile'>
			<div class='col-xs-6'>
				<div class='phone-container'>
					<div class='img-container'>
						<img class='img-responsive elem-center' src='/images/default1.png'>
					</div>
					<input type='text' id='phone-input-field-1' class='phone-input-field' placeholder='Enter a phone name' autocomplete='off'>
					<div class='suggest-container' id='suggest-container1'></div>
					<div id='rating-container1'></div>
				</div>
			</div>
			<div class='col-xs-6'>
				<div class='phone-container'>
					<div class='img-container'>
						<img class='img-responsive elem-center' src='/images/default2.png'>
					</div>
					<input type='text' id='phone-input-field-2' class='phone-input-field' placeholder='Enter a phone name' autocomplete='off'>
					<div class='suggest-container' id='suggest-container2'></div>
					<div id='rating-container2'></div>
				</div>
			</div>
		</div>
	";
?>