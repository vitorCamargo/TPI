<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> Jumby | Login </title>
		
		<link href = "images/icon.png" rel = "icon" type = "image/png">
		
		<link href = "css/style.css" rel = "stylesheet" type = "text/css">
		<link href = "css/font.css" rel = "stylesheet" type = "text/css">
		
		<script src = "js/jquery-1.11.3.js"></script>
		<script src = "js/js.js"></script>
		<script src = "js/java.js"></script>
	</head>
	
	<body id = "pagina">
		<?php
			session_start();
			if(isset($_SESSION["usuario"])) {
				header("Location: pags/inicio.php");
			} else {
				
			}
		?>
		<menu>
			<button type = "button" onclick = "irPara(1)" class = "menu_botao1"> Login </button>
			<button type = "button" onclick = "irPara(2)" class = "menu_botao2"> Cadastro </button>
		</menu>
		
		<div class = "form">
			<form name = "form1" id = "form1" method = "POST" action = "pags/verifica.php">
				<div class = "head">
					<p> JUMBY </p>
					<span> Faça seu login para entrar, caso não tenha nenhuma conta, <a href = "cadastro.html">cadastre-se</a> gratuitamente! </span>
				</div>
				
				<input type = "text" name = "login" class = "login" maxlength = "20" placeholder = "Usuário" required/>
				<input type = "password" name = "senha" class = "senha" maxlength = "20" placeholder = "Senha" required/>
				<input type = "submit" value = "ENTRAR" class = "botao"/>
			</form>
		</div>
	</body>
</html>