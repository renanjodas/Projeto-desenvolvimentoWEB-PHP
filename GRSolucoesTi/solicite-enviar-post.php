<?php
require_once 'classes/Orcamentos.php';

$orcamentos = new Orcamentos();
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$fkTipoServico=$_POST['servico'];
$fkPlataforma=$_POST['plataforma'];
$fkDesenvolvimento=$_POST['desenvolvimento'];
$pessoa=$_POST['tipo-pessoa'];
$info_complementar=$_POST['mensagem'];
$senha=$_POST['senha'];

$orcamentos->inserir($nome, $telefone, $email, $fkTipoServico, $fkPlataforma, $fkDesenvolvimento, $pessoa, $info_complementar, $senha);

header('Location:solicite.php');

?>