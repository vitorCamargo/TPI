<!DOCTYPE html>
<html>
	<head>
		<meta chaset = "UTF-8">
		<title> Sigma MONEY </title>
		
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "css/font.css">
		<link rel = "shortcut icon" type = "image/png" href = "images/icon.png">
		
		<script src = "js/jquery-1.11.3.js"></script>
		<script src = "js/java.js"></script>
	</head>
	
	<body>
		<div class = "logo_div">
			<img class = "img" src = "images/icon.png"/>
			<h2> SIGMA <span> MONEY </span></h2>
			<div class = "seta" id = "seta"></div>
			<p class = "text"> O Conversor de todas as <br/> principais moedas internacionais.</p>
		</div>
		
		<div id = "corpo">
			<div class = "content">
				<select id = "lingua1" class = "lingua1">
					<option value = "1" selected> Real - Brasil </option>
					<option value = "2"> Dolar - E.U.A </option>
					<option value = "3"> Euro - Alemanha </option>
					<option value = "4"> Libra - Reino Unido </option>
				</select>
				<span id = "lingua1_span">  <span> <input type = "number" min = "0" class = "lingua1_input" id = "lingua1_input" placeholder = "Digite um valor"/>
								
				<br/><select id = "lingua2" class = "lingua2">
					<option value = "1"> Real - Brasil </option>
					<option value = "2" selected> Dolar - E.U.A </option>
					<option value = "3"> Euro - Alemanha </option>
					<option value = "4"> Libra - Reino Unido </option>
				</select>
				
				<br/><img src = "images/botao.png" class = "botao" id = "botao"/>
			</div>
				
			<div id = "conversao">  </div>
		</div> 
	</body>
</html>