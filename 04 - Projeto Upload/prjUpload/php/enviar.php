<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Upload | Files </title>
		
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css">
		<link rel = "stylesheet" type = "text/css" href = "../css/font.css">
		<link rel = "shortcut icon" type = "image/png" href = "../images/icon.png">
		
		<script src = "../js/jquery-1.11.3.js"></script>
		<script src = "../js/java.js"></script>
		
	</head>
	<body>
		<div class = "slogan">
			<b class = "slogan1"> Free</b><b class = "slogan2">Uploads </b>
		</div>
		<div class = "volta">
			<input type = "button" id = "botao2_back" class = "botao2" value = "Voltar"/>
		</div>			
		<?php
			$extends = strstr($_FILES['arquivo']['name'], '.');
			
			if(($extends == ".png" || $extends == ".PNG") || ($extends == ".jpeg" || $extends == ".JPEG") || ($extends == ".jpg" || $extends == ".JPG")) {
				$destino = '../images/uploads/' . $_FILES['arquivo']['name'];
				
				$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
				
				move_uploaded_file($arquivo_tmp, $destino);
				
				echo "<div class = 'box_title'>";
				echo "<h2> Arquivo Recebido com Sucesso </h2>";
				echo "<p> Muito Obrigado por utilizar o nosso sistema de Upload, toda a equipe da FREE UPLOAD ART & IMAGES agradece sua contribuição. Segue a seguir o upload com o nome de " . $_FILES['arquivo']['name'];
				echo " do tipo " . $_FILES['arquivo']['type'] . " com um tamanho de " . $_FILES['arquivo']['size'] . " Bytes.";
				echo "</p>";
				echo "</div>";
				
				echo "<img class = 'img_up' src = '$destino'/>";
			} else {
				header("location: ../index.php");
			}
		?>
	</body>
</html>