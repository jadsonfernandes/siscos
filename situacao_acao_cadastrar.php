<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    
   $situacoesDAO = new SituacoesDAO;
   
   
   $nome = filter_input(INPUT_POST, 'nome');
  
   
   
    
   
   
   
   $situacao = new Situacao();
   $situacao->setNome($nome);
   
    $validacao = new Validacao();
   $validacao->obrigatorio("Nome", $situacao->getNome());
   
   
   
   
   
   if($validacao->valida()){
   
   
   

    $situacoesDAO->salvar($situacao);
   
   $_SESSION['msg_sucesso'] = "Situação Cadastrada com Sucesso!";
   
   redirecionar("situacao_listar.php");
   
    }else{
    
    $_SESSION['msg_erro'] = $validacao->getMensagem();
    $_SESSION['situacao'] = $situacao;
    redirecionar("situacao_cadastrar.php");
    }
    
}
