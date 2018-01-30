<?php
	$destino = $_POST['destino'];
	$pacote = $_POST['pacote'];
    $precoDest;
    $precoPac;

    if($destino == 1) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 01:00 </option>";
        echo "<option value = '2'> 02:00 </option>";
        echo "<option value = '3'> 10:00 </option>";
        $precoDest = 150;
    } else if($destino == 2) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 20:00 </option>";
        echo "<option value = '2'> 22:00 </option>";
        echo "<option value = '3'> 23:00 </option>";
        $precoDest = 640;
    } else if($destino == 3) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 05:00 </option>";
        echo "<option value = '2'> 07:00 </option>";
        echo "<option value = '3'> 21:00 </option>";
        $precoDest = 599;
    } else if($destino == 4) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 09:00 </option>";
        echo "<option value = '2'> 13:00 </option>";
        echo "<option value = '3'> 16:00 </option>";
        $precoDest = 200;
    } else if($destino == 5) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 14:00 </option>";
        echo "<option value = '2'> 18:00 </option>";
        echo "<option value = '3'> 20:00 </option>";
        $precoDest = 199;
    }

    if($pacote == 1) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 09:00 </option>";
        echo "<option value = '2'> 16:00 </option>";
        echo "<option value = '3'> 21:00 </option>";
        $precoPac = 1844;
    } else if($pacote == 2) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 03:00 </option>";
        echo "<option value = '2'> 08:00 </option>";
        echo "<option value = '3'> 17:00 </option>";
        $precoPac = 1293;
    } else if($pacote == 3) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 00:00 </option>";
        echo "<option value = '2'> 03:00 </option>";
        echo "<option value = '3'> 08:00 </option>";
        $precoPac = 1733;
    } else if($pacote == 4) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 03:00 </option>";
        echo "<option value = '2'> 05:00 </option>";
        echo "<option value = '3'> 10:00 </option>";
        $precoPac = 3338;
    } else if($pacote == 5) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 01:00 </option>";
        echo "<option value = '2'> 05:00 </option>";
        echo "<option value = '3'> 10:00 </option>";
        $precoPac = 1027;
    } else if($pacote == 6) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 06:00 </option>";
        echo "<option value = '2'> 13:00 </option>";
        echo "<option value = '3'> 20:00 </option>";
        $precoPac = 4930;
    } else if($pacote == 7) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 00:00 </option>";
        echo "<option value = '2'> 02:00 </option>";
        echo "<option value = '3'> 20:00 </option>";
        $precoPac = 3789;
    } else if($pacote == 8) {
        echo "<option value = ''>  </option>";
        echo "<option value = '1'> 11:00 </option>";
        echo "<option value = '2'> 15:00 </option>";
        echo "<option value = '3'> 23:00 </option>";
        $precoPac = 6358;
    }
?>