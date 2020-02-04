<?php
    
    require_once 'classes/Orcamentos.php';

    $orcamentos = new Orcamentos();
    $lista = $orcamentos->listarOrcamentos();

    require_once 'cabecalho-usuario.php';



    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Novos Orçamentos</h1>";
    echo "<h2 class='texto-principal'> Seja Bem vindo ao Sistema de acompanhamento de mensagens e orçamentos, selecione ao lado a tarefa desejada! </h2>";
    ?>

    </div>
        
    </main>


<?php require_once 'rodape.php';?>
        