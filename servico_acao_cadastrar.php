<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    
   $servicosDAO = new ServicosDAO;
   
   
   $nome_servico = filter_input(INPUT_POST, 'nome_servico');
   $descricao = filter_input(INPUT_POST, 'descricao');
   $valor_servico = filter_input(INPUT_POST, 'valor_servico');
   
   
    
   
   
   
   $servico = new Servico();
   $servico->setNome_servico($nome_servico);
   $servico->setDescricao($descricao);
   $servico->setValor_servico($valor_servico);
   
    $validacao = new Validacao();
   $validacao->obrigatorio("Nome", $servico->getNome_servico());
   $validacao->obrigatorio("Descrição", $servico->getDescricao());
   $validacao->obrigatorio("Valor", $servico->getValor_servico());
   
   
   
   
   
   if($validacao->valida()){
   
   
   

    $servicosDAO->salvar($servico);
   
   $_SESSION['msg_sucesso'] = "Serviço Cadastrado com Sucesso!";
   
   redirecionar("servico_listar.php");
   
    }else{
    
    $_SESSION['msg_erro'] = $validacao->getMensagem();
    $_SESSION['servico'] = $servico;
    redirecionar("servico_cadastrar.php");
    }
    
}
