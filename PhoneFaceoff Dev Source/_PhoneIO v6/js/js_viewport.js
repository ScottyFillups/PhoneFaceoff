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
	check: function() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
		}
	},
	changed: function() {
		var isMobile = this.check();
		if ( this.wasMobile === undefined || isMobile !== this.wasMobile ) {
			this.wasMobile = isMobile;
			return true;
		} else {
			return false;
		}
	},
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
