<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title> Cafeteria d'Beauvoir </title>
		
		<link href = "css/style.css" rel = "stylesheet" type = "text/css">
		<link href = "images/icon.png" rel = "shortcut icon" type = "image/png">
		
		<script>
			function mostrar() {
				var xmlhttp = new XMLHttpRequest();
				var index = document.getElementById("categorias").selectedIndex;
				var codigo = document.getElementsByTagName("option") [index].value;
				
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
					}
				}
				
				xmlhttp.open("GET", "exibir.php?id=" + codigo, true);
				xmlhttp.send();
			}
		</script>
		
	</head>

	<body>
		<form class = "formulario">
			<div class = "div_formulario">
				<ul class = "ul_formulario">
					<li>
						<div class = "form-header-group">
							<h1 class = "form-header"> Cafeteria d'Beauvoir </h1>
							
							<div class = "form-subHeader"> Cardápio de Produtos </div>
						</div>
					</li>
			
					<li class = "form-line">
						<label class = "form-label"> Categoria </label>
						
						<div class = "form-input">
							<select class = "form-dropdown" id = "categorias">
								<?php
									$conecta = mysqli_connect("localhost", "root", "minas", "bdCafeteria");
									$consultaSQL = "SELECT*FROM Categoria";
									$query = mysqli_query($conecta, $consultaSQL);

									if(mysqli_num_rows($query) > 0) {
										while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
											echo "<option value = " . $linha['idcategoria'] . ">" . $linha['descricao'] . "</option>";
										}
									}
								?>
							</select>
						</div>
					</li>
				
					<li class = "form-line">
						<center><div>
							<button type = "button" class = "button" name = "bt" onclick = "mostrar()"> Exibir Produtos </button>
						</div></center>
					</li>
					
					<div id = "myDiv"></div>
				</ul>
			</div>
		</form>	
	</body>
</html>