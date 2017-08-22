<?php
require 'config.php';

// Cadastrar 
$produtosDAO  = new ProdutosDAO;
$produto = new Produto;
$produto->setNome("Cooler");
$produto->setValor_unidade("19.99");
$produtosDAO->salvar($produto);
echo "Produto Cadastrado com Sucesso!";
echo "<br>";

// Editar 
$produtosDAO = new ProdutosDAO();
$produto1 = new Produto();
    $produto1->setNome("Mouse - Bluetooth");
$produto1->setId(6);
$produtosDAO->salvar($produto1);
echo "Produto Editado com Sucesso!";
 


echo "<br>";

$produtosDAO = new ProdutosDAO;
$produtosDAO->deletar(2);
echo "Produto Deletado com Sucesso!";

echo "<br>";
 // Buscar todos os produtos da tabela
    $produtos = $produtosDAO->buscar();
    echo "<pre>";
    var_dump($produtos);

 //Buscar somente na tabela o produto com ID = 1
    $produto2 = $produtosDAO->buscarPorId(4);
    var_dump($produto2);




