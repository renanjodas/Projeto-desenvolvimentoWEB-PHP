<?php
require_once 'classes/Orcamentos.php';


$conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

$email=$_POST['codigo'];
$senha=$_POST['senha-consulta'];
    
    $query = "SELECT a.pkOrcamento, a.nome, a.telefone, a.email, a.info_complementar, a.senha, b.tipoStatus FROM tb_orcamentos a
    INNER JOIN tb_status b ON a.fkStatus = b.pkStatus 
    WHERE a.email = '".$email."' AND a.senha = '".$senha."';";
    

    $return = $conexao->query($query);
    $lista = $return ->fetchAll();

    if($lista == false){
        require_once 'cabecalho.php';
        echo "<div class='titulo-destaque-orcamento'>
        <h1>Consulta de Orçamento</h1>  
        </div>";
        // exibindo o resultado
        echo "<main style='font-weight:bold; height:550px;'>";
        echo "<br />";
        echo "<div class='titulo-principal'><strong style='color: darkorange;'>Dados Inválidos</strong>";
        echo "</div>";
        echo "<br />";
        echo "<p style='font-size: 20px; text-align:center; margin-top: 40px;'>Favor Verificar se os dados informados estão corretos! </strong> ";
        echo "<br />";echo "<br />";
        echo "<form action='solicite.php'><input class='enviar' style='width:20%; margin-top:60px;' type='submit' value='Retornar' /></form>";
        echo "</main>";
        require_once 'rodape.php';
    }
    else{
        
        require_once 'cabecalho.php';
        echo "<div class='titulo-destaque-orcamento'>
        <h1>Consulta de Orçamento</h1>  
        </div>";
        // exibindo o resultado
        echo "<main style='font-weight:bold; height:550px;'>";
        echo "<br />";
		foreach ($lista as $linha){
            echo "<div class='titulo-principal'><strong style='color: darkorange;'>Orçamento nº </strong>: ".$linha['pkOrcamento'];
            echo "</div>";
            echo "<br />";
            echo "<div class='conteudo-validar'>";
			echo "<strong style='color: darkorange;'>Nome</strong>: ".$linha['nome'];
            echo "<br />";
            echo "<br />";
            echo "<strong style='color: darkorange;'>Tel</strong>: ".$linha['telefone'];
            echo "<br />";
            echo "<br />";
            echo "<strong style='color: darkorange;'>Email</strong>: ".$linha['email'];
            echo "<br />";echo "<br />";
            echo "<strong style='color: darkorange;'>Info Adicional</strong>: ".$linha['info_complementar'];
            echo "<br />";echo "<br />";
            echo "<strong style='color: darkorange;'>Status</strong>: ".$linha['tipoStatus'];
            echo "<br />";
            echo "</div>";
        }
        echo "<form action='solicite.php'><input class='enviar' style='width:20%; margin-top:60px;' type='submit' value='Retornar' /></form>";
        echo "</main>";
        require_once 'rodape.php';
    };
   $conexao ->exec($query);

?>
    