<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//$nome = $_POST['nome'];
//$email = $_POST['email'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$result_usuarios = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '2', '3', NOW())";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Usuário cadastro com sucesso</span>";
	header("Location: projeto022_crud_listar.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Usuário não foi cadastro com sucesso</span>";
	header("Location: projeto023_crud_inserir.php");
}
			