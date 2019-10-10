<!DOCTYPE html>
<html>
	<head lang="pt-br">
		<meta charset="utf-8">
		<title>Funcao</title>
	</head>
	<body>
		<?php			
			$codigo = "cursophp";
			echo promocao($codigo);
			
			function promocao($codigo = null){
				if($codigo == "cursophp"){
					$msg = "Código Válido<br>";
				}else{
					$msg = "Código Inválido<br>";
				}
				return $msg;
			}
			
			$codigo = "cursophp1";
			echo promocao($codigo);
			
			$codigo = "cursophp";
			echo promocao($codigo);
			
			echo promocao();
			
		?>
	</body>
</html>


