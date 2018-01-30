<?php
	$valor = $_GET["nome"];
	
	setcookie("nome", $valor, time() + (86400 * 30));
	echo "<p> Biscoito 'nome' criado com sucesso </p>";
?>