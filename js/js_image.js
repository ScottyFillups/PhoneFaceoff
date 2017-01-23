/**
 * Defines constructor and prototypes for the ImageControl class
 * The ImageControl class updates the phone images 
 * 
 * @author Philip Scott
 * @date 2016-05-20
 */

/**
 * Contructor that creates an object which stores object properties
 */
var ImageControl = function() {
	this.args = {
		timeout: 1000,
		id: "",
		status: "",
		file: "/php/select_image.php",
		duration: 400,
		num: ""
	};
};

// Inherit properties and methods from the InputListener class
extend(ImageControl, InputListener);

/**
 * Sends data to php file, recieves data, then passes the data to the change function
 *
 * @param		args		object properties compressed in object
 */
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

/**
 * Changes content of images
 *
 * @param		num				number that identifies which input field was selected
 *				duration		duration of animation in milliseconds
 *				data			html code echoed from executed php file
 */
ImageControl.prototype.change = function(num, duration, data) {
	var x = num - 1;
	var elem = $(".img-container:eq(" + x + ")");
	elem.fadeOut(duration, function() {
		$(this).html(data);
		$(this).fadeIn(duration);
	});
}


