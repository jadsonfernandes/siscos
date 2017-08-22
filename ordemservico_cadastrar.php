<?php

require 'config.php';

$clientesDAO = new ClientesDAO();
$clientes = $clientesDAO->buscar();

$usuariosDAO = new UsuariosDAO();
$usuarios = $usuariosDAO->buscar();

$produtosDAO = new ProdutosDAO();
$produtos = $produtosDAO->buscar();

$situacoesDAO = new SituacoesDAO();
$situacoes = $situacoesDAO->buscar();
  
$servicosDAO = new ServicosDAO();
$servicos = $servicosDAO->buscar();
        
$ordem_servico = retornadados('ordem_servico');

if($ordem_servico == ""){
    $ordem_servico = new Ordem_servico();
    
    
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
            <form class="form-horizontal" method="POST" action="ordemservico_acao_cadastrar.php">
<fieldset>

<!-- Form Name -->
<legend>Emitir Ordem de Serviço</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="equipamento">Equipamento</label>  
  <div class="col-md-6">
  <input id="equipamento" name="equipamento" value="<?=$ordem_servico->getEquipamento()?>" placeholder="Digite o nome do equipamento" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data_os">Data</label>  
  <div class="col-md-4">
  <input id="data_os" name="data_os" placeholder="AAAA-MM-DD" value="<?=$ordem_servico->getData_os()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valor_total">Valor</label>  
  <div class="col-md-2">
  <input id="valor_total" name="valor_total" placeholder="Valor" value="<?=$ordem_servico->getValor_total()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="defeito">Defeito</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="defeito" laceholder="Digite aqui o defeito" name="defeito"><?=$ordem_servico->getDefeito()?></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cliente">Clientes</label>
  <div class="col-md-6">
    <select id="cliente" name="cliente" class="form-control">
      <option value="">Seleciona um cliente</option>
      <?php foreach($clientes as $cliente){   ?>
                            <?php
                                if($ordem_servico->getId_cliente() == $cliente->getId()){
                                 $select = "SELECTED";
                                }else{
                                    $select = "";
                                }
                            ?>
      <option <?=$select?> value="<?=$cliente->getId()?>"><?=$cliente->getNome()?></option>
      
      <?php }  ?>
    
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="usuario">Usuários</label>
  <div class="col-md-6">
    <select id="cliente" name="usuario" class="form-control">
      <option value="">Seleciona um usuário</option>
      <?php foreach($usuarios as $usuario){   ?>
                            <?php
                                if($ordem_servico->getId_usuario() == $usuario->getId()){
                                 $select = "SELECTED";
                                }else{
                                    $select = "";
                                }
                            ?>
      <option <?=$select?> value="<?=$usuario->getId()?>"><?=$usuario->getNome()?></option>
      <?php }  ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="produto">Produtos</label>
  <div class="col-md-6">
    <select id="cliente" name="produto" class="form-control">
      <option value="">Seleciona um produto</option>
      <?php foreach($produtos as $produto){   ?>
                            <?php
                                if($ordem_servico->getId_produto() == $produto->getId()){
                                 $select = "SELECTED";
                                }else{
                                    $select = "";
                                }
                            ?>
      <option <?=$select?> value="<?=$produto->getId()?>"><?=$produto->getNome()?></option>
      <?php }  ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="situacao">Situações</label>
  <div class="col-md-6">
    <select id="cliente" name="situacao" class="form-control">
      <option value="">Seleciona uma situacao</option>
      <?php foreach($situacoes as $situacao){   ?>
                            <?php
                                if($ordem_servico->getId_situacao() == $situacao->getId()){
                                 $select = "SELECTED";
                                }else{
                                    $select = "";
                                }
                            ?>
      <option <?=$select?> value="<?=$situacao->getId()?>"><?=$situacao->getNome()?></option>
      <?php }  ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="servico">Serviços</label>
  <div class="col-md-6">
    <select id="cliente" name="servico" class="form-control">
      <option value="">Selecione um serviço</option>
      <?php foreach($servicos as $servico){   ?>
                            <?php
                                if($ordem_servico->getId_servico() == $servico->getId()){
                                 $select = "SELECTED";
                                }else{
                                    $select = "";
                                }
                            ?>
      <option <?=$select?> value="<?=$servico->getId()?>"><?=$servico->getNome_servico()?></option>
      <?php }  ?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="salvar"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="salvar" class="btn btn-success">Salvar</button>
  </div>
</div>
</fieldset>
</form>



        </div>

    </body>
</html>