<?php 
	include 'simple_html_dom.php';

	$location = $_GET['location'];

	if (!isset($_COOKIE[$location]))
		setcookie('location', $location, time() + (86400 * 15), "/");


	$time = ["12:00mn - 03:00am",
			"03:00am - 06:00am", 
			"06:00am - 09:00am", 
			"09:00am - 12:00nn", 
			"12:00nn - 03:00pm", 
			"03:00pm - 06:00pm", 
			"06:00pm - 09:00pm", 
			"09:00pm - 12:00mn"];

	$rainrate = ['Very Light Rain',
				'Light Rain',
				'Moderate Rain',
				'Heavy Rain',
				'Very Heavy Rain',
				'Extreme Rain'
				];

	$websiteUrl = "http://weather-manila.com/forecasts/fcloc".$location.".html";
	$html = file_get_html($websiteUrl);

	$table = $html->find('table',0);
	$tr = $table->find('tr',4);
	$periods = array();
	$rains = array();

	foreach ($tr->find('small') as $small) {
		$periods [] = $small->innertext;
	}

	for ($i=1; $i < 9; $i++) { 
		if ($periods[$i] != 0)
			$rains[$i] = $periods[$i]; 
	}

	echo !$rains ? "<h1>Hindi</h1>" : "<h1>Oo</h1>";

	echo "<div class='rain'>";
	foreach ($rains as $key => $rain) {
		$x = $key - 1;
		echo "<div>";
		if ($rain <= "1") {
			echo "<img src='assets/images/light.png'><br>";
			echo "<h5>$rainrate[1]</h5>";
		}
		if ($rain > "1" && $rain <= "4") {
			echo "<img src='assets/images/moderate.png'><br>";
			echo "<h5>$rainrate[2]</h5>";
		}
		if ($rain > "4" && $rain <= "16") {
			echo "<img src='assets/images/heavy.png'><br>";
			echo "<h5>$rainrate[3]</h5>";
		}
		if ($rain > "16" && $rain <= "50") {
			echo "<img src='assets/images/very_heavy.png'><br>";
			echo "<h5>$rainrate[4]</h5>";
		}
		if ($rain > "50") {
			echo "<img src='assets/images/extreme.png'><br>";
			echo "<h5>$rainrate[5]</h5>";
		}


		echo "<h4>$time[$x]</h4>";
		echo "</div>";
	}
	echo "</div>";

 ?>