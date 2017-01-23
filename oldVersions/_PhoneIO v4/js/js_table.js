function Table(id) {
	this.typingTimer;
	this.update = updateTable;
	this.change = changeTableContent;
	
	$(document).on('keyup', ".phone-input-field", function() {
		updateTable( 1500, $(this).val(), selectFile(isMobile()), 500 );
	});
	
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
	
	function isMobile() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
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
	
	function updateTable(timeout, input, file, duration) {
		clearTimeout(this.typingTimer);
		if (input) {
			this.typingTimer = setTimeout( function() {
				$.get(file, 
				{
					search1: $("#phone-input-field-1").val(),		//DO NOT USE this HERE, IT WILL CREATE JQUERY BUG
					search2: $("#phone-input-field-2").val(),
					search3: $("#phone-input-field-3").val()
				},
				function(data, status) {
					if ($(id).css("display") == "none") {
						generateTable(data);
					} else {
						changeTableContent( isMobile(), data, duration);
					}
				});
			}, timeout);
		}
	}
}
//Idea: make it so it passes stuff, but it'll only fade the stuff that has changed
/*
function Table(id) {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
	this.update = updateTable;
	this.change = changeTableContent;
	
	$(document).on('keyup', ".phone-input-field", function() {
		var table = new TableObj( 1500, $(this).attr('id'), selectFile(isMobile()), 500 )
		updateTable(table);
	});
	
	function TableObj(timeout, id, file, duration) {
		this.timeout = timeout;
		this.id = id;
		this.file = file;
		this.duration = duration;
		this.num = selectInput(id);
	}
	
	function updateTable(TableObj) {
		switch (TableObj.num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					sendData(TableObj);
				}, TableObj.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					sendData(TableObj);
				}, TableObj.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					sendData(TableObj);
				}, TableObj.timeout );
				break;
		}
	}
		
	function sendData(TableObj) {
		$.get(file, 
		{
			search1: $("#phone-input-field-1").val(),		//DO NOT USE this HERE, IT WILL CREATE JQUERY BUG
			search2: $("#phone-input-field-2").val(),
			search3: $("#phone-input-field-3").val()
		},
		function(data, status) {
			if ($(id).css("display") == "none") {
				generateTable(data);
			} else {
				changeTableContent( isMobile(), data, duration);
			}
		});
	}
		
		
		if (input) {
			this.typingTimer = setTimeout( function() {
				
			}, timeout);
		}
	}
	
	
	
	function selectFile(isMobile) {
		if (isMobile) {
			return "template_table_mobile.php";
		} else {
			return "template_table_desktop.php";
		}
	}
	
	function isMobile() {
		if ( $(window).width() < 768 ) {
			return true;
		} else {
			return false;
		}
	}
	
	function selectInput(id) {
		return id.slice(-1);
	}
	
	
	
	

	
	function generateTable(data) {
		$(id).append(data);
		$(id).slideDown(1500);
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

	
	
}*/