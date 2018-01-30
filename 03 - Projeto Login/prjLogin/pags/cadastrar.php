<?php
	session_start();
	
	if($_POST) {
		$nome = trim($_POST["nome"]);
		$login = trim($_POST["login"]);
		$senha = trim($_POST["senha"]);
	
		if(empty($login)) {
			echo "<script>alert('Preencha o Campo do  Login'); history.back();</script>";	
		} else if(empty($senha)) {
			echo "<script>alert('Preencha o Campo da Senha'); history.back();</script>";
		} else if(empty($nome)) {
			echo "<script>alert('Preencha o Campo do Nome'); history.back();</script>";
		} else {
			$conecta = mysqli_connect("localhost", "root", "minas", "bdLogin");
			$sql = "SELECT * FROM Usuarios WHERE login = '" . $login . "'";
			$insert = "INSERT INTO Usuarios VALUES (null, '" . $nome . "', '" . $login ."', '" . $senha . "')";
			$consulta = mysqli_query($conecta, $sql);
			
			if(mysqli_num_rows($consulta) > 0) {
				echo "<script>alert('Usuário já Existe'); history.back();</script>";
			} else {
				$consulta2 = mysqli_query($conecta, $insert);
				mysqli_fetch_array($consulta2, MYSQLI_ASSOC);
				header("Location: ../index.php");
			}
		}
	} else {
		echo "<p> A Conexão com a SupraNet falhou </p>";
		exit();
	}
?>