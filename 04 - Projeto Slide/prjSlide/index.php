<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> UpsideDown | Home </title>
		
		<link rel = "icon" type = "image/png" href = "images/icon.png">
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "css/font.css">
		
		<script src = "js/jquery-1.11.3.js"></script>
		<script src = "http://malsup.github.io/jquery.cycle.all.js"></script>
		<script src = "js/java.js"></script>
	</head>

	<body id = "#">
		<menu>
			<b class = "up"> Upside</b>
			<b class = "do">Down </b>
			<img src = "images/ico.png" class = "img_logo"/>
		</menu>
		
		<div class = "slogan">
			<div id = "fade">
				<?php
					$pasta = 'images/slide/';
					$arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif}", GLOB_BRACE);
					foreach($arquivos as $img) {
						echo "<center> <img src = '$img' class = 'img_slide'/> </center>";
					}
				?>
			</div>
			<img src = "images/l.png" id = "previous"/>
			<img src = "images/r.png" id = "next"/>
			
			<div class = "texto">
				<p align = "center"> Bem-Vindo! </p>
				<center> Faça download gratuito de imagens, decubra um novo modo de ver e fazer arte. </center>
			</div>
		</div>	
		
		<div class = "content">
			<?php
				$pasta = 'images/slide/';
				$arquivos = glob("$pasta{*.jpg,*.JPG,*.png,*.gif}", GLOB_BRACE);
				foreach($arquivos as $img) {
					echo "<div class = 'quadro'> <a href = '$img' download> <img src = '$img' class = 'img_quadro'/> </a> </div>";
				}
			?>
		</div>
		<div class = "voltar-topo" style = "display: block;">
   			<a href = "#">
				<img src = "images/up.png" class = "img_topo"/>
			</a>
		</div>
	</body>
</html>