<?php
	session_start();
	
	if(isset($_SESSION["usuario"])) {
		$user = $_SESSION["usuario"];
	}
	
	$extends = strstr($_FILES['arquivoSlide']['name'], '.');
	
	if(($extends == ".png" || $extends == ".PNG") || ($extends == ".jpeg" || $extends == ".JPEG") || ($extends == ".jpg" || $extends == ".JPG")) {
		$destino = '../images/slide/' ;
		
		$arquivo_tmp = $_FILES['arquivoSlide']['tmp_name'];
		$cont += 1;
		$nome = $user["id"] . '_' . $_FILES['arquivoSlide']['name'] . '.' . "png";
		
		move_uploaded_file($arquivo_tmp, $destino . $nome);
		header("Location: inicio.php");
	} else {
		header("Location: inicio.php");
		echo "<script>alert('Imagem Incompatível');</script>";
	}
?>