<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> CADASTRO DE PRODUTOS </title>
        
	    <link rel = "stylesheet" type = "text/css" href = "css/buttons.css"/>
	    <link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
    </head>

    <body>
        <div id = "div1">
            <form action = "cadastrar.php" method = "GET">
                <p id = "p1"> CADASTRO DA CAFETERIA CAFE OR CAFE </p><br/>   
                <p> Nome do Item a ser cadastrado: <br/>
                <input type = "text" name = "nome" maxlength = '45' size = '45'><br/><br/>
                
                <p> Preço ( em R$ ): <br/>
                <input type = "text" name = "preco" maxlength = '45' size = '45'><br/><br/>
                
                <p> Categoria: <br/>
                <input list = "categoria" name = "lista">
                <datalist id = "categoria">
                    <option value = "Café"></option>
			        <option value = "Chá"></option>
			        <option value = "Refrigerante"></option>
                    <option value = "Salgado"></option>
                    <option value = "Massas"></option>
                </datalist><br/><br/>
				
                <p></p>
                <p align = "center">
                    <button type = "submit" class = "button button--nuka button--round-s button--text-thick"> Cadastrar </button>
                </p>
            </form>
        </div>
	</body>
</html>