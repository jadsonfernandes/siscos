<?php


class Produto implements Ientidade{
    protected $id;
    protected $nome;
    protected $valor_unidade;
    protected $estoque;
    protected $estoque_minimo;
    protected $foto;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor_unidade() {
        return $this->valor_unidade;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function getEstoque_minimo() {
        return $this->estoque_minimo;
    }

    function getFoto() {
        return $this->foto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor_unidade($valor_unidade) {
        $this->valor_unidade = $valor_unidade;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    function setEstoque_minimo($estoque_minimo) {
        $this->estoque_minimo = $estoque_minimo;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }



}
