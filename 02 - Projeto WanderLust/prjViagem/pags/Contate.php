<!DOCTYPE html>
<html>
	<head>                
		<title> WanderLust | Contato </title>
		<meta charset = "UTF-8"/>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "../css/style5.css" type = "text/css">
		
		<link rel = "stylesheet" href = "../font/font1.css" type = "text/css">
		
		<script src = "../js/jquery-2.1.3.min.js"></script>
		<script src = "../js/js1.js"></script>
        <script src = "../js/jsLogin.js"></script>
		
	</head>
	<body>
		<div class = "corpo_todo">
            <!-- Inicio MenuLogin -->
            <?php
                session_start();
                if(isset($_SESSION["usuario"])) {
                    $user = $_SESSION["usuario"];
                    echo '<style>#menuLogin_buttons{display: none;}</style>';
                    echo '<style>#menuLogin_text{display: block;}</style>';
                } else {
                    echo '<style>#menuLogin_buttons{display: block;}</style>';
                    echo '<style>#menuLogin_text{display: none;}</style>';
                }
            ?>
            <menu class = "menuLogin">
                <div id = "menuLogin_buttons">
                    <button type = "button" onclick = "irPara(3)" class = "menuLogin_botao1"> Login </button>
                    <button type = "button" onclick = "irPara(4)" class = "menuLogin_botao2"> Cadastro </button>
                </div>
                <div id = "menuLogin_text">
                    <span class = "menuLogin_text" id = "menuLogin_log">
                        <?php
                            echo 'Bem Vindo ' . $user["nome"];
                        ?>
                        <a href = "logout.php" target = "_self" class = "link_menu" id = "menuLogin_logout" > Logout </a>
                    </span>
                </div>
            </menu>
            <!-- Fim MenuLogin -->
            
			<!-- Inicio Cabeça -->
			<a href = "../index.php" target = "_self">
				<img class = "img_icon" src = "../images/icon.png"/>
			</a>
			<div class = "slogan_icon">
				<h1 class = "font_0"> WANDERLUST </h1>
				<p class = "font_8"> Seafaring | Cruise </p>
			</div>
			<!-- Fim Cabeça -->
			
			<!-- Inicio Menu -->
			<div class = "div_menu">
				<a href = "../index.php" target = "_self" class = "link_menu"> Home </a>
				<a href = "Destinos.php" target = "_self" class = "link_menu"> Destinos </a>
				<span id = "menu_1">
					<a href = "Pacotes.php" target = "_self" class = "link_menu" id = "menu_pacotes" > Pacotes </a>
					<a href = "Reserva.php" target = "_self" class = "link_menu" id = "menu_reserva" > Reservas </a>
				</span>
				<span id = "menu_2">
					<a href = "Sobre.php" target = "_self" class = "link_menu" id = "menu_sobre"> Sobre Nós </a>
					<a href = "Contate.php" target = "_self" class = "link_menu" id = "menu_contate" > Contate </a>
				</span>
			</div>
			<!-- Fim Menu -->
			
			<!-- Inicio Corpo -->
			<div class = "corpo">
				<div class = "div_corpo_titulo">
					<h2><span class = "corpo_titulo"> CONTATE-NOS </span></h2>
				</div>
				<div class = "quadro1">
					<img src = "../images/mala.png"/>
					<p> Ligue-nos GRÁTIS </p>
				</div>
				<div class = "forma">
					<b class = "supesq"></b>
					<b class = "supdir"></b>
					<b class = "infesq"></b>
					<b class = "infdir"></b>
					<div class = "forma_text">
						<p> (XX) 1234-5677 </p>
					</div>
				</div>
				<div class = "form">
					<input type = "text" placeholder = "Nome"/>
					<input type = "text" placeholder = "Email"/>
					<input type = "text" placeholder = "Assunto"/>
					<textarea placeholder = "Mensagem"></textarea>
					<button> Enviar </button>
				</div>
			</div>
		</div>
		<!-- Fim Corpo -->
		
		<!-- Inicio Anuncio -->
		<div class = "anuncio2">
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
		<div class = "rodape2">
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