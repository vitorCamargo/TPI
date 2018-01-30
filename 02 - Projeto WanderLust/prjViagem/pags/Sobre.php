<!DOCTYPE html>
<html>
	<head>
		<title> WanderLust | Sobre </title>
		<meta charset = "UTF-8"/>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "../css/style4.css" type = "text/css">
		
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
					<h2><span class = "corpo_titulo"> SOBRE NÓS </span></h2>
				</div>
				<div class = "quadro1_img">
					<img class = "img_quadro1" src = "../images/navio.png"/>
				</div>
				<div class = "quadro1_text">
					<div class = "text_quadro1">
						<span> Quem Somos? </span><br/><br/>
						<p> 
							A WanderLust Cruises é uma empresa líder no mercado de cruzeiros no mundo, navegando por todo ele ao longo do ano,
							oferece uma ampla gama de itinerários, viajando por todos os 7 mares.
						</p>&nbsp;
						<p>
							Sabemos que com a liderança global, vêm também as responsabilidades maiores em relação ao meio ambiente em que 
							a companhia trabalha, e é por isso que somos extremamente comprometidos com as  responsabilidades sociais e 
							ambientais.
						</p>
					</div>
				</div>
				<div class = "linha_pontilhada"></div>
				<div class = "quadro2">
					<p> 4 RAZÕES PRA VIAJAR CONOSCO: </p>
				</div>
				<div class = "quadro3">
					<img class = "quadro3_img" src = "../images/estrelas.png"/>
					<div class = "quadro3_text">
						<p> Expecialista em Viagens </p>&nbsp;
						<div class = "divisoria1"></div>
						<p> Variedade de Destinos </p>&nbsp;
						<div class = "divisoria2"></div>
						<p> Alcançe Global </p>&nbsp;
						<div class = "divisoria3"></div>
						<p> 100% Confiável </p>
					</div>
				</div>
				<div class = "quadro4_titulo">
					<div class = "quadro4_titulo_text">
						<p> Depoimentos </p>
					</div>
				</div>
				<div class = "quadro4_dep1">
					<div class = "dep1_text">
						<p> "Viagem 100% seguro, sem problemas, garante ao cliente muita diversão." </p><br/><br/>
						<span> - Debora S. - </span>
					</div>
					<img class = "dep1_img" src = "../images/listras.png"/>
				</div>
				<div class = "quadro4_dep2">
					<div class = "dep2_text">
						<p> "Muito interessante, muito confortável, fui tratada como rainha." </p><br/><br/>
						<span> - Grazzy S. - </span>
					</div>
					<img class = "dep2_img" src = "../images/listras.png"/>
				</div>
				<div class = "quadro4_dep3">
					<div class = "dep3_text">
						<p> "Bom preço, ótimo serviço, atendimento de qualidade e eficaz." </p><br/><br/>
						<span> - Arthur G. - </span>
					</div>
					<img class = "dep3_img" src = "../images/listras.png"/>
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