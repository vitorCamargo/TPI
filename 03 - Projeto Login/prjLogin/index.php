<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> Login </title>
		
		<link href = "images/icon.ico" rel = "icon" type = "image/x-icon">
		
		<link href = "css/style.css" rel = "stylesheet" type = "text/css">
		
		<script src = "JS/js.js"></script>
	</head>
	
	<body id = "pagina">
		<?php
			session_start();
			if(isset($_SESSION["usuario"])) {
				header("Location: pags/home.php");
			} else {
				
			}
		?>
		<menu>
			<button type = "button" onclick = "irPara(1)" class = "menu_botao1"> Login </button>
			<button type = "button" onclick = "irPara(2)" class = "menu_botao2"> Cadastro </button>
		</menu>
		<form name = "form1" id = "form1" method = "POST" action = "pags/verifica.php">
				<div class = "head">
					<p> SupraNet - Login </p>
				</div>
				
				<input type = "text" name = "login" class = "login" maxlength = "20" placeholder = "Usuário"/>
				<input type = "password" name = "senha" class = "senha" maxlength = "20" placeholder = "Senha"/>
			 	<input type = "submit" value = "ENTRAR" class = "botao"/>
		</form>
	</body>
</html>