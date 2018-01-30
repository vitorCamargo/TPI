<?php
    session_start();
    if(isset($_SESSION["usuario"])) {
        $user = $_SESSION["usuario"];
        $nome = $user['nome'];
        $login = $user['login'];
        $nome_reserva = $_POST['nome_reserva'];
        $horario = $_POST['horario'];
        $qtd = $_POST['qtd'];

        $destino = $_POST['destino'];
        $pacote = $_POST['pacote'];
        
        $conecta = mysqli_connect("localhost", "root", "minas", "bdViagem");


        $consultaSQL1 = "SELECT id FROM Login WHERE Login = '" . $login . "'";
        $query1 = mysqli_query($conecta, $consultaSQL1);

        if(mysqli_num_rows($query1) > 0) {
            $linha = mysqli_fetch_array($query1, MYSQLI_ASSOC);

            $id_login = $linha['id'];
        }

        if($destino != 0) {
            if($destino == 1) {
                $precoDest = 150;
            } else if($destino == 2) {
                $precoDest = 640;
            } else if($destino == 3) {
                $precoDest = 599;
            } else if($destino == 4) {
                $precoDest = 200;
            } else if($destino == 5) {
                $precoDest = 199;
            } else {

            }

            $dolar = $qtd * $precoDest;
            echo $dolar;
            
            $novo = "INSERT INTO Reserva VALUES (null, '" . $nome . "', '" . $nome_reserva . "', '" . $horario . "', " . $qtd . ", " . $precoDest . ", " . $qtd * $precoDest . ", " . $id_login . ")";
            mysqli_query($conecta, $novo);
        } else {

        }

        if($pacote != 0) {
            if($pacote == 1) {
                $precoPac = 1844;
            } else if($pacote == 2) {
                $precoPac = 1293;
            } else if($pacote == 3) {
                $precoPac = 1733;
            } else if($pacote == 4) {
                $precoPac = 3338;
            } else if($pacote == 5) {
                $precoPac = 1027;
            } else if($pacote == 6) {
                $precoPac = 4930;
            } else if($pacote == 7) {
                $precoPac = 3789;
            } else if($pacote == 8) {
                $precoPac = 6358;
            }

            $dolar = $qtd * $precoPac;
            echo $dolar;

            $novo = "INSERT INTO Reserva VALUES (null, '" . $nome . "', '" . $nome_reserva . "', '" . $horario . "', " . $qtd . ", " . $precoPac . ", " . $dolar . ", " . $id_login . ")";
            mysqli_query($conecta, $novo);
        } else {

        }
    }
?>