<?php

require 'config.php';

$produto = retornadados('produto');


if($produto == ""){
    $produto = new Produto();
    
    
}

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
         <?php
          
          exibe_msg();
          
          
          
          
          ?>
            <form method="POST" action="produto_acao_cadastrar.php" enctype="multipart/form-data">
                    <legend>Cadastrar Produto</legend>
                
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?=$produto->getNome()?>" id="nome" class="form-control" value=''>
                </div>
                <div class="form-group">
                    <label for="valor_unidade">Valor:</label>
                    <input type="text" name="valor_unidade" value="<?=$produto->getValor_unidade()?>" id="valor_unidade" class="form-control" value=''>
                </div>
                <div class="form-group">
                    <label for="estoque">Estoque:</label>
                    <input type="text" name="estoque" value="<?=$produto->getEstoque()?>" id="estoque" class="form-control" value=''>
                </div>
                <div class="form-group">
                    <label for="estoque_minimo">Estoque Mínimo:</label>
                    <input type="text" name="estoque_minimo" value="<?=$produto->getEstoque_minimo()?>" id="estoque_minimo" class="form-control" value=''>
                </div>
                
                <div class="form-group">
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                   
                    
                <div>
                    <button name="salvar" class="btn btn-primary">Salvar</button>
                </div>
            </form>


        </div>

        
        
    </body>
</html>