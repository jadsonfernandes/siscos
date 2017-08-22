<?php


class Usuario implements Ientidade{
    protected $id;
    protected $nome;
    protected $cpf;
    protected $estado_civil;
    protected $endereco;
    protected $data_nascimento;
    protected $email;
    protected $telefone;
    protected $senha;
    protected $login;
    protected $complemento;
    protected $cep;
    protected $celular;
    protected $bairro;
    protected $rg;
    protected $sexo;
    protected $uf;
    protected $cidade;
    protected $numero;
    protected $perfil;
    protected $logado = false;
    
    
    public function getLogado() {
        return $this->logado;
    }

        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function getLogin() {
        return $this->login;
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

    function getBairro() {
        return $this->bairro;
    }

    function getRg() {
        return $this->rg;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getUf() {
        return $this->uf;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getNumero() {
        return $this->numero;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenha($senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    function setLogin($login) {
        $this->login = $login;
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

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    public function login($senha){
        
        if(password_verify($senha,$this->senha)){
            $this->logado = true;
            $_SESSION['usuariologado'] = $this;
            return true;
            
        }else{
            return false;
        }
        
    }

}
