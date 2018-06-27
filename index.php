<?php 
	include 'locations.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>UULAN BA?</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="header">
			<h1>Uulan ba sa</h1>
			<select id="location">
				<?php
					foreach ($locations as $key => $value) {
						echo $value == $_COOKIE['location'] ? "<option selected value='$value'>$key</option>" : "<option value='$value'>$key</option>";
					 } 
				?>
			</select>
			<h2 id="date"></h2>
		</div>

		<div id="forecast"></div>
	</div>

	<script src="assets/script.js"></script>
</body>
</html>