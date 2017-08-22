<?php
require 'config.php';

// Cadatrar Cliente
$clientesDAO  = new ClientesDAO;
$cliente = new Cliente;
$cliente->setNome("Jadson Fernadnes dos Santos Bandeira");
$cliente->setCpf("060.268.645-80");
$cliente->setCidade("Brumado");
$cliente->setUf("Bahia");


$clientesDAO->salvar($cliente);
echo "Cliente Cadastrado com Sucesso!";
echo "<br>";

// Editar Cliente
$clientesDAO = new ClientesDAO();
$cliente1 = new Cliente();
$cliente1->setNome("Jadelson Silva Bandeira");
$cliente1->setCpf("604.415.309-49");
$cliente1->setCidade("Brumado");
$cliente1->setUf("Bahia");
$cliente1->setId(7);
$clientesDAO->salvar($cliente1);
echo "Cliente Editado com Sucesso!";

echo "<br>";

//Deletar Cliente
$clientesDAO = new ClientesDAO;
$clientesDAO->deletar(15);
echo "Cliente Deletado com Sucesso!";

echo "<br>";
 // Buscar todos os clientes da tabela
    $clientes = $clientesDAO->buscar();
    echo "<pre>";
    var_dump($clientes);

 //Buscar somente na tabela o cliente com ID = 1
    $cliente2 = $clientesDAO->buscarPorId(1);
    var_dump($cliente2);




