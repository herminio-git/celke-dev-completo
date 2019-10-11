<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "celke";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT AVG(qnt_acessos) AS qnt_acessos FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios);

echo "Media de acesso: " . (int) $row_usuario['qnt_acessos'] . "<br>";
