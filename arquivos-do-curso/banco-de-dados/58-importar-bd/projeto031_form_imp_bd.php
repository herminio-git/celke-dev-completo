<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar BD</title>
	</head>
	<body>
		<h1>Importar base de dados</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="projeto032_proc_imp_bd.php" enctype="multipart/form-data">
			<label>Servidor: </label>
			<input type="text" name="servidor" placeholder="Nome do Servidor"><br><br>
			
			<label>Usuário: </label>
			<input type="text" name="usuario" placeholder="Nome do usuário"><br><br>
			
			<label>Senha: </label>
			<input type="password" name="senha" placeholder="Senha da base de dados"><br><br>
			
			<label>Base de Dados: </label>
			<input type="text" name="dbname" placeholder="Nome da base de dados"><br><br>
			
			<label>Backup: </label>
			<input type="file" name="arquivo"><br><br>
			
			<input type="submit" value="Importar">
		
		</form>
	</body>
</html>