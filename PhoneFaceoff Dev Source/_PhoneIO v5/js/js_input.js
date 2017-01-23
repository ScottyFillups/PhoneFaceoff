var InputListener = function(elemId) {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
	this.timeout = 2000;
	this.id = elemId;
	this.num = this.getIdNum(elemId);
};

InputListener.prototype = {
	getIdNum: function(id) {
		return id.slice(-1);
	},
	assignTimeout: function(newTimeout) {
		this.timeout = newTimeout;
	},
	update: function(funct, args, num) {
		switch (num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					funct(args);
				}, this.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					funct(args);
				}, this.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					funct(args);
				}, this.timeout );
				break;
		}
	}
};