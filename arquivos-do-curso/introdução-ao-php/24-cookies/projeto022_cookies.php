<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body>
		<?php
			/*setcookie("afiliado", "5323", (time() + (3 * 24 * 3600)));
			$afiliado = $_COOKIE["afiliado"];
			echo "Número do afiliado: " . $afiliado . "<br>";*/
			
			setcookie("logado", "Cesar", (time() + (2 * 3600)));
			if(isset($_COOKIE["logado"])){
				echo $_COOKIE["logado"] . "<br>";
			}else{
				echo "Cookies inválido<br>";
			}
			
		?>
	</body>
</html>


