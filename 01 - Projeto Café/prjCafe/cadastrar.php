<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> Resultado </title>

	    <link rel = "stylesheet" type = "text/css" href = "css/buttons.css"/>
	    <link rel = "stylesheet" type = "text/css" href = "css/style.css"/>
    </head>

    <body>
        <?php
			$nome = $_GET['nome'];
            $preco = $_GET['preco'];
            $categoria = $_GET['lista'];
			
			$file1 = fopen('names.txt', 'a');
			fwrite ($file1, $_GET['nome']."\n");
			fclose($file1);
			
			$file2 = fopen('precos.txt', 'a');
			fwrite ($file2, $_GET['preco']."\n");
			fclose($file2);
			
			$file3 = fopen('categorias.txt', 'a');
			fwrite ($file3, $_GET['lista']."\n");
			fclose($file3);
        ?>
        <div>
            <table id = "table">
                <tr>
                    <td> NOME : </td>
                    <td> PREÇO : </td>
                    <td> CATEGORIA : </td>
                </tr>
                <tr>
                    <td>
                        <?php 
                            $readfile1 = file('names.txt');
                            foreach($readfile1 as $rf1) {
                                echo "$rf1<br>"; 
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
					        $readfile2 = file('precos.txt');
					        foreach($readfile2 as $rf2) {
						        echo "$rf2<br>"; 
					        }
					    ?>
                    </td>
                    <td>
                        <?php 
					        $readfile3 = file('categorias.txt');
					        foreach($readfile3 as $rf3) {
						        echo "$rf3<br>"; 
					        }
					    ?>
                    </td>
                </tr>
				<tr>
					<td colspan = "3">
						<form  action = "index.php" method = "get">
							<p align = "center"><button type = "submit" class = "button button--nuka button--round-s button--text-thick"> Voltar </button>
						</form>
					<td>
				</tr>
			</table>
        </div>
    </body>
</html>