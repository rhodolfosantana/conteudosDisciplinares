<?php 
require_once ('conection.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$query=$pdo->prepare("INSERT INTO INFORMATION(NOME, SENHA) VALUES(?,?)");
$query->bindParam(1,$nome);
$query->bindParam(2,$senha);

$query->execute();
?>
