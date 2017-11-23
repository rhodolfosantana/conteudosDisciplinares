<?php 
require_once ('conection.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql= "INSERT INTO usuario(NOME, SENHA) VALUES(:nome,:senha)";
$query = $pdo->prepare($sql);
$query->bindParam(':nome',$nome);
$query->bindParam(':senha',$senha);

$query->execute();
header('location: form.html');
?>
