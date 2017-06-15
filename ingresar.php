<?php
	session_start();
	$nombre = $_POST["uname"];
	$psw = $_POST["psw"];

	$_SESSION["username"] = $nombre;
	$_SESSION["password"] = $psw;

	if( $nombre == "pruebap" && $psw == "prueba123*") {
		header('Location: http://www.academiaa2.com/moodle');
	}

?>