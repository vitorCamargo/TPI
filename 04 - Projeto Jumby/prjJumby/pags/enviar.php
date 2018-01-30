<?php
	session_start();
	
	if(isset($_SESSION["usuario"])) {
		$user = $_SESSION["usuario"];
	}
	
	$extends = strstr($_FILES['arquivo']['name'], '.');
	
	if(($extends == ".png" || $extends == ".PNG") || ($extends == ".jpeg" || $extends == ".JPEG") || ($extends == ".jpg" || $extends == ".JPG")) {
		$destino = '../images/uploads/' ;
		
		$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
		
		$nome = $user["id"] . '.' . "png";
		
		move_uploaded_file($arquivo_tmp, $destino . $nome);
		header("Location: inicio.php");
	} else {
		header("Location: inicio.php");
		echo "<script>alert('Imagem Incompatível');</script>";
	}
?>