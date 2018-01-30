<!DOCTYPE html>
<html>
	<head>
		<title> WanderLust | Home </title>
		<meta charset = "UTF-8">
		
		<link rel = "shortcut icon" href = "images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "css/style1.css" type = "text/css">
		
		<link rel = "stylesheet" href = "font/font1.css" type = "text/css">
		<link rel = "stylesheet" href = "font/font2.css" type = "text/css">
		
		<script src = "js/jquery-2.1.3.min.js"></script>
		<script src = "js/js1.js"></script>
		<script src = "js/jsLogin.js"></script>
	</head>

	<body>
		<div class = "corpo_todo">
			<!-- Inicio Header -->
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
                    <button type = "button" onclick = "irPara(1)" class = "menuLogin_botao1"> Login </button>
                    <button type = "button" onclick = "irPara(2)" class = "menuLogin_botao2"> Cadastro </button>
                </div>
                <div id = "menuLogin_text">
                    <span class = "menuLogin_text" id = "menuLogin_log">
                        <?php
                            echo 'Bem Vindo ' . $user["nome"];
                        ?>
                        <a href = "pags/logout.php" target = "_self" class = "link_menu" id = "menuLogin_logout" > Logout </a>
                    </span>
                </div>
			</menu>
			<!-- Fim Header -->
			
			<!-- Inicio Menu -->
			<a href = "index.php" target = "_self">
				<img class = "img_icon" src = "images/icon.png"/>
			</a>
			<div class = "slogan_icon">
				<h1 class = "font_0"> WANDERLUST </h1>
				<p class = "font_8"> Seafaring | Cruise </p>
			</div>
			
			<div class = "div_menu">
				<a href = "pags/index.php" target = "_self" class = "link_menu"> Home </a>
				<a href = "pags/Destinos.php" target = "_self" class = "link_menu"> Destinos </a>
				<span id = "menu_1">
					<a href = "pags/Pacotes.php" target = "_self" class = "link_menu" id = "menu_pacotes" > Pacotes </a>
					<a href = "pags/Reserva.php" target = "_self" class = "link_menu" id = "menu_reserva" > Reservas </a>
				</span>
				<span id = "menu_2">
					<a href = "pags/Sobre.php" target = "_self" class = "link_menu" id = "menu_sobre"> Sobre Nós </a>
					<a href = "pags/Contate.php" target = "_self" class = "link_menu" id = "menu_contate" > Contate </a>
				</span>
			</div>
			<!-- Fim Menu -->
			
			<!-- Inicio Body -->			
			<div class = "corpo">
				
				<div class = "quadro">
					<div class = "quadro_frase">
						<h3> MARCAR UMA VIAGEM, É MARCAR A VIDA PARA SEMPRE. </h3>
					</div>
					<h2 class = "quadro_mais"> Veja Mais </h2>
					<div class = "quadro_link">
						<a href = "pags/Pacotes.php" target = "_self" class = "quadro_button"> + </a>
					</div>
				</div>
					
				<img class = "img_binoculo" src = "images/binoculos.png"/>
				
				<div class = "div_pop1">
					<b class = "forma_supesq"></b>
					<b class = "forma_supdir"></b>
					<b class = "forma_infesq"></b>
					<b class = "forma_infdir"></b>
					
					<div class = "div_pop2">
						<a href = "pags/Destinos.php" target = "_self">
							<span class = "pop2_frase"> ENCONTRE </span>
						</a>
					</div>
				</div>
				<div class = "div_pop3">
					<h2 class = "pop3_frase"> Seu Destino </h2>
				</div>
				<div class = "div_pop4">
					<a href = "pags/Sobre.php" target = "_self" class = "pop4_frase"> BEM-VINDO À NOSSO MUNDO </a>
				</div>
				<div class = "div_prop1">	
					<h2 class = "prop1_frase"> Super Ofertas </h2>
				</div>
				<div class = "div_img1">
					<img class = "img1_prop1" src = "images/relogio.png"/>
					<b class = "borda_img1"></b>
				</div>
				<div class = "div_prop1_text">									
					<div class = "prop1_text">	 
						<h2> Bahia <span> -------------------- </span> $200 </h2>
						<h2> Ilhas Turcas <span> --------------- </span> $199 </h2>
						<h2> Sicília <span> -------------------- </span> $159</h2>
						<h2> Grécia <span> -------------------- </span> $649 </h2>
						<h2> Jamaica <span> ------------------ </span> $599 </h2><br/>
					</div>
				</div>
				<div class = "prop1_link">
					<a href = "pags/Destinos.php" target = "_self" class = "prop1_button"> + </a>
				</div>
				<div class = "div_prop2">
					<h2 class = "prop2_frase"> Destinos de Verão </h2>
				</div>
				<div class = "div_img2">
					<img class = "img1_prop2" src = "images/aviao.png"/>
					<b class = "borda_img2"></b>
				</div>
				<div class = "div_prop2_text">
					<div class = "prop2_text">
						<h2> Brasil <span> ------------------- </span> $1.844​ </h2>
						<h2> Caribe <span> ------------------ </span> $1.773 </h2>
						<h2> Hawaii <span> ------------------ </span> $3.338 </h2>
						<h2> Grécia <span> ------------------ </span> $3.789 </h2>
						<h2> Austrália <span> ---------------- </span> $1.027 </h2>
					</div>
					<div class = "div_top">
					
						<div class = "back_top"></div>
						
						<i>
							<b class = "top_esq"></b>
							<b class = "top_dir"></b>
						</i>
						
						<div class = "top_frase">
							<p> Top </p>
							<p> Five </p>
						</div>
					</div>
					<div class = "prop2_link">
						<a href = "pags/Pacotes.php" target = "_self" class = "prop2_button"> + </a>
					</div>
				</div>
				<div class = "linha_pontilhada2"></div>
					
				<div class = "preco1">
					<p> $1.293 </p>
				</div>
				<div class = "div_promo1">					
					<div class = "promo1_text">
						<p> 8 Noites Tudo Incluso na Argentina </p>
					</div>
					
					<img class = "promo1_img" src = "images/listras.png"/>
					
					<div class = "promo1_link">
						<a href = "pags/Pacotes.php" target = "_self" class = "promo1_button"> + </a>
					</div>
				</div>
				<div class = "preco2">
					<p> $4.930 </p>
				</div>
				<div class = "div_promo2">
					<div class = "promo2_text">
						<span> 4 Noites Tudo Incluso Índia - Resort & SPA </span>
					</div>
					
					<img class = "promo2_img" src = "images/listras.png"/>
					
					<div class = "promo2_link">
						<a href = "pags/Pacotes.php" target = "_self" class = "promo2_button"> + </a>
					</div>
				</div>
				<div class = "preco3">
					<p> $6.358 </p>
				</div>
				<div class = "div_promo3">
					<div class = "promo3_text">
						<span> 7 Noites Tudo Incluso na Africa do Sul </span>
					</div>
						
					<img class = "promo3_img" src = "images/listras.png"/>
					
					<div class = "promo3_link">
						<a href = "pags/Pacotes.php" target = "_self" class = "promo3_button"> + </a>
					</div>
				</div>			
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