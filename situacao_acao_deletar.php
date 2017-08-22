<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $situacoesDAO = new SituacoesDAO;
    $situacoesDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Situação Deletada com Sucesso!";
   
    redirecionar("situacao_listar.php");
}

