<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> Cafeteria </title>
		
		<style>
			#div {
				border: black solid 2px;
				border-radius: 2px;
				padding: 10px; 
				width:300px; 
				border-radius: 5px;
				font-family: calibri;
			}
		</style>
		
		<script src = "jquery-2.1.3.min.js"></script>
		
		<script>
			$(document).ready(function() {
				$("#procurar").keyup(function() {
					$.post("exibir.php", {
						nome: $("#procurar").val()
					},
					function (data, status) {
						$("#resultado").html(data);
					});
				});
			});
		</script>	
	</head>

	<body>
		<div id = "div">
			<section>
				<p> Pesquisa de Produtos da Cafeteria </p>
				<p> Procurar produto: 
					<br/><input type = "search" id = "procurar" style = "outline: none;"/>
				</p><hr/>
		
				<div id = "resultado">
					<p> Nenhum produto localizado... </p>	
				</div><hr>
			</section>
		</div>
	</body>	
</html>	