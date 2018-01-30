<?php 
	$n = $_GET['num'];
	
	echo "<center><p style = 'color: #4285F4;'> TABUADA DO <b> $n </b></p></center>";
		
	for($x = 1; $x <= 10; $x++) {
		echo "<p> $n x $x = " . $n * $x . " </p>";
	}
?>