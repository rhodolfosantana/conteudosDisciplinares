<?php
	include 'conection.php';
	if (!isset($_SESSION['logado'])) {
		header('location: form.php');
		
	}
?>