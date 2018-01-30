<?php 
	$l1 = $_GET['lingua1_val'];
	$l2 = $_GET['lingua2_val'];
	$l1_i = $_GET['lingua1_input'];
	
	if($l1 == 1 && $l2 == 2) {
		$simb = array("R$ ", "$ ");
		$cot = 0.2534;
		$result = $l1_i * 0.2534;
	} else if($l1 == 1 && $l2 == 3) {
		$simb = array("R$ ", "&euro; ");
		$cot = 0.2239;
		$result = $l1_i * 0.2239;
	} else if($l1 == 1 && $l2 == 4) {
		$simb = array("R$ ", "&pound; ");
		$cot = 0.1631;
		$result = $l1_i * 0.1631;
	} else if($l1 == 2 && $l2 == 1) {
		$simb = array("$ ", "R$ ");
		$cot = 3.9457;
		$result = $l1_i * 3.9457;
	} else if($l1 == 2 && $l2 == 3) {
		$simb = array("$ ", "&euro; ");
		$cot = 0.8841;
		$result = $l1_i * 0.8841;
	} else if($l1 == 2 && $l2 == 4) {
		$simb = array("$ ", "&pound; ");
		$cot = 0.6439;
		$result = $l1_i * 0.6439;
	} else if($l1 == 3 && $l2 == 1) {
		$simb = array("&euro; ", "R$ ");
		$cot = 4.4656;
		$result = $l1_i * 4.4656;
	} else if($l1 == 3 && $l2 == 2) {
		$simb = array("&euro; ", "$ ");
		$cot = 1.1312;
		$result = $l1_i * 1.1312;
	} else if($l1 == 3 && $l2 == 4) {
		$simb = array("&euro; ", "&pound; ");
		$cot = 0.7283;
		$result = $l1_i * 0.7283;
	} else if($l1 == 4 && $l2 == 1) {
		$simb = array("&pound; ", "R$ ");
		$cot = 6.1315;
		$result = $l1_i * 6.1315;
	} else if($l1 == 4 && $l2 == 2) {
		$simb = array("&pound; ", "$ ");
		$cot = 1.5530;
		$result = $l1_i * 1.5530;
	} else {
		$simb = array("&pound; ", "&euro; ");
		$cot = 1.3730;
		$result = $l1_i * 1.3730;
	}
	
	echo "<div id = 'conversao_t'><center><b>" . $simb[0] . $l1_i . " = " . $simb[1] . number_format($result, 2, '.', '') . "</b></center><br/>";
	for($i = 0; $i <= 1000; $i++) {
		if($i == 1 || $i == 5 || $i == 10 || $i == 50) {
			echo "<span class = 'l$i'>" . $simb[0] . $i . " = " . $simb[1]  . number_format(($cot * $i), 2, '.', '') . "</span></br>"; 
		} else if($i == 100 || $i == 500 || $i == 1000) {
			echo "<span class = 'l$i'>" . $simb[0] . $i . " = " . $simb[1]  . number_format(($cot * $i), 2, '.', '') . "</span></br>";
		} else {
			
		}
	}
	echo "</div>";
?>