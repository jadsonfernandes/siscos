<?php
require 'config.php';

// Cadatrar 
$situacoesDAO  = new SituacoesDAO;
$situacao = new Situacao;
$situacao->setNome("Abandonado pelo cliente");

$situacoesDAO->salvar($situacao);
echo "Situacao Cadastrada com Sucesso!";
echo "<br>";

// Editar 
$situacoesDAO = new SituacoesDAO();
$situacao1 = new Situacao();
$situacao1->setNome("Na bancada");
$situacao1->setId(5);
$situacoesDAO->salvar($situacao1);
echo "Situação Editada com Sucesso!";
 
 

echo "<br>";

$situacoesDAO = new SituacoesDAO;
$situacoesDAO->deletar(8);
echo "Situação Deletada com Sucesso!";

echo "<br>";
 // Buscar todos as situações da tabela
    $situacoes = $situacoesDAO->buscar();
    echo "<pre>";
    var_dump($situacoes);

 //Buscar somente na tabela a situacao com ID = 1
    $situacao2 = $situacoesDAO->buscarPorId(1);
    var_dump($situacao2);




