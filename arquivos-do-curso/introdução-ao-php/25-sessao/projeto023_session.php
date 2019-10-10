<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SESSION</title>
	</head>
	<body>
		<?php
			$_SESSION['usuario'] = "cesar@celke.com.br";
			$_SESSION['senha'] = "123abc";
			echo "Usuário: " . $_SESSION['usuario'] . "<br>";
			echo "Senha: " . $_SESSION['senha'] . "<br>";
			
			//unset($_SESSION['usuario'], $_SESSION['senha']);
			
			echo "Usuário: " . $_SESSION['usuario'] . "<br>";
			echo "Senha: " . $_SESSION['senha'] . "<br>";
			
		?>
	</body>
</html>


