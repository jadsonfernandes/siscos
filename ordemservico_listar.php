<?php
require 'config.php';

$ordem_servicosDAO = new Ordem_servicosDAO;

$ordem_servicos = $ordem_servicosDAO->buscar();
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
                <a href="ordemservico_cadastrar.php" class="btn btn-primary">Nova Ordem de Serviço</a>    

            </p>

             <?php
                
             exibe_msg();
             
             ?>

            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Equipamento</th>
                    <th>Data</th>
                    <th>Defeito</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
<?php foreach ($ordem_servicos as $ordem_servico) { ?>
                    <tr>
                        <td><?= $ordem_servico->getId(); ?></td>
                        <td><?= $ordem_servico->getEquipamento(); ?></td>
                        <td><?= $ordem_servico->getData_os(); ?></td>
                        <td><?= $ordem_servico->getDefeito(); ?></td>
                        <td><?= $ordem_servico->getValor_total(); ?></td>
                        <td> 
                            <a href="ordemservico_editar.php?id=<?= $ordem_servico->getId() ?>" class="btn btn-warning">Editar</a>
                            <a href="ordemservico_acao_deletar.php?id=<?= $ordem_servico->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
<?php } ?>
            </table>


        </div>

    </body>
</html>