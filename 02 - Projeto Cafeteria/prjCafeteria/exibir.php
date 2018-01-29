<body>
	<div class = "div_button" style = "padding-bottom: 36px;">
		<li class = "form-line">
			<label class = "form-label" style = "width: 15%; text-align: center;"><strong> Código </strong></label>
			<label class = "form-label" style = "width: 50%; text-align: center;"><strong> Descrição </strong></label>
			<label class = "form-label" style = "width: 15%; text-align: center;"><strong> Preço </strong></label>
		</li>

		<li class = "form-line">
			<?php
				$id = $_GET['id'];
				$conecta = mysqli_connect("localhost", "root", "minas", "bdCafeteria");
				$consultaSQL = "SELECT*FROM produto WHERE Categoria = " . $id;
				$query = mysqli_query($conecta, $consultaSQL);

				if(mysqli_num_rows($query) > 0) {
					while($linha = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
						echo "<li class = 'form-line'><label class = 'form-label' style = 'width: 15%;'>" . $linha['idproduto'] . "</label>";
						echo "<label class = 'form-label' style = 'width: 50%;'>" . $linha['descricao'] . "</label>";
						echo "<label class = 'form-label' style = 'width: 15%;'>" . $linha['preco'] . "</label></li>";
					}
				}
			?>
		</li>
	</div>
</body>