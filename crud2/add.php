<?php 
require_once 'conection.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql= "INSERT INTO usuario(NOME, SENHA) VALUES(:nome,:senha)";
$query = $conn->prepare($sql);
$query->bindParam(':nome',$nome);
$query->bindParam(':senha',$senha);

$stmt = $query->execute();
// var_dump($stmt->errorInfo());
header('location: form.html');
?>
