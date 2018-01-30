<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> Login </title>
		
		<link href = "../images/icon.png" rel = "icon" type = "image/png">
		
		<link href = "../css/style.css" rel = "stylesheet" type = "text/css">
		<link href = "../css/font.css" rel = "stylesheet" type = "text/css">
		

		<script src = "../js/jquery-1.11.3.js"></script>
		<script src = "../js/jquery.cycle.all.js"></script>		
		<script>
			$(document).ready(function() {
				$("#fade").cycle();
			});
		</script>
	</head>
	
	
	<body class = "pagina">
		<div id = "content">
			<span class = "messagebox">
				<?php
					session_start();
					
					if(isset($_SESSION["usuario"])) {
						$user = $_SESSION["usuario"];
					}
					if(empty($user)) {
						echo "Usuário Não Conectado ao Sistema";
					} else {
						echo "Seja Bem Vindo";
					}
				?>
			</span>
			<div class = "logout">
				<form action = "logout.php" method = "GET">
					<button id = "logout" class = "botao"> Fazer Logout </button>
				</form>
			</div>
		</div>
		
		<div class = "header">
			<div class = "semPerfil" style = "background-image: url(../images/uploads/<?php echo $user["id"]; ?>.png) !important;"></div>	
			<div id = "corpo" class = "botoes">
				<p> Perfil </p>
				<form action = "enviar.php" method = "post" enctype = "multipart/form-data" class = "form">
						<input class = "botao1" type = "file" name = "arquivo"/>
						<input class = "botao2" type = "submit" value = "Enviar Imagem"/>
				</form>
			</div>
			<div class = "inf">
				<span> Login: <b><?php echo $user["login"]; ?></b></span><br/>
				<span> Nome: <b><?php echo $user["nome"]; ?></b></span><br/>
				<span> Senha: <b><?php echo $user["senha"]; ?></b></span><br/>
				<span> CEP: <b><?php echo $user["cep"]; ?></b></span><br/>
				<span> nº: <b><?php echo $user["numero"]; ?></b></span><br/>
			</div>
		</div>
		
		<hr/>
		
		<div class = "slogan">
			<p> Aproveite agora e use JUMBY para salvar suas fotos em um lindo slide para poder ser adimirado por todos!!! Selecione 1 imagem de cada vez e faça o upload dela, para aparecer no slide. </p>
		</div>
		<div class = "botoes" id = "btSlide">
			<form action = "enviarSlide.php" method = "post" enctype = "multipart/form-data" class = "formSlide">
					<input class = "botao1" type = "file" name = "arquivoSlide" style = "float: none !important; margin-left: 0 !important"/>
					<input class = "botao2" type = "submit" value = "Enviar Imagem" style = "float: none !important; margin-left: 0 !important"/>
			</form>
		</div>
		<hr/>

		<div id = "fade">
			<?php
				$res = $user["id"];
				$pasta = '../images/slide/';
				$arquivos = glob("$pasta{" . $res . "_*.png}", GLOB_BRACE);
				foreach($arquivos as $img) {
					echo "<center> <img src = '$img' class = 'img_slide'/> </center>";
				}
			?>
		</div>
	</body>
</html>