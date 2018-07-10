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
			var answer = $('#answer').text();
			if (answer == "Oo.")
				$('body').css("background", "url('assets/images/rain.svg')");
			else
				$('body').css("background", "none");
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