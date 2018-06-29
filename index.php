<?php 
	include 'locations.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="google-site-verification" content="s2EWm8gTtEA-VPf8R6OO0NOTsl1WC6YF8MR7ZiJL95U" />
	<meta property="og:url"                content="http://www.uulanba.ml" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="UULAN BA?" />
	<meta property="og:description"        content="Alamin kung uulan ba sa mga lungsod sa Pilipinas."/>
	<meta property="og:image"              content="http://www.uulanba.ml/assets/images/fbicon.png" />

	<link rel="shortcut icon" type="image/png" href="assets/images/moderate.png"/>

	<title>UULAN BA?</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="header">
			<h1 id="date"></h1>
			<h2>Uulan ba sa 
				<select id="location">
				<?php
					foreach ($locations as $key => $value) {
						if(isset($_COOKIE['location']))
							echo $value == $_COOKIE['location'] ? "<option selected value='$value'>$key</option>" : "<option value='$value'>$key</option>";
						else
							echo $value == "003" ? "<option selected value='$value'>$key</option>" : "<option value='$value'>$key</option>";
					 } 
				?>
				</select>
			</h2>
		</div>

		<div id="forecast"></div>
	</div>
	<p class="disclaimer">UULAN BA? does not assume any liability for the accuracy, completeness, or usefulness of any information disclosed herein.<br>Forecast data belongs to <a href="http://www.weather-manila.com" target="_blank">Weather Manila</a>. For more information and in-depth weather forecast, please visit their website.</p>

	<script src="assets/script.js"></script>
</body>
</html>