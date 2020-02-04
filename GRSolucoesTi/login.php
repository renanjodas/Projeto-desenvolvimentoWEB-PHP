<?php require_once 'cabecalho.php'?>

<div class="titulo-destaque-orcamento">
    <h1>Área Administrativa</h1>  
</div>
<main class="conteudo-login">
    <form action="administrativo.php" method="POST" target="print_popup" class="form-login">
        <fieldset>
            <legend class="legend-login">Faça seu Login</legend> 
            <label for="email" class="label-login">Usuário</label>
            <input type="email" id="email" class="input-login" maxlength="30" placeholder="Usuário" required><br>

            <label for="senha" class="label-login">Senha</label>
            <input type="password" id="senha" class="input-login" maxlength="10" placeholder="Senha" required><br>

            <input type="submit" class="enviar-login" value="Acessar">
        </fildset>
    </form>
</main>

<?php require_once 'rodape.php' ?>