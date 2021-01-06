<?php

	session_start();

	define ("DB_USER", "169597_jj");
	define ("DB_PASSWORD", "Slytherine123");
	define ("DB_DATABASE", "ioseffofficial_unistra");
	define ("DB_HOST", "mysql-ioseffofficial.alwaysdata.net");


	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "fr")
			$_SESSION['lang'] = "fr";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>
