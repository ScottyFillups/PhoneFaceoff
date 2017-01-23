function Table(id) {
	this.typingTimer;
	this.update = updateTable;
	this.change = changeTableContent;
	this.tableArgs = TableArgs;
	
	function TableArgs(val) {
		this.timeout = 1500,
		this.input = val;
		this.file = selectFile(isMobile());
		this.duration = 500;
	}
	
	function updateTable(TableArgs) {
		clearTimeout(this.typingTimer);
		if (TableArgs.input) {
			this.typingTimer = setTimeout( function() {
				$.get(TableArgs.file, 
				{
					search1: $("#phone-input-field-1").val(),		//DO NOT USE this HERE, IT WILL CREATE JQUERY BUG
					search2: $("#phone-input-field-2").val(),
					search3: $("#phone-input-field-3").val()
				},
				function(data, status) {
					if ($(id).css("display") == "none") {
						generateTable(data);
					} else {
						changeTableContent( isMobile(), data, TableArgs.duration);
					}
				});
			}, TableArgs.timeout);
		}
	}
	
	function changeTableContent(isMobile, data, duration) {
		var animObjIn = {color: "#fff"};
		var animObjOut = {color: "#E9618C"};
		
		if (isMobile) {
			$("th:nth-of-type(1)").animate(animObjOut, duration);
			$("th:nth-of-type(3)").animate(animObjOut, duration);
			$("td:nth-of-type(1)").fadeOut(duration);
			$("td:nth-of-type(3)").fadeOut(duration).promise().done(function() {
				$(id).html(data);
				$("th:nth-of-type(1)").animate(animObjIn, duration);
				$("th:nth-of-type(3)").animate(animObjIn, duration);
				$("td:nth-of-type(1)").hide().fadeIn(duration);
				$("td:nth-of-type(3)").hide().fadeIn(duration);
			});
		} else {
			$("th:nth-of-type(2)").animate(animObjOut, duration);
			$("th:nth-of-type(3)").animate(animObjOut, duration);
			$("th:nth-of-type(4)").animate(animObjOut, duration);
			$("td:nth-of-type(2)").fadeOut(duration);
			$("td:nth-of-type(3)").fadeOut(duration);
			$("td:nth-of-type(4)").fadeOut(duration).promise().done(function() {
				$(id).html(data);
				$("th:nth-of-type(2)").animate(animObjIn, duration);
				$("th:nth-of-type(3)").animate(animObjIn, duration);
				$("th:nth-of-type(4)").animate(animObjIn, duration);
				$("td:nth-of-type(2)").hide().fadeIn(duration);
				$("td:nth-of-type(3)").hide().fadeIn(duration);
				$("td:nth-of-type(4)").hide().fadeIn(duration);
			});
		}
	}
	
	function isMobile() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
		}
	}
	
	function selectFile(isMobile) {
		if (isMobile) {
			return "template_table_mobile.php";
		} else {
			return "template_table_desktop.php";
		}
	}
	
	function generateTable(data) {
		$(id).append(data);
		$(id).slideDown(1500);
	}
}