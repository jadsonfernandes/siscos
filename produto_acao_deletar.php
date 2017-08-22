<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $produtosDAO = new ProdutosDAO;
    $produtosDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Produto Deletado com Sucesso!";
   
    redirecionar("produto_listar.php");
}

