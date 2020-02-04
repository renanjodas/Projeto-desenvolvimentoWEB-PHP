<?php

$pkUsuario = $_GET['CODIGO'];
require_once 'classes\Usuario.php';
$usuario = new Usuario();
$usuario->excluirUsuario($pkUsuario);

header('Location:cadastrar-usuario.php')


?>