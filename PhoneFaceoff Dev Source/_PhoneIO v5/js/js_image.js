function ImageListener() {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
	this.imgArgs = ImgArgs;
	this.update = updateImage;
	
	function ImgArgs(id) {
		this.timeout = 1500;
		this.id = id;
		this.file = "/php/select_image.php";
		this.duration = 500;
		this.num = selectInput(id);
	}
	
	function updateImage(ImgArgs) {
		switch (ImgArgs.num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					sendData(ImgArgs);
				}, ImgArgs.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					sendData(ImgArgs);
				}, ImgArgs.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					sendData(ImgArgs);
				}, ImgArgs.timeout );
				break;
		}
	}
	
	function sendData(ImgArgs) {
		var elem = $("#" + ImgArgs.id);
		$.get(ImgArgs.file, 
		{
			name: elem.val()
		},
		function(data, status) {
			changeImageContent(ImgArgs, data);
		});
	}
	
	function changeImageContent(ImgArgs, data) {
		var x = ImgArgs.num - 1;
		var elem = $(".img-container:eq(" + x + ")");
		elem.fadeOut(ImgArgs.duration, function() {
			$(this).html(data);
			$(this).fadeIn(ImgArgs.duration);
		});
	}
	
	function selectInput(id) {
		return id.slice(-1);
	}
}
