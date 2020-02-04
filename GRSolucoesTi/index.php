<?php require_once 'cabecalho.php'?>

<div class="titulo-destaque">
    <h1>Soluções tecnológicas <span class="destaque">personalizadas</span> para você e seu negócio.</h1>
    <p class="missao">Suporte, manutenção e desenvolvimento para computadores e celulares sem burocracia.</p>
</div>

<main>
    <div class="imagem-principal">
        <img src="_imagens/dispositivos.png"></a>
    </div>
    <section class="principal">
        <h1 class="titulo-principal">Conheça a GR Soluções em TI</h1>
        <p>Soluções Inovadoras e personalizadas em Criação de sites, sistemas e manutenção de equipamentos.</p><br>
    </section>
    
    <section id="servicos">
        <div class="conteudo-servicos">
            <ul class="lista-servicos">
                <li class="itens"><img src="_imagens/manutencao_celular.png" class="icones-principal">
                    <h3>Manutenção</h3>
                    <p>Realizamos a manutenção de equipamentos e celulares. Com preços acessíveis, qualidade e garantia. </p>
                </li>
                <li class="itens"><img src="_imagens/desenvolvimento.png" class="icones-principal">
                    <h3>Desenvolvimento</h3>
                    <p>Desenvolvimento WEB e de Sistemas. Com gerenciamento de conteúdo intuitivo, onde você mesmo pode atualizar as informações de forma rápida. </p> 
                </li>
                <li class="itens"><img src="_imagens/midias-sociais.png" class="icones-principal">
                    <h3>Mídias Sociais</h3>
                    <p>Gerenciamos suas mídias sociais. Nossa equipe cuidará para que tudo seja atualizado constantemente, otimizando seus perfis para que seu negócio seja encontrado facilmente.</p>
                </li>
                <li class="itens"><img src="_imagens/empresas.png" class="icones-principal">
                    <h3>Suporte Empresarial</h3>
                    <p>Suporte técnico de Informática para o seu negócio. Agilidade, transparência, segurança, qualidade e fácil acesso na abertura de chamados com tempo de resposta e solução imediatas.</p>
                </li>
                <li class="itens"><img src="_imagens/entrega.png" class="icones-principal">
                    <h3>Atendimento Delivery</h3>
                    <p>Contamos com um sistema de retirada/entrega delivery, de equipamentos para manutenção e suporte. Sem a necessidade de deslocamento por parte da empresa. </p>
                </li>
                <li class="itens"><img src="_imagens/compra-venda.png" class="icones-principal">
                    <h3>Compra e Venda</h3>
                    <p>Compramos e vendemos aparelhos celulares e equipamentos de informática, seminovos, com garantia e qualidade.</p>
                </li>
            </ul>
        </div>
    </section>
    
</main>
<form action="contato-enviar.php" method="POST" class="contato-form">
        <fieldset>
            <legend>Contato</legend>
            <label for="nome">Nome:</label>
            <input id="nome" class="input-contato" type="text" name="nome" maxlength="40" size="58">
            
            <label for="telefone">Telefone:</label>
            <input id="telefone" class="input-contato" type="tel" name="telefone" maxlength="13" placeholder="19 99999-9999" size="58">
            
            <label for="email">E-mail:</label>
            <input id="email" class="input-contato" type="email" name="email" maxlength="30" placeholder="contato@dominio.com.br" size="58">
            
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" cols="100" maxlength="150" class="input-contato"></textarea>
        </fieldset>

        <input type="submit" class="enviar" value="Enviar">   

    </form>
<?php require_once 'rodape.php' ?>