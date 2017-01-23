function ImageListener() {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
	this.update = updateImage;
	
	$(document).on('keyup', ".phone-input-field", function() {
		var img = new ImgObj( 1500, $(this).attr('id'), "/php/select_image.php", 500 );
		updateImage(img);
	});
	
	function ImgObj(timeout, id, file, duration) {
		this.timeout = timeout;
		this.id = id;
		this.file = file;
		this.duration = duration;
		this.num = selectInput(id);
	}
	
	function updateImage(ImgObj) {
		switch (ImgObj.num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					sendData(ImgObj);
				}, ImgObj.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					sendData(ImgObj);
				}, ImgObj.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					sendData(ImgObj);
				}, ImgObj.timeout );
				break;
		}
	}
	
	function sendData(ImgObj) {
		var elem = $("#" + ImgObj.id);
		$.get(ImgObj.file, 
		{
			name: elem.val()
		},
		function(data, status) {
			changeImageContent(ImgObj, data);
		});
	}
	
	function changeImageContent(ImgObj, data) {
		var x = ImgObj.num - 1;
		var elem = $(".img-container:eq(" + x + ")");
		elem.fadeOut(ImgObj.duration, function() {
			$(this).html(data);
			$(this).fadeIn(ImgObj.duration);
		});
	}
	
	function selectInput(id) {
		return id.slice(-1);
	}
}
