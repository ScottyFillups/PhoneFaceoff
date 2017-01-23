/**
 * Defines constructor and prototypes for the TableControl class
 * The TableControl class updates the table data
 * 
 * @author Philip Scott
 * @date 2016-05-20
 */

/**
 * Contructor that creates an object which stores object properties
 */
var TableControl = function() {
	this.args = {
		tableId: "#phone-table",
		timeout: 1000,
		id: "",
		status: "",
		file: "",
		duration: 400,
		num: "",
	};
};

// Inherit properties and methods from the InputListener class
extend(TableControl, InputListener);

/**
 * Determines which php file should be executed based on viewport size
 *
 * @param		isMobile		a boolean value that indicates if viewport is mobile
 * @return						the file name of the correct php file to be executed
 */
TableControl.prototype.select = function(isMobile) {
	if (isMobile) {
		return "template_table_mobile.php";
	} else {
		return "template_table_desktop.php";
	}
};

/**
 * Sends data to php file, recieves data, then passes the data to the change function
 *
 * @param		args		object properties compressed in object
 */
TableControl.prototype.send = function(args) {
	args.file = this.select(args.status);
	var self = this;
	$.get(args.file, 
	{
		search1: $("#phone-input-field-1").val(),
		search2: $("#phone-input-field-2").val(),
		search3: $("#phone-input-field-3").val()
	},
	function(data, status) {
		if ($(args.tableId).css("display") == "none") {
			self.generate(data);
		} else {
			self.change(args, data);
		}
	});
};

/**
 * Generates the table when user inputs data for the first time.
 *
 * @param		data		html code echoed from executed php file
 */
TableControl.prototype.generate = function(data) {
	$(this.args.tableId).append(data);
	$("table").css('opacity', 0);
	$("table").animate({opacity: 1}, 2000);
	$(this.args.tableId).slideDown(1000);
};

/**
 * Changes content of table
 *
 * @param		args			object properties compressed in object
 *				data			html code echoed from executed php file
 */
TableControl.prototype.change = function(args, data) {
	function changeDisplay(x, args, data) {
		var animObjIn = {color: "#fff"};
		var animObjOut = {color: "#E9618C"};
		$("th:nth-of-type(" + x + ")").animate(animObjOut, args.duration);
		$("td:nth-of-type(" + x + ")").fadeOut(args.duration).promise().done( function() {
			$(args.tableId).html(data);
			$("th:nth-of-type(" + x + ")").css('color', animObjOut.color);
			$("th:nth-of-type(" + x + ")").animate(animObjIn, args.duration);
			$("td:nth-of-type(" + x + ")").hide().fadeIn(args.duration);
		});
	}
	
	if (args.status) {
		var x = (args.num == 1) ? 1 : 3;
		changeDisplay(x, args, data);
	} else {
		var x = Number(args.num) + 1;
		changeDisplay(x, args, data);
	}
};