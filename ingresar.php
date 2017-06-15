<?php
	session_start();

	$username = $_POST["username"];
	$password = $_POST["password"];

	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

	if( $username == "pruebap" && $password == "prueba123*") {
		setcookie('MoodleSession', 'p32a3ipenqj4q8gdosou47k4m0', time() + 365 * 24 * 60 * 60, '/', 'www.academiaa2.com');
		header('Location: http://www.academiaa2.com/moodle/');
	}

?>
