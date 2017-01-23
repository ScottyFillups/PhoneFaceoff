function test1() {
	this.test2 = function() { 
		alert("testtt");
	};
	alert("hi");
}

var x = new test1();
x.test2();