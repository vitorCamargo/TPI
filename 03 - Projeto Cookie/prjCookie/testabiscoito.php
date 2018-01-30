<?php
	if(!isset($_COOKIE["nome"])){
		echo "<p> Biscoito Vazio!!";
	}
	else{
		$valor = $_COOKIE["nome"];
	
		setcookie("nome", $valor, time() + (86400 * 30));
		echo "<p> Biscoito contém o valor: $valor </p>";	
	}
?>