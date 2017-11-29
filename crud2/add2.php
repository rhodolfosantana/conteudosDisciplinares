<?php
require_once ('testSec.php');

$comida = $_POST['comida'];
$filme = $_POST['filme'];
$serie = $_POST['serie'];

$query=$pdo->prepare("INSERT INTO gostos(COMIDA, FILME, SERIE) VALUES(:comida, :filme, :serie)");
$query->bindParam(':comida', $comida);
$query->bindParam(':filme', $filme);
$query->bindParam(':serie', $serie);

$query->execute();

?>



