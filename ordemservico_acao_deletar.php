<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $ordem_servicosDAO = new Ordem_servicosDAO;
    $ordem_servicosDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Ordem de Serviço Deletada com Sucesso!";
   
    redirecionar("ordemservico_listar.php");
}

