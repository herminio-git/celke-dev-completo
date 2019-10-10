<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Passagem de parametros por valor e referencia </title>
	</head>
	<body>
		<?php			
			echo "<h4>Passagem por valor</h4>";
			function salario($num){
				$num += 5;
				echo "Salario com aumento: $num <br>";
			}
			
			$salario = 8200;
			salario($salario);
			echo "Salario sem aumento: $salario <br>";
			
			echo "<h4>Passagem por referência</h4>";
			function salarioa(&$num){
				$num += 10;
				echo "Salario com aumento: $num <br>";
			}
			
			$salarioa = 8200;
			salarioa($salarioa);
			echo "Salario com aumento 'Referência': $salarioa <br>";
		?>
	</body>
</html>


