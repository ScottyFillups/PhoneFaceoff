var SuggestControl = function() {
	this.args = {
		timeout: 1500,
		id: "",
		file: "/php/generate_suggest.php",
		duration: 500,
		num: "",
		status: ""
	};
};

extend(SuggestControl, InputListener);

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
SuggestControl.prototype.change = function(num, duration, data) {
	var str = ".suggest-container:eq(" + (num-1) + ")";
	var elem = $(str);
	elem.slideUp(duration, function() {
		elem.html(data);
		elem.slideDown(duration);
	});
};


