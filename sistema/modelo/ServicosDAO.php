<?php

class ServicosDAO extends DAO{
    protected $tabela = 'servicos';
    protected $classe = 'Servico';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET nome_servico=:nome_servico, descricao=:descricao, valor_servico=:valor_servico WHERE id = :id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':nome_servico',$objeto->getNome_servico());
            $editar->bindValue(':descricao',$objeto->getDescricao());
            $editar->bindValue(':valor_servico',$objeto->getValor_servico());
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (nome_servico,descricao,valor_servico) VALUES (:nome_servico,:descricao,:valor_servico)";
       
        try {
           $inserir =  $this->con->prepare($sql);
             $inserir->bindValue(':nome_servico',$objeto->getNome_servico());
            $inserir->bindValue(':descricao',$objeto->getDescricao());
            $inserir->bindValue(':valor_servico',$objeto->getValor_servico());
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
