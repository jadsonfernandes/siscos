<?php

require 'config.php';

$situacao = retornadados('situacao');


if($situacao == ""){
    $situacao = new Situacao();
    
    
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

           <?php
          
          exibe_msg();
          
          
          
          
          ?>
            <form class="form-horizontal" method="POST" action="situacao_acao_cadastrar.php">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Situação</legend>

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

</fieldset>
</form>



        </div>

    </body>
</html>