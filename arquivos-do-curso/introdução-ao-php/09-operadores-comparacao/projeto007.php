<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<title>Operadores de Comparacao</title>
	</head>
	<body>
		<?php
			$a = 10;
			$b = 8;
			
			if($a == $b){
				echo "Verdadeiro: o número $a é igual ao valor $b <br>";
			}else{
				echo "Falso: o número $a é diferente ao valor $b <br>";
			}
			
			if($a == 10){
				echo "Verdadeiro: O número $a é igual a 10 <br>";
			}
			
			if($a != 9){
				echo "Verdadeiro: O número $a é diferente de 9 <br>";
			}
			
			if($a < 11){
				echo "Verdadeiro: O número $a é menor que 11 <br>";
			}
			
			if($a > 9){
				echo "Verdadeiro: O número $a é maior que 9 <br>";
			}
			
			if($a <= 11){
				echo "Verdadeiro: O número $a é menor ou igual a 11 <br>";
			}
			
			if($a >= 9){
				echo "Verdadeiro: O número $a é maior ou igual a 9 <br>";
			}
		?>
	</body>
</html>


