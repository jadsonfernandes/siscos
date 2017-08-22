<?php

require 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    
    $nome = filter_input(INPUT_POST,'nome');
    $valor_unidade = filter_input(INPUT_POST,'valor_unidade');
    $estoque = filter_input(INPUT_POST,'estoque',FILTER_SANITIZE_NUMBER_INT);
    $estoque_minimo = filter_input(INPUT_POST,'estoque_minimo',FILTER_SANITIZE_NUMBER_INT);
    $foto = "";
    
    $upload = new Upload();
    //$upload0>setTipospermitidos(['application/pdf','image/jpeg']);
    $upload->setPasta('fotos');
    $upload->setArquivo('foto');
    if($upload->valida()){
        $foto = $upload->enviar();
    }
    
    $produto = new Produto;
    $produto->setNome($nome);
    $produto->setValor_unidade($valor_unidade);
    $produto->setEstoque($estoque);
    $produto->setEstoque_minimo($estoque_minimo);
    $produto->setFoto($foto);
    
    
    $produtosDAO = new ProdutosDAO;
    
    $validacao = new Validacao();
   $validacao->obrigatorio("Nome", $produto->getNome());
   $validacao->obrigatorio("Valor", $produto->getValor_unidade());
   $validacao->obrigatorio("Estoque", $produto->getEstoque());
   $validacao->obrigatorio("Estoque minimo", $produto->getEstoque_minimo());
   $validacao->obrigatorio("Foto", $produto->getFoto());
   
   
   
   
   
   if($validacao->valida()){
   
   
   

    $produtosDAO->salvar($produto);
   
   $_SESSION['msg_sucesso'] = "Produto Cadastrado com Sucesso!";
   
   redirecionar("produto_listar.php");
   
    }else{
    
    $_SESSION['msg_erro'] = $validacao->getMensagem();
    $_SESSION['produto'] = $produto;
    redirecionar("produto_cadastrar.php");
    }
    
}
