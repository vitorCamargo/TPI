<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content  = "text/html" charset = "UTF-8">
		<title> Trapet | Cadastro </title>
		
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "../css/font.css">
		<link rel = "shortcut icon" type = "image/png" href = "../images/icon.png">
		
		<script src = "../js/jquery-1.11.3.js"></script>
		<script src = "../js/java.js"></script>
        <script src = "https://maps.googleapis.com/maps/api/js?sensor=false" type = "text/javascript"></script>
		<script src = "../js/java_map.js" type = "text/javascript"></script>
	</head>
	<body>
		<div class = "slogan">
			<div class = "maps" id = "map"></div>
			
			<div class = "block">
				<img src = "../images/icon.png" class = "logo"/>

				<p class = "title1"> Trapet </p>
				<p class = "title2"> Maps </p>
				<h4 class = "text"> Bem-vindo ao sistema de cadastro pelo seu endereço, esperamos que você possa ter a melhor experiência possível. </h4>
			</div>
		</div>
		
		<p align = center class = "t1">  CADASTRO </p> 
		<p align = center class = "t2"> ENDEREÇO DO CLIENTE </p>
		
		<div class = "cadastrado">
			<?php
				$nome = $_POST['nome'];
				$cep = $_POST['cep'];
				$endereco = $_POST['endereco'];
				$bairro = $_POST['bairro'];
				$numero = $_POST['numero'];
				$cidade = $_POST['cidade'];
				$estado = $_POST['estado'];
				
				echo $nome . ", muito obrigado por utilizar o nosso serviço! Seus dados foram cadastrados com sucesso! <br/>";
				echo "<div align = left>";
				echo "<p> Seu CEP: " . $cep . "</p>";
				echo "<p> Seu endereço: " .$endereco . "</p>";
				echo "<p> Seu Bairro: " . $bairro . ", nº " . $numero . "</p>";
				echo "<p> Sua Cidade " . $cidade . " - " . $estado . "</p>";
				echo "</div>";
			?>
			<center>
				<input type = "button" class = "voltar" id = "voltar" value = "Voltar"/>
		</div>
	</body>
</html>