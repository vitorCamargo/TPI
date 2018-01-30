<?php
	session_start();
	
	if($_POST) {
		$login = trim($_POST["login"]);
		$senha = trim($_POST["senha"]);
		
		if(empty($login)) {
			echo "<script>alert('Preencha o Campo do  Login'); history.back();</script>";
		} else if(empty($senha)) {
			echo "<script>alert('Preencha o Campo da Senha'); history.back();</script>";
		} else {
			$conecta = mysqli_connect("localhost", "root", "minas", "bdViagem");
			$sql = "SELECT * FROM Login WHERE login = '" . $login . "'";
			$consulta = mysqli_query($conecta, $sql);

			if(mysqli_num_rows($consulta) > 0) {
				$linha = mysqli_fetch_array($consulta, MYSQLI_ASSOC);
				$usuario = $linha['login'];
			} else {
				$usuario = "";
			}
			
			if($login != $usuario) {
				echo "<script>alert('Usuário Não Existe'); history.back();</script>";
			} else if($senha != $linha['senha']) {
				echo "<script>alert('Senha Inválida'); history.back();</script>";
			} else {
				$_SESSION["usuario"] = array("id" => $linha['id'],
												"nome" => $linha['nome'],
												"login" => $linha['login']);
				header("Location: reserva.php");
			}
		}
	} else {
		echo "<p> A Conexão com a SupraNet falhou </p>";
		exit();
	}
?>