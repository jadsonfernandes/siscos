<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST"){
    
    
   $valor_total = filter_input(INPUT_POST, 'valor_total');
   $data_os = filter_input(INPUT_POST, 'data_os');
   $equipamento = filter_input(INPUT_POST, 'equipamento');
   $defeito = filter_input(INPUT_POST, 'defeito');
   $cliente = filter_input(INPUT_POST, 'cliente');
   $usuario = filter_input(INPUT_POST, 'usuario');
   $produto = filter_input(INPUT_POST, 'produto');
   $situacao = filter_input(INPUT_POST, 'situacao');
   $servico = filter_input(INPUT_POST, 'servico');
   $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    $ordem_servico = new Ordem_servico();
   $ordem_servico->setValor_total($valor_total);
   $ordem_servico->setData_os($data_os);
   $ordem_servico->setEquipamento($equipamento);
   $ordem_servico->setDefeito($defeito);
   $ordem_servico->setId_cliente($cliente);
   $ordem_servico->setId_usuario($usuario);
   $ordem_servico->setId_produto($produto);
   $ordem_servico->setId_situacao($situacao);
   $ordem_servico->setId_servico($servico);
    $ordem_servico->setId($id);
    
    $ordem_servicosDAO = new Ordem_servicosDAO;
    $ordem_servicosDAO->salvar($ordem_servico);
    
     $_SESSION['msg_sucesso'] = "Ordem de Serviço Editada com Sucesso!";
   
    redirecionar("ordemservico_listar.php?id=$id");
}
