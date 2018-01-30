<html>
	<head>
		<meta charset = "UTF-8">
		<title> Cafeteria </title>
		
		<style>
			table {
				background-color: lightgray; 
				border: gray solid 2px;
				border-radius: 4px; 
				padding:10px;
			}
		</style>
		
	</head>
	
	<body>
		<p> Produtos: 
			<?php echo $_POST["nome"]; ?>
		</p>
		
		<table>
			<tr>
				<td> CODIGO </td>
				<td> DESCRIÇÃO </td>
				<td> PREÇO(R$) </td>
			</tr>
		
			<?php
				$nome = $_POST["nome"];
			
				if($nome != "") {
					$conecta = mysqli_connect("localhost", "root", "minas", "bdCafeteria");
				
					$consultaSQL = "SELECT * FROM Produto WHERE descricao LIKE '" . $nome . "%'";
					$query = mysqli_query($conecta, $consultaSQL);
				
					if(mysqli_num_rows($query) > 0) {
						while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
							echo "<tr><td>" . $linha['idproduto'];
							echo "<td>" . $linha['descricao'];
							echo "<td style = 'text-align:right'>" . $linha['preco'];	
						}
					} else {
						echo "<td>";
						echo "<td>";
					}
				}
			?>
		</table>
	</body>
</html>