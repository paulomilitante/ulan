<?php 

$location = $_GET['location'];

if (!isset($_COOKIE['location']))
	setcookie('location', $location, time() + (86400 * 15), "/");

?>