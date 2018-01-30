<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content  = "text/html" charset = "UTF-8">
		<title> Trapet | Home </title>
		
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "css/font.css">
		<link rel = "shortcut icon" type = "image/png" href = "images/icon.png">
		
		<script src = "js/jquery-1.11.3.js"></script>
		<script src = "js/java.js"></script>
        <script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBxkECQm3eLz7JDlEW6ZoYDkrGXy4cfyWU&sensor=false" type = "text/javascript"></script>
		<script src = "js/java_map.js" type = "text/javascript"></script>
	</head>

	<body>
		<div class = "slogan">
			<div class = "maps" id = "map"></div>
			
			<div class = "block">
				<img src = "images/icon.png" class = "logo"/>

				<p class = "title1"> Trapet </p>
				<p class = "title2"> Maps </p>
				<h4 class = "text"> Bem-vindo ao sistema de cadastro pelo seu endereço, esperamos que você possa ter a melhor experiência possível. </h4>
			</div>
		</div>
		<form action = "php/cadastro.php" method = "POST">
			<br/>
			<p align = center class = "t1">  CADASTRO </p> 
			<p align = center class = "t2"> ENDEREÇO DO CLIENTE </p>
			
			<div class = "nome">
				<label> Nome do Cliente: </label>
				<input type = "text" id = "nome" name = "nome" size = 45 required/>
			</div>
			
			<div class = "cep">
				<label> CEP: </label>
				<input type = "text" id = "cep" name = "cep" maxlength = "9" OnKeyPress = "formatar('#####-###', this)" required/>
				<input type = "button" id = "btBuscador" value = "Buscar CEP" class = "btcep"/>
			</div>
			
			<div class = "endereco">	
				<label> Endereço: </label>
				<input type = "text" id = "endereco" name = "endereco" size = 80 required readonly = "readonly"/>
			</div>
			
			<div class = "numero">
				<label> Número: </label>
				<input type = "text" id = "numero" name = "numero" size = 10 required/>
			</div>
			
			<div class = "bairro">	
				<label> Bairro: </label>
				<input type = "text" id = "bairro" name = "bairro" size = 80 required readonly = "readonly"/>
			</div>
			
			<div class = "cidade">	
				<label> Cidade: </label>
				<input type = "text" id = "cidade" name = "cidade" required readonly = "readonly"/>
			</div>
			
			<div class = "estado">	
				<label> Estado: </label>
				<input type = "text" id = "estado" name = "estado" size = 2 required readonly = "readonly"/>
			</div>	
			<br/>
			
			<center>
				<input type = "submit" value = "Cadastrar" class = "cadastrar"/>
				<input type = "reset" value = "Limpar" class = "limpar"/>
			</center>
		</form>
	</body>
</html>