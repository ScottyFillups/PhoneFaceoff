/**
 * Defines constructor and prototypes for the InputListener class
 * The InputListener class is an abstract class which sub classes 
 * that deal with input (eg. ImageControl) inherit properties and methods from.
 *
 * @author Philip Scott
 * @date 2016-05-20
 */
 
/**
 * Contructor that creates three timers
 */
var InputListener = function() {
	this.typingTimer1;
	this.typingTimer2;
	this.typingTimer3;
};

InputListener.prototype = {
	/**
	 * Returns the last character of a string. Used to determine which input field has been selected
	 *
	 * @param		id		id of the selected input field
	 * @return 				the last character of the id string
	 */
	getIdNum: function(id) {
		return id.slice(-1);
	},
	
	/**
	 * Activates a countdown on execution. The countdown will reset if the user continues to type
	 * If the countdown is able to reach 0 (user stops typing for x amount of time)
	 * a function will be called that will update the page
	 *
	 * @param		funct		function to be called
	 * 				args		arguments to be passed to the funct parameter
	 *				id			id of the selected input field
	 *				status		a boolean value which indicates whether the viewport is mobile
	 */
	update: function(funct, args, id, status) {
		var self = this;
		args.id = id;
		args.num = this.getIdNum(id);
		args.status = status;
		
		switch (args.num) {
			case '1':
				clearTimeout(this.typingTimer1);
				this.typingTimer1 = setTimeout( function() {
					
					args.id = id;
					args.num = self.getIdNum(id);
					args.status = status;
					
					funct(args);
				}, args.timeout );
				break;
			case '2':
				clearTimeout(this.typingTimer2);
				this.typingTimer2 = setTimeout( function() {
					
					args.id = id;
					args.num = self.getIdNum(id);
					args.status = status;
					
					funct(args);
				}, args.timeout );
				break;
			case '3':
				clearTimeout(this.typingTimer3);
				this.typingTimer3 = setTimeout( function() {
					
					args.id = id;
					args.num = self.getIdNum(id);
					args.status = status;
					
					funct(args);
				}, args.timeout );
				break;
		}
	}
};