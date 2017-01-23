$(document).ready( function() {
	var viewport = new Viewport();
	var table = new TableControl();
	var image = new ImageControl();
	var suggest = new SuggestControl();
	
	viewport.update(0,0);
	
	$(window).resize( function() {
		clearTimeout(viewport.timer);
		viewport.update(1000, 500);
	});
	
	//id needs to be passed or else Jquery will bug out
	$(document).on("keyup", ".phone-input-field", function() {
		if ($(this).val() !== "") {
			table.update( function() {table.send(table.args)}, table.args, $(this).attr('id'), viewport.check() );
			image.update( function() {image.send(image.args)}, image.args, $(this).attr('id'), viewport.check() );
			suggest.update( function() {suggest.send(suggest.args)}, suggest.args, $(this).attr('id'), viewport.check() );
		} else {
			suggest.update( function() {suggest.send(suggest.args)}, suggest.args, $(this).attr('id'), viewport.check() );
		}
	});
	
	$(document).on("click", ".suggestion", function() {
		num = table.getIdNum( $(this).parent(".suggest-container").attr('id') );
		inputId = "phone-input-field-" + num;
			
		if ( $(this).html() !== "No suggestions") {
			//remove parent to fix glitch, however it means that margins will be removed 
			//doesn't explain why clicking one works, but doing all three glitches
			//will investigate
			$(this).parent(".suggest-container").slideUp(500).promise().done( function() {
				$(this).parent(".suggest-container").empty();
			});
			
			$("#" + inputId).val( $(this).html() );
			table.update( function() {table.send(table.args)}, table.args, inputId, viewport.check() );
			image.update( function() {image.send(image.args)}, image.args, inputId, viewport.check() );
		}
	});
});