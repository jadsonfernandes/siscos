<?php
require 'config.php';

// Cadastrar 
$servicosDAO  = new ServicosDAO;
$servico = new Servico;
$servico->setNome_servico("Formatação");
$servico->setValor_servico("60.00");
$servicosDAO->salvar($servico);
echo "Serviço Cadastrado com Sucesso!";
echo "<br>";

// Editar 
$servicosDAO = new ServicosDAO();
$servico1 = new Servico();
$servico1->setNome_servico("Limpeza");
$servico1->setId(4);
$servicosDAO->salvar($servico1);
echo "Serviço Editado com Sucesso!";
 
 

echo "<br>";

$servicosDAO = new ServicosDAO;
$servicosDAO->deletar(2);
echo "Serviço Deletado com Sucesso!";

echo "<br>";
 // Buscar todos os servicos da tabela
    $servicos = $servicosDAO->buscar();
    echo "<pre>";
    var_dump($servicos);

 //Buscar somente na tabela o servico com ID = 1
    $servico2 = $servicosDAO->buscarPorId(4);
    var_dump($servico2);




