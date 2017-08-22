<?php

class SituacoesDAO extends DAO{
    protected $tabela = 'situacoes';
    protected $classe = 'Situacao';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET nome=:nome WHERE id = :id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':nome',$objeto->getNome());
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (nome) VALUES (:nome)";
       
        try {
           $inserir =  $this->con->prepare($sql);
            $inserir->bindValue(':nome',$objeto->getNome());
            
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
