<?php
require 'config.php';
if( $_SERVER['REQUEST_METHOD'] == "GET" ){
    //FILTRO PARA APENAS RECEBER NÚMEROS INTEIROS
    $id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
   
    $usuariosDAO = new UsuariosDAO;
    $usuariosDAO->deletar($id);
     
    $_SESSION['msg_sucesso'] = "Usuário Deletado com Sucesso!";
   
    redirecionar("usuario_listar.php");
}

