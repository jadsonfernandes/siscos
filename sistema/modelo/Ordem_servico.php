<?php


class Ordem_servico implements Ientidade{
    protected $id;
    protected $valor_total;
    protected $data_os;
    protected $equipamento;
    protected $defeito;
    protected $id_cliente;
    protected $id_situacao;
    protected $id_produto;
    protected $id_usuario;
    protected $id_servico;
    
    function getId() {
        return $this->id;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getData_os() {
        return $this->data_os;
    }

    function getEquipamento() {
        return $this->equipamento;
    }

    function getDefeito() {
        return $this->defeito;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }

    function setData_os($data_os) {
        $this->data_os = $data_os;
    }

    function setEquipamento($equipamento) {
        $this->equipamento = $equipamento;
    }

    function setDefeito($defeito) {
        $this->defeito = $defeito;
    }

    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function getId_situacao() {
        return $this->id_situacao;
    }

    public function getId_produto() {
        return $this->id_produto;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function getId_servico() {
        return $this->id_servico;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function setId_situacao($id_situacao) {
        $this->id_situacao = $id_situacao;
    }

    public function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setId_servico($id_servico) {
        $this->id_servico = $id_servico;
    }




}
