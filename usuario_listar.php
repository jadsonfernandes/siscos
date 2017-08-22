<?php
    require 'config.php';
    
    $usuariosDAO = new UsuariosDAO();
    $usuarios = $usuariosDAO->buscar();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISCOS - SISTEMA PARA CONTROLE DE ORDEM DE SERVIÇO</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        
        

        <div class="container">   
            <h1>SISCOS - SISTEMA PARA CONTROLE DE ORDEM DE SERVIÇO</h1>
            <h2>Usuários</h2>
            
            <p>
                <a href="usuario_cadastrar.php" class="btn btn-primary">Novo Usuário</a>    

            </p>
            
            <?php 
            
            exibe_msg() 
            
            ?>
            
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
       
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
                <?php
                    foreach($usuarios as $usuario){
                
                
                ?>
                
                
                    <tr>
                        <td><?=$usuario->getId()?></td>
                        <td><?=$usuario->getNome()?></td>
                        <td><?=$usuario->getLogin()?></td>
                        <td><?=$usuario->getPerfil()?></td>
                        <td> 
                            <a href="usuario_editar.php?id=<?= $usuario->getId() ?>" class="btn btn-warning">Editar</a>
                            
                            <a href="usuario_acao_deletar.php?id=<?= $usuario->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
                    <?php } ?>
            </table>


        </div>

       
    </body>
</html>


