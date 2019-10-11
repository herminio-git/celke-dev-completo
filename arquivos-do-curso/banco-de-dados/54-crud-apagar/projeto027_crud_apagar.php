<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Usuário apagado com sucesso</span>";
	header("Location: projeto022_crud_listar.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Usuário não foi apagado com sucesso</span>";
	header("Location: projeto022_crud_listar.php");
}