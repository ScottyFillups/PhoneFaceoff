var InputListener = function() {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
};

InputListener.prototype = {
	getIdNum: function(id) {
		return id.slice(-1);
	},
	update: function(funct, args, id, status) {
		args.id = id;
		args.num = this.getIdNum(id);
		args.status = status;
		switch (args.num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					funct(args);
				}, args.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					funct(args);
				}, args.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					funct(args);
				}, args.timeout );
				break;
		}
	}
};