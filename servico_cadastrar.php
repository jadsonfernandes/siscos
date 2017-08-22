<?php

require 'config.php';

$servico = retornadados('servico');


if($servico == ""){
    $servico = new Servico();
    
    
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
            <form class="form-horizontal" method="POST" action="servico_acao_cadastrar.php">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Serviço</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome_servico">Nome</label>  
  <div class="col-md-5">
  <input id="nome_servico" name="nome_servico" value="<?=$servico->getNome_servico()?>" placeholder="Nome Serviço" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="descricao">Descrição</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição"><?=$servico->getDescricao()?></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valor_servico">Valor</label>  
  <div class="col-md-2">
  <input id="valor_servico" name="valor_servico" value="<?=$servico->getValor_servico()?>" placeholder="Valor" class="form-control input-md" type="text">
    
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