<?php
    require 'config.php';
    
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    if($id){
        
        $usuariosDAO = new UsuariosDAO;
        $usuario = $usuariosDAO->buscarPorId($id);
        
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

            <form class="form-horizontal" method="POST" action="usuario_acao_editar.php?id=<?=$usuario->getId()?>">
                    <fieldset>
 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="Nome completo" value="<?=$usuario->getNome()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rg">RG</label>  
  <div class="col-md-4">
  <input id="rg" name="rg" placeholder="RG" value="<?=$usuario->getRg()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpf">CPF</label>  
  <div class="col-md-4">
  <input id="cpf" name="cpf" placeholder="###.###.###-##" value="<?=$usuario->getCpf()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sexo">Sexo</label>  
  <div class="col-md-4">
  <input id="sexo" name="sexo" placeholder="Sexo" value="<?=$usuario->getSexo()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="estado_civil">Estado Civil</label>  
  <div class="col-md-4">
  <input id="estado_civil" name="estado_civil" placeholder="Estado Civil" value="<?=$usuario->getEstado_civil()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="data_nascimento">Data Nascimento</label>  
  <div class="col-md-4">
  <input id="data_nascimento" name="data_nascimento" placeholder="AAAA-MM-DD" value="<?=$usuario->getData_nascimento()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
  <div class="col-md-8">
  <input id="endereco" name="endereco" placeholder="Endereço" value="<?=$usuario->getEndereco()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="complemento">Complemento</label>  
  <div class="col-md-4">
  <input id="complemento" name="complemento" placeholder="Complemento" value="<?=$usuario->getComplemento()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numero">Numero</label>  
  <div class="col-md-2">
  <input id="numero" name="numero" placeholder="Numero" value="<?=$usuario->getNumero()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bairro">Bairro</label>  
  <div class="col-md-4">
  <input id="bairro" name="bairro" placeholder="Bairro" value="<?=$usuario->getBairro()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cidade">Cidade</label>  
  <div class="col-md-4">
  <input id="cidade" name="cidade" placeholder="Cidade" value="<?=$usuario->getCidade()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uf">UF</label>  
  <div class="col-md-2">
  <input id="uf" name="uf" placeholder="UF" value="<?=$usuario->getUf()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cep">CEP</label>  
  <div class="col-md-4">
  <input id="cep" name="cep" placeholder="##.###-###" value="<?=$usuario->getCep()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
  <div class="col-md-4">
  <input id="telefone" name="telefone" placeholder="(##) ####-####" value="<?=$usuario->getTelefone()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="celular">Celular</label>  
  <div class="col-md-4">
  <input id="celular" name="celular" placeholder="(##) # ####-####" value="<?=$usuario->getCelular()?>" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" placeholder="Email" value="<?=$usuario->getEmail()?>" class="form-control input-md" type="text">
    
  </div>
</div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="login">Login:</label>
                    
                <div class="col-md-5">
                    <input type="text" name="login" value="<?=$usuario->getLogin()?>" id="login" class="form-control input-md" value=''>
                </div>
                    </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="senha">Senha:</label>
                    <div class="col-md-5">
                    <input type="password" name="senha" value="<?=$usuario->getSenha()?>" id="senha" class="form-control input-md" value=''>
                </div>
        </div>

<div class="form-group">
                    <label class="col-md-4 control-label" for="perfil">Perfil:</label>
                    <div class="col-md-5">
                    <input type="text" name="perfil" value="<?=$usuario->getPerfil()?>" id="perfil" class="form-control input-md" value=''>
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