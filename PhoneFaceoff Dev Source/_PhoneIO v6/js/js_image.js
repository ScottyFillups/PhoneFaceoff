var ImageControl = function(elemId) {
	this.args = {
		timeout: 1500,
		id: "",
		file: "/php/select_image.php",
		duration: 500,
		num: "",
		status: ""
	};
};

extend(ImageControl, InputListener);

ImageControl.prototype.send = function(args) {
	var self = this;
	var elem = $("#" + args.id);
	$.get(args.file, 
	{
		name: elem.val()
	},
	function(data, status) {
		self.change(args.num, args.duration, data);
	});
}
ImageControl.prototype.change = function(num, duration, data) {
	var x = num - 1;
	var elem = $(".img-container:eq(" + x + ")");
	elem.fadeOut(duration, function() {
		$(this).html(data);
		$(this).fadeIn(duration);
	});
}


