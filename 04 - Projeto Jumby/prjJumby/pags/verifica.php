<?php
	session_start();
	
	if($_POST) {
		$login = trim($_POST["login"]);
		$senha = trim($_POST["senha"]);
		
		$conecta = mysqli_connect("localhost", "root", "minas", "bdLogin");
		$sql = "SELECT * FROM Usuarios WHERE login = '" . $login . "'";
		$consulta = mysqli_query($conecta, $sql);
		if(mysqli_num_rows($consulta) > 0){
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
											"login" => $linha['login'],
											"senha" => $linha['senha'],
											"cep" => $linha['cep'],
											"endereco" => $linha['endereco'],
											"bairro" => $linha['bairro'],
											"numero" => $linha['numero'],
											"cidade" => $linha['cidade'],
											"estado" => $linha['estado']);
			header("Location: inicio.php");
		}
	} else {
		echo "<p> A Conexão falhou </p>";
		exit();
	}
?>