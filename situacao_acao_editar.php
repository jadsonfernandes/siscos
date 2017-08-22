<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST"){
    
    
   $nome = filter_input(INPUT_POST, 'nome');
   $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    $situacao = new Situacao();
    $situacao->setNome($nome);
    $situacao->setId($id);
    
    $situacoesDAO = new SituacoesDAO;
    $situacoesDAO->salvar($situacao);
    
     $_SESSION['msg_sucesso'] = "Situação Editada com Sucesso!";
   
    redirecionar("situacao_listar.php?id=$id");
}
