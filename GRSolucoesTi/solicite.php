<?php 

    require_once 'classes/Servico.php';
    require_once 'classes/Desenvolvimento.php';
    require_once 'classes/Plataforma.php';

    $servico = new Servico();
    $listaServicos = $servico->listarServicos();

    $desenvolvimento = new Desenvolvimento();
    $listaDesenvolvimento = $desenvolvimento->listarDesenvolvimento();

    $plataforma = new Plataforma();
    $listaPlataforma = $plataforma->listarPlataforma();

    require_once 'cabecalho.php';

?>

<div class="titulo-destaque-orcamento">
    <h1>Orçamentos</h1>  
</div>
<main class="conteudo-orcamento">
    <div class="primeira-coluna">
        <form class="form-orcamento" action="solicite-enviar-post.php" method="post">
        
            <fieldset class="orcamento">
                <legend class="legend-orcamento">Solicite Orçamento</legend>

                <label for="nome" class="label-orcamento">Nome:</label><br>
                <input id="nome" type="text" name="nome" maxlength="30"  class= "input"><br>
                
                <label for="telefone" class="label-orcamento">Telefone:</label><br>
                <input id="telefone"  type="tel" name="telefone" maxlength="15" placeholder="19 99999-9999" size="15"><br>
                
                <label for="email" class="label-orcamento">E-mail:</label><br>
                <input id="email" type="email" name="email" maxlength="25" placeholder="contato@dominio.com.br" size="20" class="input"><br>

                <label class="label-orcamento">Tipo Serviço</label><br>
                <select name="servico">
                    <?php foreach($listaServicos as $linha){ ?>
                        <option id="servico" value=" <?php echo $linha['pkServico'];?>"> 
                            <?php echo $linha['tipoServico'];?>
                        </option>
                    <?php } ?>
                </select><br>

                <label class="label-orcamento">Plataforma</label><br>
                <select name="plataforma">
                    <?php foreach($listaPlataforma as $linha){ ?>
                        <option id="plataforma" value=" <?php echo $linha['pkPlataforma'];?>"> 
                            <?php echo $linha['tipoPlataforma'];?>
                        </option>
                    <?php } ?>
                </select><br>

                <label class="label-orcamento">Desenvolvimento</label><br>
                <select name="desenvolvimento">
                    <?php foreach($listaDesenvolvimento as $linha){ ?>
                        <option id="desenvolvimento"  value=" <?php echo $linha['pkDesenvolvimento'];?>"> 
                            <?php echo $linha['tipoDesenvolvimento'];?>
                        </option>

                    <?php } ?>
                </select><br>
                
                <label class="label-orcamento">Pessoa</label><br>
                <input class="input-radio" type="radio" id="tipo-pessoa" name="tipo-pessoa" VALUE="1" checked> Física

                <input class="input-radio" type="radio" id="tipo-pessoa" name="tipo-pessoa"  VALUE="2"> Jurídica
                <br><br>
                
                <label for="mensagem" class="label-orcamento">Informações Complementares</label><br>
                <textarea id="mensagem" name="mensagem" rows="5" cols="50" maxlength="100"></textarea>

                <label for="senha" class="label-orcamento">Senha para Consulta:</label><br>
                <input id="senha" class="senha" type="password" name="senha" maxlength="12" placeholder="**********" size="20" class="input"><br>

            </fieldset>
            <input type="submit" value="Enviar" class="enviar enviar-orcamento">
        </form>
    </div>
    <div class="segunda-coluna">
        <div class="conteudo-consulta">
            <form class="form-consulta" action="validar-orcamento.php" method="post">
                <legend class="legend-consulta">Acompanhe seu orçamento</legend>

                <label for="codigo" class="label-consulta">E-mail:</label><br>
                <input id="codigo" type="text" name="codigo" maxlength="25" class= "input-consulta" placeholder="contato@dominio.com"><br>
                
                <label for="senha-consulta" class="label-consulta">Senha de consulta:</label><br>
                <input id="senha-consulta"  type="password" name="senha-consulta" maxlength="12" placeholder="*******" class= "input-consulta"><br>

                <input type="submit" value="Consultar" class="enviar enviar-consulta">

            </form>
        </div>
    </div>            
</main>

<?php require_once 'rodape.php' ?>