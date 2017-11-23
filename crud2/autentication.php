<?php
include 'conection.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM USUARIO WHERE NAME = ? AND SENHA = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $usuario);
$stmt->bindParam(2, $pass);
$stmt->execute();

if ($stmt->rowCount() > 0) {
	$_SESSION['logado'] = true;
	header('location: form2.php');
	exit();	
}
else{
	header('location: form.html');
}


?>