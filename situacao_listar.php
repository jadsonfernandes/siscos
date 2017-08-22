<?php
require 'config.php';

$situacoesDAO = new SituacoesDAO;

$situacoes = $situacoesDAO->buscar();
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
                <a href="situacao_cadastrar.php" class="btn btn-primary">Nova Situação</a>    

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
<?php foreach ($situacoes as $situacao) { ?>
                    <tr>
                        <td><?= $situacao->getId(); ?></td>
                        <td><?= $situacao->getNome(); ?></td>
                        <td> 
                            <a href="situacao_editar.php?id=<?= $situacao->getId() ?>" class="btn btn-warning">Editar</a>
                            <a href="situacao_acao_deletar.php?id=<?= $situacao->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
<?php } ?>
            </table>


        </div>

    </body>
</html>