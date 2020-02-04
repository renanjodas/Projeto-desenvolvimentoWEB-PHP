<?php
    
    require_once 'classes/Orcamentos.php';

    $orcamentos = new Orcamentos();
    $lista = $orcamentos->listarOrcamentos();

    require_once 'cabecalho-usuario.php';



    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Novos Orçamentos</h1>";
    ?>

    <table class="table-novos-orcamentos">
        <thead>
            <th>Orçamento</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Serviço</th>
            <th>Plataforma</th>
            <th>Desenvolvimento</th>
            <th>Pessoa</th>
            <th>Informações Adicionais</th>
            <th>Status</th>
            <th>Acompanhar</th>
        </thead>
        <tbody>
            <?php foreach($lista as $linha){ ?>
                <tr>
                    <td><?php echo $linha['pkOrcamento']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['telefone']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['tipoServico']; ?></td>
                    <td><?php echo $linha['tipoPlataforma']; ?></td>
                    <td><?php echo $linha['tipoDesenvolvimento']; ?></td>
                    <td><?php echo $linha['pessoa']; ?></td>
                    <td><?php echo $linha['info_complementar']; ?></td>
                    <td><?php echo $linha['tipoStatus']; ?></td>
                    <td>
                    <a href="orcamento-analisar.php?CODIGO=<?php echo $linha['pkOrcamento'];?>" class="btn-analisar">Analisar</a> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
        
    </main>


<?php require_once 'rodape.php';?>
        