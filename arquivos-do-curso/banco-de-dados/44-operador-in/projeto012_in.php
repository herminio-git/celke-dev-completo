<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios WHERE niveis_acesso_id IN (2, 3)";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
	echo "ID: " . $row_usuario['id'] . "<br>";
	echo "Nome: " . $row_usuario['nome'] . "<br>";
	echo "Nivel de Acesso: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}