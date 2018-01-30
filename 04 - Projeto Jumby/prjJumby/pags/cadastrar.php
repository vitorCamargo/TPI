<?php
	session_start();
	
	if($_POST) {
		$nome = trim($_POST["nome"]);
		$login = trim($_POST["login"]);
		$cep = trim($_POST["cep"]);
		$endereco = trim($_POST["endereco"]);
		$bairro = trim($_POST["bairro"]);
		$numero = trim($_POST["numero"]);
		$cidade = trim($_POST["cidade"]);
		$estado = trim($_POST["estado"]);
		$senha = trim($_POST["senha"]);
	
		
		$conecta = mysqli_connect("localhost", "root", "minas", "bdLogin");
		$sql = "SELECT * FROM Usuarios WHERE login = '" . $login . "'";
		
		$consulta = mysqli_query($conecta, $sql);
		
		$insert = "INSERT INTO Usuarios VALUES (null, '" . $nome . "', '" . $login ."', '" . $senha . "', '" . $cep . "', '" . $endereco . "', '" . $bairro . "', '" . $numero . "', '" . $cidade . "', '" . $estado . "')";
		
		if(mysqli_num_rows($consulta) > 0) {
			echo "<script>alert('Usuário já Existe'); history.back();</script>";
		} else {
			$consulta2 = mysqli_query($conecta, $insert);
			mysqli_fetch_array($consulta2, MYSQLI_ASSOC);
			header("Location: ../index.php");
		}
	} else {
		echo "<p> Desculpe, cadastro falhou! </p>";
		exit();
	}
?>