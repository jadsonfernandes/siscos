<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $servicosDAO = new ServicosDAO;
    $servicosDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Serviço Deletado com Sucesso!";
   
    redirecionar("servico_listar.php");
}

