<body>
	<?php
		$bolas = array();
	
		for($index = 1; $index <= 15; $index++) {
			$num = rand(1, 60);
			array_push($bolas, $num);
		}
		echo "<tr>";
		
		foreach($bolas as $valor) {
			echo "<td>" . $valor . "</td>";
		}
		echo "</tr>";
	?>
</body>