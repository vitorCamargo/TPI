<!DOCTYPE html>
<html>
	<head>
		<title> WanderLust | Reserva </title>
		<meta charset = "UTF-8"/>
		
		<link rel = "shortcut icon" href = "../images/icon.png" type = "image/png">
		
		<link rel = "stylesheet" href = "../css/style.css" type = "text/css">
		<link rel = "stylesheet" href = "../css/style6.css" type = "text/css">
		
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
                    $int = 1;
                    echo '<style>#menuLogin_buttons{display: none;}</style>';
                    echo '<style>#menuLogin_text{display: block;}</style>';
                } else {
                    $int = 2;
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
					<span class = "corpo_titulo"> RESERVAS </span>
				</div>
                <form action = "Reserva.php" method = "POST" id = "form1">
                    <div class = "formulario">
                        <div class = "cabecalho">
                            <p><b> RESERVE JÁ </b></p>
                        </div>
                        <div class = "estrutura">
                            <p class = "escolha">
                                <input id = "escolha1" name = "escolha" type = "radio" class = "form-radio" value = "1" checked/>
                                <span> Destinos </span>

                                <input id = "escolha2" name = "escolha" type = "radio" class = "form-radio" value = "1"/>
                                <span> Pacotes </span>
                            </p>	
                            <div class = "nome">
                                <label class = "nome_titulo"> Passageiro </label><br/>
                                <span class = "pri_nome">
                                    <input class = "in_nome" type = "text" size = "35" id = "nome" name = "nome" value = ""/>
                                </span>
                                <?php
                                    if($int == 1){
                                        $user = $_SESSION["usuario"];
                                        echo "<script>document.getElementById('nome').value = '" . $user['nome'] . "';</script>";
                                    }
                                    else{
                                    }
                                ?>
                            </div>
                            <div class = "destino" id = "destino">
                                <label class = "lbDestino"> Destino </label><br/>
                                <select id = "dpDestino" class = "dpDestino">
                                    <option value = "">  </option>
                                    <option value = "1"> Isola dei Conigli </option>
                                    <option value = "2"> Praia de Elafonissi </option>
                                    <option value = "3"> Negril </option>
                                    <option value = "4"> Praia do Forte </option>
                                    <option value = "5"> Grace Bay </option>
                                </select>

                            </div>
                            <div class = "horario" id = "div_horario1">
                                <label class = "lbHorario"> Horário </label><br/>
                                <select class = "dpHorario" id = "horario1">
                                    <option value = "">  </option>
                                </select>
                            </div>
                            <div class = "pacote" id = "pacote">
                                <label class = "lbPacote"> Pacotes </label><br/>
                                <select id = "dpPacote" class = "dpDestino">
                                    <option value = "">  </option>
                                    <option value = "1"> Brasil </option>
                                    <option value = "2"> Argentina </option>
                                    <option value = "3"> Caribe </option>
                                    <option value = "4"> Hawaii </option>
                                    <option value = "5"> Australia </option>
                                    <option value = "6"> Índia </option>
                                    <option value = "7"> Grécia </option>
                                    <option value = "8"> África do Sul </option>
                                </select>

                            </div>
                            <div class = "horario" id = "div_horario2">
                                <label class = "lbHorario"> Horário </label><br/>
                                <select class = "dpHorario" id = "horario2">
                                    <option value = "">  </option>
                                </select>
                            </div>
                            <div class = "quantidade">
                                <label class = "lbQtd"> Quantidade </label><br/>
                                <input id = "qtd" type = "number" min = "1" class = "in_qtd"/>
                            </div>
                            <div class = "button">
                                <?php
                                    if($int == 1) {
                                        echo '<input id = "reservar" type = "button" class = "in_button" value = "RESERVAR"/>';
                                    } else {
                                        echo '<input id = "reservar_fail" type = "button" class = "in_button" value = "RESERVAR"/>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </form>
				
				<form action = "Reserva.php" method = "POST" id = "form2">	
					<div class = "formulario">
						<div class = "cabecalho">
							<p><b> SUA RESERVA: </b></p>
						</div>
						<div class = "estrutura">
							<p class = "escolha"></p>
							<div class = "nome">
								<fieldset>
									<legend>
										<label class = "nome_titulo"> Passageiro </label>
									</legend><br/>
								
									<label class = "dpDestino" id = "nome2">  </label>
								</fieldset>
							</div>
							<div class = "destino" id = "destino1">
								<fieldset>
									<legend>
										<label class = "nome_titulo" id = "form2_escolha">  </label>
									</legend><br/>
								
									<label class = "dpDestino" id = "form2_escolha2">  </label>
								</fieldset>
							</div>
							<div class = "horario">
								<fieldset style = "width: 150px;">
									<legend>
										<label class = "nome_titulo"> Horário </label>
									</legend><br/>
								
									<label class = "dpDestino" id = "form2_horario2">  </label>
								</fieldset>
							</div>
							<div class = "quantidade">
								<fieldset style = "width: 150px;">
									<legend>
										<label class = "nome_titulo"> Total a Pagar </label>
									</legend><br/>
								
									<label class = "dpDestino" id = "form2_total"> </label>
								</fieldset>
							</div>
							<div class = "quantidade">
								<fieldset style = "width: 150px;">
									<legend>
										<label class = "nome_titulo"> Preço Unitário </label>
									</legend><br/>
								
									<label class = "dpDestino" id = "form2_unitario"> </label>
								</fieldset>
							</div>
							<div class = "button">
								<input id = "voltar" type = "button" class = "in_button" value = "Voltar">
							</div>
						</div>
					</div>
				</form>
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