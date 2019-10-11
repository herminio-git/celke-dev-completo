<?php
session_start();
//Receber os dados do formulário
$arquivo = $_FILES['arquivo']['tmp_name'];
$servidor = filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dbname = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);

//Criar a conexao BD
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Ler os dados do arquivo e converter em string
$dados = file_get_contents($arquivo);
//echo $dados;

//Executar as query do backup
mysqli_multi_query($conn, $dados);

$_SESSION['msg'] = "<span style='color:green'>Base de dados restaurada com sucesso! </span>";
header("Location: projeto031_form_imp_bd.php");


