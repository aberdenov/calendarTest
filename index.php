<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	require_once 'class.Calendar.php';

	$res = new Calendar();
	
	$res->findDate('17.11.2013');
	
	echo "<br>";

	$res->countMonth('17.11.2013');

	echo "<br>";

	$res->countDays('17.11.2013');
?>