$(document).ready( function() {
	$(".phone-input").on("focus", function() {
		$(this).parent().css("border-bottom-color", "#61E9BE");
	});
	$(".phone-input").on("blur", function() {
		$(this).parent().css("border-bottom-color", "#E9618C");
	});
});