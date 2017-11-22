<?php
require_once ('testSec.php');

$comida = $_POST['comida'];
$filme = $_POST['filme'];
$serie = $_POST['serie'];

$query=$pdo->prepare("INSERT INTO INFORMATION(COMIDA, FILME, SERIE) VALUES(?,?,?)");
$query->bindParam(1,$comida);
$query->bindParam(2,$filme);
$query->bindParam(3,$serie);

$query->execute();

?>



