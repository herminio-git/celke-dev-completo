<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Cadastrar</title>
	</head>
	<body>
		<a href="projeto022_crud_listar.php">Listar</a>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="projeto024_crud_proc.php">
			<label>Nome: </label>
			<input type="text" name="nome"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email"><br><br>
			
			<input type="submit" value="Cadastrar">
			
		</form>
	</body>
</html>