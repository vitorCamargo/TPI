<!DOCTYPE html>
<html>
	<head>                

		<title> WanderLust | Destinos </title>
		<meta charset = "UTF-8"/>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "../css/style2.css" type = "text/css">
		<link rel = "stylesheet" href = "../sss/sss.css" type = "text/css" media = "all">
		
		<link rel = "stylesheet" href = "../font/font1.css" type = "text/css">
		
		<script src = "../js/jquery-2.1.3.min.js"></script>
		<script src = "../js/js1.js"></script>
        <script src = "../js/jsLogin.js"></script>
		<script src = "../sss/sss.min.js"></script>
		
		<script>
			jQuery(function($) {
				$('.slider').sss();
			});
		</script>
		
	</head>
	<body style = "">
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
					<h2><span class = "corpo_titulo"> DESTINOS </span></h2>
				</div>
				<div class = "div_slide">
					<div class="slider">
						<img class = "img1_slide" src = "../images/img_slide1.png"/>
						<img class = "img1_slide" src = "../images/img_slide2.png"/>
						<img class = "img1_slide" src = "../images/img_slide3.png"/>
						<img class = "img1_slide" src = "../images/img_slide4.png"/>
						<img class = "img1_slide" src = "../images/img_slide5.png"/>
						<img class = "img1_slide" src = "../images/img_slide7.png"/>
						<img class = "img1_slide" src = "../images/img_slide8.png"/>
						<img class = "img1_slide" src = "../images/img_slide9.png"/>
						<img class = "img1_slide" src = "../images/img_slide11.png"/>											
					</div>
				</div>
				<div class = "div_quadro1">
					
					<img class = "quadro1_img" src = "../images/mala.png"/>
					
					<span class = "quadro1_frase"> A Aventura </span>
					
					<div class = "quadro1_forma">
						<b class = "forma1_supesq"></b>
						<b class = "forma1_supdir"></b>
						<b class = "forma1_infesq"></b>
						<b class = "forma1_infdir"></b>
						
						<a class = "forma1_text" href = "Reserva.php" target = "_self"> C O M E Ç E </a>
					</div>
				</div>
				<div class = "div_promo1">
					<span class = "promo1_titulo"> Destinos de Verão </span>
				</div>
				<div class = "promo1_icon">
					<img class = "promo1_img_icon" src = "../images/aviao.png"/>
					<b class = "promo1_borda"></b>
				</div>
				<div class = "promo1_anun1">
					<div class = "p1_an1_text">
						<p class = "titulo"> Isola dei Conigli- Sicília </p><br/>
						<p class = "text"> “A areia é dourada, a água é cristalina e há muitos peixes. Portanto, não se esqueça de trazer o snorkel.”</p>
					</div>
					<div class = "p1_an1_img">
						<img class = "img" src = "../images/img_slide6.png"/>
					</div>
					<div class = "p1_an1_link">
						<a href = "Reserva.php" target = "_self" class = "p1_link_button"> + </a>
					</div>
				</div>
				
				<div class = "promo1_anun2">
					<div class = "p1_an2_text">
						<p class = "titulo"> Praia de Elafonissi- Grécia </p><br/>
						<p class = "text"> “O mar era calmo e lindo. E as cores eram intensas: água azul-clara e areia rosa. O paraíso.” </p>
					</div>
					<div class = "p1_an2_img">
						<img class = "img" src="../images/img_slide10.png"/>
					</div>
					<div class = "p1_an2_link">
						<a href = "Reserva.php" target = "_self" class = "p1_link_button"> + </a>
					</div>
				</div>
				
				<div class = "promo1_anun3">
					<div class = "p1_an3_text">
						<p class = "titulo"> Negril- Jamaica </p><br/>
						<p class = "text"> "Negril, a 240 km da capital Kingston, mistura tranquilidade com musicalidade. O reggae está presente em todos os lugares, tanto nas ruas como nas praias, e a natureza preservada do lugar inspira turistas e nativos." </p>
					</div>
					<div class = "p1_an3_img">
						<img class = "img" src="../images/img_slide12.png"/>
					</div>
					<div class = "p1_an3_link">
						<a href = "Reserva.php" target = "_self" class = "p1_link_button"> + </a>
					</div>
				</div>
				
				<div class = "promo1_anun4">
					<div class = "p1_an4_text">
						<p class = "titulo"> Praia do Forte- Bahia </p><br/>
						<p class = "text"> "Preparado para surpreender-se com todo o charme e encanto da Vila mais charmosa da Bahia? Venha visitar a Praia do Forte." </p>
					</div>
					<div class = "p1_an4_img">
						<img class = "img" src="../images/img_slide3.png"/>
					</div>
					<div class = "p1_an4_link">
						<a href = "Reserva.php" target = "_self" class = "p1_link_button"> + </a>
					</div>
				</div>
				
				<div class = "promo1_anun5">
					<div class = "p1_an5_text">
						<p class = "titulo"> Grace Bay- Ilhas Turcas </p><br/>
						<p class = "text"> “Mar tão limpo e cristalino que chega a ser inacreditável. A água tem vários tons de azul e verde, e a areia é branca da cor de açúcar!” </p>
					</div>
					<div class = "p1_an5_img">
						<img class = "img" src="../images/img_slide5.png"/>
					</div>
					<div class = "p1_an5_link">
						<a href = "Reserva.php" target = "_self" class = "p1_link_button"> + </a>
					</div>
				</div>
				
				<div class = "linha_pontilhada"></div>
				
				<div class = "div_promo2">
					<span> ENCONTRE </span>
					<span> HOTÉIS, DIÁRIAS & </span>
					<span> DICAS DE AVENTURA </span>
				</div>
				
				<div class = "promo2_quadro2">
					<p class = "quadro2_frase"> WanderLust oferece informações sobre viagens em uma grande variedade de destinos . Saiba mais sobre seu destino hoje e contacte-nos para uma cotação. </p>
				</div>
					
				<div class = "div_promo3">
					<p class = "promo3_titulo"> Quer Ajuda? </p>
				</div>
				<div class = "promo3_icon">
					<img class = "promo3_img" src = "../images/boia.png"/>
					<b class = "promo3_img_borda"></b>
				</div>
				<div class = "promo3_quadro3">
						
					<img class = "quadro3_img" src = "../images/listras.png"/>
					
					<div class = "quadro3_text">
						<p> Ir viajar é emocionante, </p>
						<p> mas também é estressante. </p>
						<p> Nós entendemos. É por isso que nós temos especialistas para cuidar de todas as suas necessidades, tornando a sua viagem sem stress e incrível. </p><br/>
						<span> Ligue Agora </span><br/>
						<span> (15) 3512-3456 </span>
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