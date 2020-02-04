<?php
    
    $pkUsuario = $_GET['CODIGO'];
    require_once 'classes/Usuario.php';

    

    $usuarios = new Usuario();
    $linha = $usuarios->listar1Usuario($pkUsuario);

    require_once 'cabecalho-usuario.php';



    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Alterar Usuário</h1>";
?>

    <form name="alterar-usuario" action="usuario-editar-post.php" method="post" class="conteudo-alterar-usuario">
        <input type="hidden" name="pkUsuario" value="<?php echo $pkUsuario;?>">
        <strong>Usuário:</strong><br />
        <input type="text" name="usuario" value="<?php echo $linha['usuario'];?>">
        <br /><br />
        <strong>Senha:</strong><br />
        <input type="password" maxlength="12" name="senha" value="<?php echo $linha['senha'];?>">
        <br /><br />
        <button type="submit" class="btn">Salvar</button>
    </form>


<?php
require_once 'rodape.php';
?>
