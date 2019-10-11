<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT DISTINCT email FROM usuarios";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
	echo "Email: " . $row_usuario['email'] . "<br><hr>";
}