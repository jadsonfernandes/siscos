<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST"){
    
    
   $nome_servico = filter_input(INPUT_POST, 'nome_servico');
   $descricao = filter_input(INPUT_POST, 'descricao');
   $valor_servico = filter_input(INPUT_POST, 'valor_servico');
   $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    $servico = new Servico();
   $servico->setNome_servico($nome_servico);
   $servico->setDescricao($descricao);
   $servico->setValor_servico($valor_servico);
    $servico->setId($id);
    
    $servicosDAO = new ServicosDAO;
    $servicosDAO->salvar($servico);
    
     $_SESSION['msg_sucesso'] = "Serviço Editada com Sucesso!";
   
    redirecionar("servico_listar.php?id=$id");
}
