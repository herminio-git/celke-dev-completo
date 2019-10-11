<?php
session_start();
//Receber os dados do formulário
$servidor = filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dbname = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);

//Criar a conexao com BD
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Incluir o arquivo que gerar o backup
include_once("projeto030_ger_back.php");

header("Location: projeto028_form_exp_bd.php");