<?php
require 'config.php';


if( $_SERVER['REQUEST_METHOD'] == "POST"){
    
    $numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT);
   $cpf = filter_input(INPUT_POST, 'cpf');
   $endereco = filter_input(INPUT_POST, 'endereco');
   $nome = filter_input(INPUT_POST, 'nome');
   $rg = filter_input(INPUT_POST, 'rg');
   $sexo = filter_input(INPUT_POST, 'sexo');
   $complemento = filter_input(INPUT_POST, 'complemento');
   $cep = filter_input(INPUT_POST, 'cep');
   $celular = filter_input(INPUT_POST, 'celular');
   $cidade = filter_input(INPUT_POST, 'cidade');
   $estado_civil = filter_input(INPUT_POST, 'estado_civil');
   $bairro = filter_input(INPUT_POST, 'bairro');
   $email = filter_input(INPUT_POST, 'email');
   $telefone = filter_input(INPUT_POST, 'telefone');
   $uf = filter_input(INPUT_POST, 'uf');
   $data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
   $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
     $cliente = new Cliente();
   $cliente->setNumero($numero);
   $cliente->setCpf($cpf);
   $cliente->setNome($nome);
   $cliente->setRg($rg);
   $cliente->setSexo($sexo);
   $cliente->setComplemento($complemento);
   $cliente->setCep($cep);
   $cliente->setCelular($celular);
   $cliente->setCidade($cidade);
   $cliente->setEstado_civil($estado_civil);
   $cliente->setBairro($bairro);
   $cliente->setEmail($email);
   $cliente->setTelefone($telefone);
   $cliente->setUf($uf);
   $cliente->setData_nascimento($data_nascimento);
    $cliente->setId($id);
    
    $clientesDAO = new ClientesDAO;
    $clientesDAO->salvar($cliente);
    
     $_SESSION['msg_sucesso'] = "Cliente Editado com Sucesso!";
   
    redirecionar("cliente_listar.php?id=$id");
}
