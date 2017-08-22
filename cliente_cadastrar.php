<?php

require 'config.php';

$cliente = retornadados('cliente');


if($cliente == ""){
    $cliente = new Cliente();
    
    
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
            <form class="form-horizontal" method="POST" action="cliente_acao_cadastrar.php">
<fieldset>

<!-- Form Name -->
<legend>Cadastrar Cliente</legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="Nome completo" value="<?=$cliente->getNome()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rg">RG</label>  
  <div class="col-md-4">
  <input id="rg" name="rg" placeholder="RG" value="<?=$cliente->getRg()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" placeholder="###.###.###-##" value="<?=$cliente->getCpf()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sexo">Sexo</label>  
  <div class="col-md-4">
  <input id="sexo" name="sexo" placeholder="Sexo" value="<?=$cliente->getSexo()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estado_civil">Estado Civil</label>  
  <div class="col-md-4">
  <input id="estado_civil" name="estado_civil" placeholder="Estado Civil" value="<?=$cliente->getEstado_civil()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data_nascimento">Data Nascimento</label>  
  <div class="col-md-4">
  <input id="data_nascimento" name="data_nascimento" value="<?=$cliente->getData_nascimento()?>" placeholder="AAAA-MM-DD" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-8">
  <input id="endereco" name="endereco" placeholder="Endereço" value="<?=$cliente->getEndereco()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="complemento">Complemento</label>  
  <div class="col-md-4">
  <input id="complemento" name="complemento" placeholder="Complemento" value="<?=$cliente->getComplemento()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero">Numero</label>  
  <div class="col-md-2">
  <input id="numero" name="numero" placeholder="Numero" value="<?=$cliente->getNumero()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-4">
  <input id="bairro" name="bairro" placeholder="Bairro" value="<?=$cliente->getBairro()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
  <div class="col-md-4">
  <input id="cidade" name="cidade" placeholder="Cidade" value="<?=$cliente->getCidade()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uf">UF</label>  
  <div class="col-md-2">
  <input id="uf" name="uf" placeholder="UF" value="<?=$cliente->getUf()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-4">
  <input id="cep" name="cep" placeholder="##.###-###" value="<?=$cliente->getCep()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" placeholder="(##) ####-####" value="<?=$cliente->getTelefone()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="celular">Celular</label>  
  <div class="col-md-4">
  <input id="celular" name="celular" placeholder="(##) # ####-####" value="<?=$cliente->getCelular()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" placeholder="Email" value="<?=$cliente->getEmail()?>" class="form-control input-md" type="text">
    
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