<!DOCTYPE html>
<html>
	<head>
		<title> WanderLust | Pacotes </title>
		<meta charset = "UTF-8"/>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "../css/style3.css" type = "text/css">
		
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
					<h2><span class = "corpo_titulo"> PACOTES DE VIAGENS </span></h2>
				</div>
				<div class = "quadro1">
					<div class = "quadro1_img">
						<img src = "../images/chinelo.png"/>
					</div>
					<div class ="quadro1_text">
						<p> EXPLORE. </p>
						<p> SONHE. </p>
						<p> DESCUBRA. </p>
					</div>
				</div>
				<div class = "quadro2">
					<img class = "quadro2_img" src = "../images/paisagem.png">
				</div>
				<div class = "pct1">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $1.844 </p>
						<p class = "pt1_dest"> Brasil: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p><br/><br/>
						<p class = "pt1_desc"> "Deixe-se seduzir pela arquitetura de Salvador da Bahia, ou sonhe acordado nas lendárias praias de Copacabana e Ipanema." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct1.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct2">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $1.293 </p>
						<p class = "pt1_dest"> Argentina: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p><br/>
						<p class = "pt1_desc"> "A capital Argentina é uma cidade que agrada a todos os gostos, com atrações culturais, ótimos restaurantes, lojas com produtos excelentes e uma agitada vida noturna."</p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct2.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct3">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $1.773 </p>
						<p class = "pt1_dest"> Caribe: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p>
						<p class = "pt1_desc"> "O Caribe é a uma região formada pelas ilhas e costas banhadas. Os cruzeiros pelo Caribe são os mais animados de todos, por isso se deixe levar pela simpatia das pessoas, e por toda a energia caribenha."</p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct3.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct4">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $3.338 </p>
						<p class = "pt1_dest"> Hawaii: </p>
						<p class = "pt1_desc1"> Até 12x c/juros </p>
						<p class = "pt1_desc"> "O arquipélago havaiano é um destino com o qual muitos viajantes sonham para aproveitar suas belas praias com ondas perfeitas para os surfistas e suas belezas naturais em trilhas, vulcões e cachoeiras." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct4.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct5">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $1.027 </p>
						<p class = "pt1_dest"> Austrália: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p><br/><br/>
						<p class = "pt1_desc"> "Ninguém se decepciona ao viajar para a Austrália, país de destinos vibrantes e incontáveis maravilhas naturais." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct5.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct6">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $4.930 </p>
						<p class = "pt1_dest"> Índia: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p>
						<p class = "pt1_desc"> "A Índia é um país-continente que oferece um grande número de atrações espalhadas de norte a sul. Das praias de Goa às paisagens maravilhosas do Himalaia, com o Everest como principal atração." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct6.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct7">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $3.789 </p>
						<p class = "pt1_dest"> Grécia: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p>
						<p class = "pt1_desc"> "Nossos luxuosos cruzeiros pelo Mediterrâneo são organizados para proporcionar férias memoráveis em um fantástico pacote de descanso, em que haverá algo especial para cada um." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct7.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
				</div>
				<div class = "pct8">
					<div class = "pct1_pt1">
						<p class = "pt1_preco"> $6.358 </p>
						<p class = "pt1_dest"> África do Sul: </p>
						<p class = "pt1_desc1"> Até 10x c/juros </p>
						<p class = "pt1_desc"> "Deixe-se levar pela viagem da sua vida, um mundo de experiências fascinantes e memoráveis. Os marcantes ritmos e sons deste continente mágico soam como as pulsações do mundo." </p>
					</div>
					<div class = "pct1_pt2">
						<img class = "pt2_img" src = "../images/pct8.png"/>
					</div>
					<div class = "pt2_icon">
						<img src = "../images/folha.png"/>
					</div>
					<div class = "pt2_text">
						<a href = "Reserva.php" target = "_self"> Reserve </a>
					</div>
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