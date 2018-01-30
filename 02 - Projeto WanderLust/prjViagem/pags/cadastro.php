<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title> WanderLust | Cadastro </title>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
        <link rel = "stylesheet" href = "../css/style7.css" type = "text/css">
		
		<link rel = "stylesheet" href = "../font/font1.css" type = "text/css">
		<link rel = "stylesheet" href = "../font/font2.css" type = "text/css">
		
		<script src = "../js/jquery-2.1.3.min.js"></script>
		<script src = "../js/js1.js"></script>
		<script src = "../js/jsLogin.js"></script>
	</head>
	
	<body id = "pagina">
        <div class = "corpo_todo">
			<!-- Inicio Header -->
			<a href = "../index.php" target = "_self">
				<img class = "img_icon" src = "../images/icon.png"/>
			</a>
			<div class = "slogan_icon">
				<h1 class = "font_0"> WANDERLUST </h1>
				<p class = "font_8"> Seafaring | Cruise </p>
			</div>
			<!-- Fim Header -->
			
			<!-- Inicio Menu -->
			<div class = "div_menu">
				<a href = "../index.php" target = "_self" class = "link_menu"> Home </a>
				<a href = "../pags/Destinos.php" target = "_self" class = "link_menu"> Destinos </a>
				<span id = "menu_1">
					<a href = "../pags/Pacotes.php" target = "_self" class = "link_menu" id = "menu_pacotes" > Pacotes </a>
					<a href = "../pags/Reserva.php" target = "_self" class = "link_menu" id = "menu_reserva" > Reservas </a>
				</span>
				<span id = "menu_2">
					<a href = "../pags/Sobre.php" target = "_self" class = "link_menu" id = "menu_sobre"> Sobre Nós </a>
					<a href = "../pags/Contate.php" target = "_self" class = "link_menu" id = "menu_contate" > Contate </a>
				</span>
			</div>
			<!-- Fim Menu -->
			
			<!-- Inicio Body -->
            <div class = "corpo">
                <div class = "div_corpo_titulo">
					<h2><span class = "corpo_titulo"> FAÇA SEU CADASTRO </span></h2>
				</div>
                <form action = "../pags/cadastrar.php" method = "POST" id = "form1" style = "margin-left: calc(50% - 299px);">
                    <div class = "formulario">
                        <div class = "cabecalho">
                            <p><b> CADASTRO </b></p>
                        </div>
                        <div class = "estrutura">
                            <div class = "nome" style = "padding-top: 20px !important;">
                                <label class = "nome_titulo"> Digite seu nome completo: </label><br/>
                                <span class = "pri_nome">
                                    <input class = "in_nome" type = "text" size = "35" name = "nome"/>
                                </span>
                            </div>
                            <div class = "nome">
                                <label class = "nome_titulo"> Digite seu nome de login: </label><br/>
                                <span class = "pri_nome">
                                    <input class = "in_nome" type = "text" size = "35" name = "login"/>
                                </span>
                            </div>
                            <div class = "nome">
                                <label class = "nome_titulo"> Digite sua senha: </label><br/>
                                <span class = "pri_nome">
                                    <input class = "in_nome" type = "password" size = "35" name = "senha"/>
                                </span>
                            </div>
                            <div class = "button">
                                <input type = "submit" class = "in_button" value = "CADASTRAR"/>
                            </div>
                        </div>
                    </div>
                </form>
			</div>
		</div>
		<!-- Fim Body -->
		
		<!-- Inicio Anuncio -->
		<div class = "anuncio">
			<div class = "back_anuncio">
				<div class = "anuncio_back"></div>
			</div>
			<div class = "dados_anuncio">
				<span> RESERVE SUAS FÉRIAS JÁ </span>
			</div>
			<div class = "anuncio_link" class = "s10">
				<a href = "pags/Reserva.php" target = "_self" class = "link_button">
					<span> I R </span>
				</a>
			</div>
		</div>
		<!-- Fim Anuncio -->
			
		<!-- Inicio Rodapé -->
		<div class = "rodape">
			<div class = "back_rodape">
				<div class = "rodape_back"></div>
			</div>
			<div class = "dados_rodape">
				<p> Av. Guilherme de Paula Xavier, 295 - Centro </p>
				<p> Campo Mourão - PR </p>
				<p> vitorcamargo@alunos.utfpr.edu.br </p>
				<p> Tel: (15) 9 99606-4686 </p><br/>
				<p> © 2015 by WanderLust. Criado by Vitor </p>
				<p> </p>
			</div>		
		</div>
		<!-- Fim Rodapé -->
	</body>
</html>