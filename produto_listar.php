<?php
    require 'config.php';
    
    $produtosDAO = new ProdutosDAO();
    $produtos = $produtosDAO->buscar();


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
            <h2>Produtos</h2>
            
            <p>
                <a href="produto_cadastrar.php" class="btn btn-primary">Novo Produto</a>    

            </p>
            
            <?php exibe_msg() ?>
            
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
                <?php
                    foreach($produtos as $produto){
                
                
                ?>
                
                
                    <tr>
                        <td><?=$produto->getId()?></td>
                        <td>
                        
                            <?php if($produto->getFoto()){?>
                            <img src="<?=$produto->getFoto()?>" width="100px"> 
                        
                        </td>
                            <?php } ?>
                        
                        <td><?=$produto->getNome()?></td>
                        
                        <td><?=$produto->getValor_unidade()?></td>
                        <td> 
                            <a href="produto_editar.php?id=<?= $produto->getId() ?>" class="btn btn-warning">Editar</a>
                            
                            <a href="produto_acao_deletar.php?id=<?= $produto->getId() ?>" class="btn btn-danger">Excluir</a>

                        </td>
                    </tr>
                    <?php } ?>
            </table>


        </div>

       
    </body>
</html>


