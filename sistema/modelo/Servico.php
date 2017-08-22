<?php


class Servico implements Ientidade{
    protected $id;
    protected $nome_servico;
    protected $descricao;
    protected $valor_servico;
    
    function getId() {
        return $this->id;
    }

    function getNome_servico() {
        return $this->nome_servico;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor_servico() {
        return $this->valor_servico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome_servico($nome_servico) {
        $this->nome_servico = $nome_servico;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor_servico($valor_servico) {
        $this->valor_servico = $valor_servico;
    }


}
