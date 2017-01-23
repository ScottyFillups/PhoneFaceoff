/**
 * Defines constructor and prototypes for the RatingControl class
 * The RatingControl class updates the phone rating
 * 
 * @author Philip Scott
 * @date 2016-06-09
 */

/**
 * Contructor that creates an object which stores object properties
 */
var RatingControl = function() {
	this.args = {
		timeout: 1000,
		id: "",
		status: "",
		file: "/php/generate_rating.php",
		duration: 400,
		num: ""
	};
};

// Inherit properties and methods from the InputListener class
extend(RatingControl, InputListener);

/**
 * Sends data to php file, recieves data, then passes the data to the change function
 *
 * @param		args		object properties compressed in object
 */
RatingControl.prototype.send = function(args) {
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
RatingControl.prototype.change = function(num, duration, data) {
	var elem = $("#rating-container" + num);
	elem.slideUp(duration, function() {
		$(this).html(data);
		$(this).slideDown(duration);
	});
}