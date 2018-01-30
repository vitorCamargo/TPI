<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Exemplo PHP Cookies </title>
	</head>
	
	<body>
		<form action = "cookie.php" method = "GET">
			<p> Digite Nome: </p>
			<input type = "text" name = "nome" value = <?php 
					if(isset($_COOKIE["nome"])){
						echo $_COOKIE["nome"];
					}
				?>
			>
			<input type = "submit" value = "Gravar Cookie"/>
		</form>
	</body>
</html>