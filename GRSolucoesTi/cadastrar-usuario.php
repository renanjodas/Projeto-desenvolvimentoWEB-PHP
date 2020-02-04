<?php
    
    require_once 'classes/Usuario.php';

    $usuarios = new Usuario();
    $lista = $usuarios->listarUsuarios();

    require_once 'cabecalho-usuario.php';



    echo "<div class='conteudo-principal'>";
    echo "<h1 class='titulo-principal'>Usuários</h1>";
    ?>

    <table class="table-usuarios">
        <thead>
            <th>Id Usuario</th>
            <th>Usuario</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($lista as $linha){ ?>
                <tr>
                    <td><?php echo $linha['pkUsuario']; ?></td>
                    <td><?php echo $linha['usuario']; ?></td>
                    <td>
                    <a href="usuario-editar.php?CODIGO=<?php echo $linha['pkUsuario'];?>" class="btn">Alterar</a>
                     || 
                    <a href="usuario-excluir.php?CODIGO=<?php echo $linha['pkUsuario'];?>" class="btn">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="usuarios-criar.php" class="btn-cadastrar">Adicionar usuário</a>
    </div>
        
    </main>


<?php require_once 'rodape.php';?>