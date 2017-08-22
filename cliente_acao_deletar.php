<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $clientesDAO = new ClientesDAO;
    $clientesDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Cliente Deletado com Sucesso!";
   
    redirecionar("cliente_listar.php");
}

