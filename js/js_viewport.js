/**
 * Defines constructor and prototypes for the Viewport class
 * The Viewport class handles mobile support; it checks the window width and changes
 * the site layout accordingly
 *
 * @author Philip Scott
 * @date 2016-05-25
 */
 
/**
 * Contructor that creates properties that store php file names to be executed conditionally. Also creates a timer 
 * and a boolean value that keeps track of it's mobile or desktop
 */
var Viewport = function() {
	this.timer;
	this.wasMobile;
	this.inputId = "#phone-input";
	this.tableId = "#phone-table";
	this.mobileInputFile = "template_input_mobile.php";
	this.desktopInputFile = "template_input_desktop.php";
	this.mobileTableFile = "template_table_mobile.php";
	this.desktopTableFile = "template_table_desktop.php";
}

Viewport.prototype = {
	/**
	 * Checks whether the viewport size is optimal for mobile devices or desktops
	 *
	 * @return 			returns whether the viewport is mobile; if mobile, it returns true
	 */
	check: function() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
		}
	},
	
	/**
	 * Checks whether the viewport orientation (mobile/desktop) has changed
	 *
	 * @return 			returns whether the viewport orientation has changed (ie. went x < 768 to x > 768 or vice versa)
	 */
	changed: function() {
		var isMobile = this.check();
		if ( this.wasMobile === undefined || isMobile !== this.wasMobile ) {
			this.wasMobile = isMobile;
			return true;
		} else {
			return false;
		}
	},
	
	/**
	 * Activates a countdown. This countdown can be reset situationally (for this site, it resets
	 * whenever the viewport is resized). When countdown finishes, the function checks if the viewport type
	 * (ie. desktop/mobile) has changed. If yes, it calls functions that change the page layout
	 *
	 * @param 		timeout			countdown value
	 *				duration		duration of animation in milliseconds
	 */
	update: function(timeout, duration) {
		var self = this;
		this.timer = setTimeout( function() {
			if ( self.check() && self.changed() ) {	//If it changed AND is currently mobile...
				self.changeInput(duration, self.inputId, self.mobileInputFile);
				self.changeTable(duration, self.tableId, self.mobileTableFile);
			} 
			else if ( !self.check() && self.changed() ) {
				self.changeInput(duration, self.inputId, self.desktopInputFile);
				self.changeTable(duration, self.tableId, self.desktopTableFile);
			}
		}, timeout);
	},
	
	/**
	 * Changes the page layout of the input section
	 *
	 * @param 		duration		duration of animation in milliseconds
	 *				element			element to be changed
	 *				file			php file to be executed
	 */
	changeInput: function(duration, element, file) {
		$(element).fadeTo(duration, 0).promise().done( function() {
			$.get(file, 
			{
			},
			function(data, status) {
				$(element).html(data);
				$(element).fadeTo(duration, 1);
			});
		});
	},
	
	/**
	 * Changes the page layout of the table section
	 *
	 * @param 		duration		duration of animation in milliseconds
	 *				element			element to be changed
	 *				file			php file to be executed
	 */
	changeTable: function(duration, element, file) {
		if ($(element).css("display") != "none" ) {
			$(element).fadeTo(duration, 0).promise().done( function() {
				$.get(file, 
				{
					search1: "",	
					search2: "",
					search3: ""
				},
				function(data, status) {
					$(element).html(data);
					$(element).fadeTo(duration, 1);
				});
			});
		}
	}
}
