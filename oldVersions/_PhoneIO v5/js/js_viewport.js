function Viewport() {
	this.resizeTimer;
	this.wasMobile;
	this.update = updateViewport;
	this.check = isMobile;
	this.changeInput = changeInput;
	this.changeTableLayout = changeTableLayout;
	this.hasChanged = viewportChanged;
	
	$(window).resize( function() {
		clearTimeout(this.resizeTimer);
		updateViewport(1500, 500);
	});
	
	function updateViewport(timeout, duration) {
		this.resizeTimer = setTimeout( function() {
			if ( isMobile() && viewportChanged() ) {	//If it changed AND is currently mobile...
				changeInput(duration, "#phone-input", "template_input_mobile.php");
				changeTableLayout(duration, "#phone-table", "template_table_mobile.php");
			} 
			else if ( !isMobile() && viewportChanged() ) {
				changeInput(duration, "#phone-input", "template_input_desktop.php");
				changeTableLayout(duration, "#phone-table", "template_table_desktop.php");
			}
		}, timeout);
	}

	function viewportChanged() {
		if ( this.wasMobile === undefined || isMobile() === !this.wasMobile ) {
			this.wasMobile = isMobile();
			return true;
		} else {
			return false;
		}
	}
	
	function isMobile() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
		}
	}

	function changeTableLayout(duration, element, file) {
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

	function changeInput(duration, element, file) {
		$(element).fadeTo(duration, 0).promise().done( function() {
			$.get(file, 
			{
			},
			function(data, status) {
				$(element).html(data);
				$(element).fadeTo(duration, 1);
			});
		});
	}
}