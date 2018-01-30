<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> Cadastro </title>
		
		<link href = "images/icon.ico" rel = "icon" type = "image/x-icon">
		
		<link href = "css/style.css" rel = "stylesheet" type = "text/css">
		
		<script src = "JS/js.js"></script>
	</head>
	
	<body id = "pagina">
		<menu>
			<button type = "button" onclick = "irPara(1)" class = "menu_botao1"> Login </button>
			<button type = "button" onclick = "irPara(2)" class = "menu_botao2"> Cadastro </button>
		</menu>
		<form name = "form1" id = "form1" method = "POST" action = "pags/cadastrar.php">
				<div class = "head">
					<p> Cadastre-se </p>
				</div>
				
				<input type = "text" name = "nome" class = "login" maxlength = "20" placeholder = "Digite seu Nome"/>
				<input type = "text" name = "login" class = "login" maxlength = "20" placeholder = "Digite o Nome de Login"/>
				<input type = "password" name = "senha" class = "senha" maxlength = "20" placeholder = "Digite uma Senha"/>
			 	<input type = "submit" value = "CADASTRAR" class = "botao"/>
		</form>
	</body>
</html>