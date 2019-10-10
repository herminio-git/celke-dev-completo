<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<title>Operadores Logicos</title>
	</head>
	<body>
		<?php
			$a = 10;
			$b = 8;
			$c = 2;
			
			if(($a == 10) AND ($b == 8)){
				echo "Utilizado AND: Verdadeiro <br>";
			}else{
				echo "Utilizado AND: False <br>";
			}
			
			if(($a == 10) or ($b == 7)){
				echo "Utilizado OR: Verdadeiro <br>";
			}
			
			if(($a == 10) xor ($b == 7)){
				echo "Utilizado xor: Verdadeiro <br>";
			}
			
			if(!empty($c)){
				echo "Utilizado !: Verdadeiro <br>";
			}
			
			if(($a == 10) && ($b == 8)){
				echo "Utilizado &&: Verdadeiro <br>";
			}
			
			if(($a == 10) || ($b == 8)){
				echo "Utilizado ||: Verdadeiro <br>";
			}
		?>
	</body>
</html>


