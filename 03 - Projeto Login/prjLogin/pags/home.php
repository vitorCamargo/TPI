<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> Login </title>
		
		<link href = "../images/icon.ico" rel = "icon" type = "image/x-icon">
		
		<link href = "../css/style.css" rel = "stylesheet" type = "text/css">
	</head>
	
	<body class = "pagina">
		<div id = "content">
			<p class = "messagebox">
				<?php
					session_start();
					
					if(isset($_SESSION["usuario"])) {
						$user = $_SESSION["usuario"];
					}
					if(empty($user)) {
						echo "Usuário Não Conectado ao Sistema";
					} else {
						echo "Bem Vindo " . $user["nome"];
					}
				?>
			</p>
		</div>
		<div class = "header">
			<p> SupraNet - Sistema de Administração </p>
			
			<form action = "logout.php" method = "GET">
				<button id = "logout" class = "botao"> Fazer Logout </button>
			</form>
		</div>
	</body>
</html>