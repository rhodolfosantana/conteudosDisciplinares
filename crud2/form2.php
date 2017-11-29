
 <?php
        $sql = $conn->query("
        	SELECT gostos.*, usuario.nome
        	FROM gostos
        		JOIN usuario 
        		ON usuario.US_ID = gostos.US_GO_ID
        ");
        $sql->execute();
        $imprime = $sql->fetchAll();

     
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php include 'testSec.php'; ?>
	<form action="add2.php" method="POST">
		<input type="text" name="comida" placeholder="Comida...">
		<input type="text" name="filme" placeholder="Filme...">
		<input type="text" name="serie" placeholder="Serie...">
		<input type="submit" value="Cadastrar">
	</form>	
	<table>
		<tr>
			<?php  foreach ($imprime as $itens) : ?>
				<td> <?= $itens['NOME'] ?> </td>
				<td> <?= $itens['COMIDA']  ?> </td>
				<td> <?= $itens['FILME']  ?> </td>
				<td> <?= $itens['SERIE']  ?> </td>
			<?php endforeach ?>					
		</tr>
	</table>

	    
</body>
</html>