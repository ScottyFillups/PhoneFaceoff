/**
 * Redirects user to compare page when he/she clicks on a phone
 * After he/she is redirected, the phone name will be automatically placed in the first input field
 * 
 * @author Philip Scott
 * @date 2016-05-20
 */

$(document).ready( function() {
	$(".img-list").on("click", function() {
		var phoneName = $(this).children("p").html();
		$.get('/php/get_search.php', 
		{
				search: phoneName
		}, 
		function(data) {
			localStorage.setItem('search', data);
			window.location.href = "../";
		});
	});
});
