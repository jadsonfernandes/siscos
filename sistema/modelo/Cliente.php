<?php


class Cliente implements Ientidade{
    protected $id;
    protected  $numero;
    protected $cpf;
    protected $endereco;
    protected $nome;
    protected $rg;
    protected $sexo;
    protected $complemento;
    protected $cep;
    protected $celular;
    protected $cidade;
    protected $estado_civil;
    protected $bairro;
    protected $email;
    protected $telefone;
    protected $uf;
    protected $data_nascimento;
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

        function getNumero() {
        return $this->numero;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNome() {
        return $this->nome;
    }

    function getRg() {
        return $this->rg;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getCep() {
        return $this->cep;
    }

    function getCelular() {
        return $this->celular;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getUf() {
        return $this->uf;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }


}
