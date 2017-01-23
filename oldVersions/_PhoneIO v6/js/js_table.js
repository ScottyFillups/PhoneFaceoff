var TableControl = function() {
	this.args = {
		tableId: "#phone-table",
		timeout: 1500,
		id: "",
		status: "",
		file: "",
		duration: 500,
		num: "",
	};
};

extend(TableControl, InputListener);

TableControl.prototype.select = function(isMobile) {
	if (isMobile) {
		return "template_table_mobile.php";
	} else {
		return "template_table_desktop.php";
	}
};
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
TableControl.prototype.generate = function(data) {
	$(this.args.tableId).append(data);
	$(this.args.tableId).slideDown(1500);
};
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