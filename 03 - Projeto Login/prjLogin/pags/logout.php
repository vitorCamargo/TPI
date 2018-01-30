<?php
	session_start();
	$_SESSION = array();
	session_destroy();
	
	$redirect = "../index.php";
	header("location: $redirect");
?>