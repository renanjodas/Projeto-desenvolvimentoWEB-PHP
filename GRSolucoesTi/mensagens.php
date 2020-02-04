<?php
    
    require_once 'classes/Contato.php';

    $contato = new Contato();
    $lista = $contato->listarMensagens();

    require_once 'cabecalho-usuario.php';



    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Mensagens</h1>";
    ?>

    <table class="table-novos-orcamentos">
        <thead>
            <th>Numero Contato</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Mensagem</th>
            <th>Status</th>
            <th>Atualizar</th>
        </thead>
        <tbody>
            <?php foreach($lista as $linha){ ?>
                <tr>
                    <td><?php echo $linha['pkContato']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['telefone']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['mensagem']; ?></td>
                    <td>
                    <select name="status">
                    <option value="<?php echo $linha['fkStatus']; ?>">Em Análise</option>
                    <option value="2">Respondido</option>
                    </select>
                    </td>
                    <td>
                    <a href="mensagem-atualizar.php?CODIGO=<?php echo $linha['pkContato'];?>" class="btn-analisar">Atualizar</a> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
        
    </main>


<?php require_once 'rodape.php';?>