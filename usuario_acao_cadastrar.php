<?php

require 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
   
    
    $nome = filter_input(INPUT_POST,'nome');
    $cpf = filter_input(INPUT_POST,'cpf');
    $estado_civil = filter_input(INPUT_POST,'estado_civil');
    $endereco = filter_input(INPUT_POST,'endereco');
    $data_nascimento = filter_input(INPUT_POST,'data_nascimento');
    $email = filter_input(INPUT_POST,'email');
    $telefone = filter_input(INPUT_POST,'telefone');
    $senha = filter_input(INPUT_POST,'senha');
    $login = filter_input(INPUT_POST,'login');
    $complemento = filter_input(INPUT_POST,'complemento');
    $cep = filter_input(INPUT_POST,'cep');
    $celular = filter_input(INPUT_POST,'celular');
    $bairro = filter_input(INPUT_POST,'bairro');
    $rg = filter_input(INPUT_POST,'rg');
    $sexo = filter_input(INPUT_POST,'sexo');
    $uf = filter_input(INPUT_POST,'uf');
    $cidade = filter_input(INPUT_POST,'cidade');
    $numero = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT);
    $perfil = filter_input(INPUT_POST,'perfil');
    
    
            
   $usuariosDAO = new UsuariosDAO();
    
    $usuario = new Usuario;
    $usuario->setNome($nome);
    $usuario->setCpf($cpf);
    $usuario->setEstado_civil($estado_civil);
    $usuario->setEndereco($endereco);
    $usuario->setData_nascimento($data_nascimento);
    $usuario->setEmail($email);
    $usuario->setTelefone($telefone);
    $usuario->setSenha($senha);
    $usuario->setLogin($login);
    $usuario->setComplemento($complemento);
    $usuario->setCep($cep);
    $usuario->setCelular($celular);
    $usuario->setBairro($bairro);
    $usuario->setRg($rg);
    $usuario->setSexo($sexo);
    $usuario->setUf($uf);
    $usuario->setCidade($cidade);
    $usuario->setNumero($numero);
    $usuario->setPerfil($perfil);
    
    $validacao = new Validacao();
   $validacao->obrigatorio("Nome", $usuario->getNome());
   $validacao->obrigatorio("CPF", $usuario->getCpf());
   $validacao->obrigatorio("RG", $usuario->getRg());
   $validacao->obrigatorio("Endereco", $usuario->getEndereco());
   $validacao->obrigatorio("Complemento", $usuario->getComplemento());
   $validacao->obrigatorio("Bairro", $usuario->getBairro());
   $validacao->obrigatorio("Numero", $usuario->getNumero());
   $validacao->obrigatorio("Login", $usuario->getLogin());
   $validacao->obrigatorio("Senha", $usuario->getSenha());
   $validacao->obrigatorio("Perfil", $usuario->getPerfil());
   
   
   
   
   if($validacao->valida()){
   
   
   

    $usuariosDAO->salvar($usuario);
   
   $_SESSION['msg_sucesso'] = "Usuário Cadastrado com Sucesso!";
   
   redirecionar("usuario_listar.php");
   
    }else{
    
    $_SESSION['msg_erro'] = $validacao->getMensagem();
    $_SESSION['usuario'] = $usuario;
    redirecionar("usuario_cadastrar.php");
    }
    
}
