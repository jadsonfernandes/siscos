<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    
   $ordem_servicosDAO = new Ordem_servicosDAO;
   
   
   $valor_total = filter_input(INPUT_POST, 'valor_total');
   $data_os = filter_input(INPUT_POST, 'data_os');
   $equipamento = filter_input(INPUT_POST, 'equipamento');
   $defeito = filter_input(INPUT_POST, 'defeito');
   $cliente = filter_input(INPUT_POST, 'cliente');
   $usuario = filter_input(INPUT_POST, 'usuario');
   $produto = filter_input(INPUT_POST, 'produto');
   $situacao = filter_input(INPUT_POST, 'situacao');
   $servico = filter_input(INPUT_POST, 'servico');
   
   
   
    
   
   
   
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
   
   
   $validacao = new Validacao();
   $validacao->obrigatorio("Valor", $ordem_servico->getValor_total());
   $validacao->obrigatorio("Data", $ordem_servico->getData_os());
   $validacao->obrigatorio("Equipamento", $ordem_servico->getEquipamento());
   $validacao->obrigatorio("Defeito", $ordem_servico->getDefeito());
   $validacao->obrigatorio("Clientes", $ordem_servico->getId_cliente());
   $validacao->obrigatorio("Usuários", $ordem_servico->getId_usuario());
   $validacao->obrigatorio("Produtos", $ordem_servico->getId_produto());
   $validacao->obrigatorio("Situacões", $ordem_servico->getId_situacao());
   $validacao->obrigatorio("Serviços", $ordem_servico->getId_servico());
   
   
   
   
   if($validacao->valida()){
   
   
   

    $ordem_servicosDAO->salvar($ordem_servico);
   
   $_SESSION['msg_sucesso'] = "Ordem de Serviço cadastrada com Sucesso!";
   
   redirecionar("ordemservico_listar.php");
   
    }else{
    
    $_SESSION['msg_erro'] = $validacao->getMensagem();
    $_SESSION['ordem_servico'] = $ordem_servico;
    redirecionar("ordemservico_cadastrar.php");
    }
    
}
