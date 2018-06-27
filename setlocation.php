<?php 

$location = $_GET['location'];

setcookie('location', $location, time() + (86400 * 15), "/");

?>