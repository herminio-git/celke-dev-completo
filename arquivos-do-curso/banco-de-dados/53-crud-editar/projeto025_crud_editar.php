<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Editar</title>
	</head>
	<body>
		<a href="projeto022_crud_listar.php">Listar</a>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="projeto026_crud_proc.php">
			<label>Nome: </label>
			<input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" value="<?php echo $row_usuario['email']; ?>"><br><br>
			
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<input type="submit" value="Editar">
			
		</form>
	</body>
</html>