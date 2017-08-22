<?php
    require 'config.php';
    
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    if($id){
        
        $situacoesDAO = new SituacoesDAO;
        $situacao = $situacoesDAO->buscarPorId($id);
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">   
            
          <h1>SISCOS - SISTEMA PARA CONTROLE DE ORDEM DE SERVIÇO</h1>
          <?php  exibe_msg(); ?>

            <form class="form-horizontal" method="POST" action="situacao_acao_editar.php?id=<?=$situacao->getId()?>">
                    <legend>Editar Situação</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="Nome situação" value="<?=$situacao->getNome()?>" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="salvar"></label>
  <div class="col-md-4">
    <button id="salvar" name="salvar" class="btn btn-success">Salvar</button>
  </div>
</div>


</form>



        </div>

    </body>
</html>