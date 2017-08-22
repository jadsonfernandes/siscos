<?php
require 'config.php';

// Cadastrar 
$ordem_servicosDAO  = new Ordem_servicosDAO;
$ordem_servico = new Ordem_servico;
$ordem_servico->setValor_total("250.00");
$ordem_servico->setData_os("2017/12/08");
$ordem_servico->setEquipamento("Notebook HP");
$ordem_servico->setDefeito("Teclado com teclas não funcionando");
$ordem_servicosDAO->salvar($ordem_servico);
echo "OS Cadastrada com Sucesso!";
echo "<br>";

// Editar 
$ordem_servicosDAO = new Ordem_servicosDAO();
$ordem_servico1 = new Ordem_servico;
$ordem_servico1->setEquipamento("Computador Samsung");
$ordem_servico1->setId(7);
$ordem_servicosDAO->salvar($ordem_servico1);
echo "OS Editada com Sucesso!";
 

echo "<br>";

$ordem_servicosDAO = new Ordem_servicosDAO;
$ordem_servicosDAO->deletar(8);
echo "OS Deletada com Sucesso!";

echo "<br>";
 // Buscar todos as OS da tabela
    $ordem_servicos = $ordem_servicosDAO->buscar();
    echo "<pre>";
    var_dump($ordem_servicos);

 //Buscar somente na tabela a OS com ID = 1
    $ordem_servico2 = $produtosDAO->buscarPorId(4);
    var_dump($ordem_servico2);




