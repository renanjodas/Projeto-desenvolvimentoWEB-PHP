<?php
require_once 'classes/Usuario.php';

$usuario = new Usuario();

$loginUsuario= $_POST['usuario'];
$senha= $_POST['senha'];

$usuario->inserir($loginUsuario,$senha); /*metodo inserir na Classe Categoria.php */

header('Location:cadastrar-usuario.php'); /*redireciona para pagina */

?>