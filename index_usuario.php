<?php
require 'config.php';

// Cadatrar Usuário
$usuariosDAO  = new UsuariosDAO;
$usuario = new Usuario;
$usuario->setNome("Joao Gomes");
$usuario->setLogin("João");
$usuario->setSenha("123");
$usuario->setPerfil("funcionario");
$usuariosDAO->salvar($usuario);
echo "Usuário Cadastrado com Sucesso!";
echo "<br>";

// Editar Usuário
$usuariosDAO = new UsuariosDAO();
$usuario1 = new Usuario();
$usuario1->setNome("Simone Fernandes dos Santos Bandeira");
$usuario1->setLogin("simone");
$usuario1->setSenha("simone");
$usuario->setPerfil("administrador");
$usuario1->setId(5);
$usuariosDAO->salvar($usuario1);
echo "Usuário Editado com Sucesso!";

echo "<br>";

$usuariosDAO = new UsuariosDAO;
$usuariosDAO->deletar(20);
echo "Usuário Deletado com Sucesso!";

echo "<br>";
 // Buscar todos os usuários da tabela
    $usuarios = $usuariosDAO->buscar();
    echo "<pre>";
    var_dump($usuarios);

 //Buscar somente na tabela o usuário com ID = 1
    $usuario2 = $usuariosDAO->buscarPorId(14);
    var_dump($usuario2);




