<?php 
require_once ('testVeri.php');

$nome = $_POST['nome'];
$filme = $_POST['filme'];
$serie = $_POST['serie'];


$query=$pdo->prepare("INSERT INTO DADOS(DA_NOME,DA_FILME,DA_SERIE ) VALUES(?,?,?)");
$query->bindParam(1,$nome);
$query->bindParam(2,$filme);
$query->bindParam(3,$serie);

$query->execute();
?>
