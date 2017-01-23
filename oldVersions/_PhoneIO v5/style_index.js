$(document).ready( function() {
	var viewport = new Viewport();
	var table = new Table("#phone-table");
	var image = new ImageListener();
	
	viewport.update(0,0);
	
	//id needs to be passed or else Jquery will bug out
	$(document).on('keyup', ".phone-input-field", function() {
		var imgArgs = new image.imgArgs( $(this).attr('id') );
		var tableArgs = new table.tableArgs( $(this).val() );
		
		image.update(imgArgs);
		table.update(tableArgs);
	});
});