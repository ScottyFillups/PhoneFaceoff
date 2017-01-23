/**
 * Defines constructor and prototypes for the SuggestControl class
 * The SuggestControl class updates the suggestions
 * 
 * @author Philip Scott
 * @date 2016-05-20
 */

/**
 * Contructor that creates an object which stores object properties
 */
var SuggestControl = function() {
	this.args = {
		timeout: 1000,
		id: "",
		status: "",
		file: "/php/generate_suggest.php",
		duration: 400,
		num: ""
	};
};

// Inherit properties and methods from the InputListener class
extend(SuggestControl, InputListener);

/**
 * Sends data to php file, recieves data, then passes the data to the change function
 *
 * @param		args		object properties compressed in object
 */
SuggestControl.prototype.send = function(args) {
	var self = this;
	var elem = $("#" + args.id);
	$.get(args.file, 
	{
		search: elem.val()
	},
	function(data, status) {
		self.change(args.num, args.duration, data);
	});
};

/**
 * Changes suggestions
 *
 * @param		num				number that identifies which input field was selected
 *				duration		duration of animation in milliseconds
 *				data			html code echoed from executed php file
 */
SuggestControl.prototype.change = function(num, duration, data) {
	var str = ".suggest-container:eq(" + (num-1) + ")";
	var elem = $(str);
	elem.slideUp(duration, function() {
		elem.html(data);
		elem.slideDown(duration);
	});
};


