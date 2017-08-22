<?php
require 'config.php';

$clientesDAO = new ClientesDAO;

$clientes = $clientesDAO->buscar();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title></title>

    </head>
    <body>

        <div class="container">   
            <h1>SISCOS - SISTEMA PARA CONTROLE DE ORDEM DE SERVIÇO</h1>

            <p>
                <a href="cliente_cadastrar.php" class="btn btn-primary">Novo Cliente</a>    

            </p>

             <?php
                
             exibe_msg();
             
             ?>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
<?php foreach ($clientes as $cliente) { ?>
                    <tr>
                        <td><?= $cliente->getId(); ?></td>
                        <td><?= $cliente->getNome(); ?></td>
                        <td> 
                            <a href="cliente_editar.php?id=<?= $cliente->getId() ?>" class="btn btn-warning">Editar</a>
                            <a href="cliente_acao_deletar.php?id=<?= $cliente->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
<?php } ?>
            </table>


        </div>

    </body>
</html>