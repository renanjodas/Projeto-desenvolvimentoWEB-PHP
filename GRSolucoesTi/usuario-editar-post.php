<?php
require_once 'classes/Usuario.php';

$pkUsuario=$_POST['pkUsuario'];
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];

$usuario = new Usuario();
$usuario->alterarUsuario($usuario, $senha, $pkUsuario);

header('Location:cadastrar-usuario.php');

?>