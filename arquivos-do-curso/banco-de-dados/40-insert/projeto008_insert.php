<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = "Carlos";
$email = "carlos@celke.com.br";
$result_usuario = "INSERT INTO usuarios (nome, email, situacao_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '2', '3', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	echo "Inserido com sucesso!<br>";
	echo "ID: " . mysqli_insert_id($conn);	
}else{
	echo "Erro ao inserir o usuário!<br>";
}
	