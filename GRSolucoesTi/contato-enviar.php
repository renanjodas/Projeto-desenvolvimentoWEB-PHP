<?php
require_once 'classes/Contato.php';

$contato= new contato();
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$mensagem=$_POST['mensagem'];

$contato->enviarMensagem($nome, $telefone, $email, $mensagem);

header('Location:index.php');

?>