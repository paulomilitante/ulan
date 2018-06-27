var weatherSearch = function() {
	var location = $("#location").val();

	$.get('setlocation.php',
		{'location' : location},
		function(data) {
		});

	$.get('weather.php',
		{'location' : location},
		function(data) {
			$('#forecast').html(data);
		});
}

var loader = "<div class='loader'></div>";

$(document).ready(function(){
	$('#forecast').html(loader);
	weatherSearch();
});

$("#location").on("change",function(){
	$('#forecast').html(loader);
	weatherSearch();
});

var date = new Date();
var options = { weekday: 'short', month: 'short', day: 'numeric'};
var today = date.toLocaleDateString(undefined,options);
$("#date").html(today);