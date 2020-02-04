<?php

    require_once 'cabecalho-usuario.php';
    $pkOrcamento = $_GET['CODIGO'];
    require_once 'classes/Orcamentos.php';
    
    $orcamentos = new Orcamentos();
    $linha = $orcamentos->listar1Orcamento($pkOrcamento);

    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Novos Orçamentos</h1>";

    ?>
    <form class="form-alterar" name="alterar-orcamento" action="alterar-orcamento.php" method="post">
        
        <strong id="titulo-orcamento-analisar" name="pkOrcamento">Orçamento nº</strong><span><?php echo $pkOrcamento;?></span>
        <br /><br />
        <strong>Nome</strong><br />
        <input name="nome" value="<?php echo $linha['nome'];?>" readonly>
        <br />
        <strong>Telefone</strong><br />
        <input name="telefone" value="<?php echo $linha['telefone'];?>" readonly>
        <br />
        <strong>Email</strong><br />
        <input name="email" value="<?php echo $linha['email'];?>" readonly>
        <br />
        <strong>Serviço</strong><br />
        <input name="tipoServico" value="<?php echo $linha['tipoServico'];?>" readonly>
        <br />
        <strong>Plataforma</strong><br />
        <input name="tipoPlataforma" value="<?php echo $linha['tipoPlataforma'];?>" readonly>
        <br />
        <strong>Desenvolvimento</strong><br />
        <input name="tipoDesenvolvimento" value="<?php echo $linha['tipoDesenvolvimento'];?>" readonly>
        <br />
        <strong>Pessoa</strong><br />
        <input name="pessoa" value="<?php echo ($linha['pessoa'] = 1? "Física" : "Jurídica");?>" readonly>
        <br />
        <strong>Informação Complementar</strong><br />
        <textarea name="info_complementar" rows="5" cols="50" maxlength="100"><?php echo $linha['info_complementar'];?></textarea>
        <br />
        <strong>Status</strong><br />
        <input name="tipoStatus" value="<?php echo $linha['tipoStatus'];?>">
        <br />
        <button type="submit">Salvar</button>
    </form>


<?php require_once 'rodape.php';?>