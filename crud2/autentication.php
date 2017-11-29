<?php
require_once 'conection.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
echo $usuario;
$sql = "SELECT * FROM usuario WHERE NOME = ? AND SENHA = ?";
$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $usuario);
$stmt->bindParam(2, $pass);
$stmt->execute();
$consulta = $stmt->fetchAll();
print_r($stmt);
var_dump($stmt->rowCount());

if ($stmt->rowCount() >= 1) {
	
 	$_SESSION['logado'] = true;
	header('location:form2.html');
	exit();	
}else{
	header('location:form.html');
}

?>