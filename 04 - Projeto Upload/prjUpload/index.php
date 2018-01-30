<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Upload | Home </title>
		
		<link rel = "stylesheet" type = "text/css" href = "css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "css/font.css">
		<link rel = "shortcut icon" type = "image/png" href = "images/icon.png">
		
		<script src = "js/jquery-1.11.3.js"></script>
		<script src = "js/java.js"></script>
	</head>
	
	<body>
		<div class = "slogan">
			<b class = "slogan1"> Free</b><b class = "slogan2">Uploads </b>
		</div>
		<div class = "box_title">
			<h2> NÓS AMAMOS FREE UPLOAD ART & IMAGES! </h2>
			<p> Bem-vindo ao FreeUploads.net, uma divertida pequena comunidade de amantes de uploads que compartilham gratuitamente imagens. Todas as imagens neste site são de uso gratuito para uso pessoal e a maioria deles pode ser usado comercialmente. Se você optar por fazer um upload, por favor escolha uma imagem com extensão <i>.png, .jpeg </i> ou <i> .jpg</i>, se não o upload falhará. Muitissímo obrigado desde já. </p>
		</div>
		<div id = "corpo" class = "botoes">
			<form action = "php/enviar.php" method = "post" enctype = "multipart/form-data">
				<center>
					<input class = "botao1" type = "file" name = "arquivo"/>
				</center><br/>
				<center>
					<input class = "botao2" type = "submit" value = "Enviar Imagem"/>
				</center>
			</form>
		</div>
	</body>
</html>