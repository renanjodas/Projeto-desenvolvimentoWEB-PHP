<?php
    require_once 'cabecalho-usuario.php';

    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Cadastrar Novo Usuario</h1>";
    ?>

<form name="novo-usuario" method="post" action="usuarios-criar-post.php" class="conteudo-cadastrar-usuario">
    <strong>Usuário:</strong><br />
    <input name="usuario" maxlength="20">
    <br /><br />
    <strong>Senha:</strong><br />
    <input name="senha" maxlength="12" type="password">
    <br><br />
    <button type="submit" class="btn">Salvar</button>
</form>
<?php require_once 'rodape.php'; ?>