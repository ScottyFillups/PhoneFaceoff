/**
 * Instantiates classes and handles events
 * 
 * @author Philip Scott
 * @date 2016-05-20
 */

$(document).ready( function() {
	var viewport = new Viewport();
	var table = new TableControl();
	var image = new ImageControl();
	var suggest = new SuggestControl();
	var rating = new RatingControl();
	
	// Updates viewport instantly on load
	viewport.update(0,0);
	
	// Updates the viewport dimensions on window resize. 
	$(window).resize( function() {
		clearTimeout(viewport.timer);
		viewport.update(1000, 500);
	});
	
	// Updates the table, image, and suggest sections when the user is typing
	$(document).on("keyup", ".phone-input-field", function() {
		if ($(this).val() !== "") {
			table.update( function() {table.send(table.args)}, table.args, $(this).attr('id'), viewport.check() );
			image.update( function() {image.send(image.args)}, image.args, $(this).attr('id'), viewport.check() );
			suggest.update( function() {suggest.send(suggest.args)}, suggest.args, $(this).attr('id'), viewport.check() );
			rating.update( function() {rating.send(rating.args)}, rating.args, $(this).attr('id'), viewport.check() );
		} else {
			suggest.update( function() {suggest.send(suggest.args)}, suggest.args, $(this).attr('id'), viewport.check() );
		}
	});
	
	// Updates the table and image suggest sections if the user clicks on suggestion
	$(document).on("click", ".suggestion", function() {
		num = table.getIdNum( $(this).parent(".suggest-container").attr('id') );
		inputId = "phone-input-field-" + num;
			
		if ( $(this).html() !== "No suggestions") {
			$(this).parent(".suggest-container").slideUp(500).promise().done( function() {
				$(this).parent(".suggest-container").empty();
			});
			
			$("#" + inputId).val( $(this).html() );
			table.update( function() {table.send(table.args)}, table.args, inputId, viewport.check() );
			image.update( function() {image.send(image.args)}, image.args, inputId, viewport.check() );
			rating.update( function() {rating.send(rating.args)}, rating.args, inputId, viewport.check() );
		}
	});
});