<?php 
	session_start();
	$username = 'root';
	$password = '';
	$conn = new PDO('mysql:host=127.0.0.1;port=13306;dbname=information', $username, $password);

?>