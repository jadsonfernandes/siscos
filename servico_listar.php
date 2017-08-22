<?php
require 'config.php';

$servicosDAO = new ServicosDAO;

$servicos = $servicosDAO->buscar();
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
                <a href="servico_cadastrar.php" class="btn btn-primary">Novo Serviço</a>    

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
<?php foreach ($servicos as $servico) { ?>
                    <tr>
                        <td><?= $servico->getId(); ?></td>
                        <td><?= $servico->getNome_servico(); ?></td>
                        <td> 
                            <a href="servico_editar.php?id=<?= $servico->getId() ?>" class="btn btn-warning">Editar</a>
                            <a href="servico_acao_deletar.php?id=<?= $servico->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
<?php } ?>
            </table>


        </div>

    </body>
</html>