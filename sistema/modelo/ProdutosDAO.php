<?php

class ProdutosDAO extends DAO{
    protected $tabela = 'produtos';
    protected $classe = 'Produto';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET nome=:nome,valor_unidade=:valor_unidade,estoque=:estoque,estoque_minimo=:estoque_minimo,foto=:foto WHERE id = :id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':nome',$objeto->getNome());
            $editar->bindValue(':valor_unidade',$objeto->getValor_unidade());
            $editar->bindValue(':estoque',$objeto->getEstoque());
            $editar->bindValue(':estoque_minimo',$objeto->getEstoque_minimo());
            $editar->bindValue(':foto',$objeto->getFoto());
           
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (nome,valor_unidade,estoque,estoque_minimo,foto) VALUES (:nome,:valor_unidade,:estoque,:estoque_minimo,:foto)";
       
        try {
           $inserir =  $this->con->prepare($sql);
            $inserir->bindValue(':nome',$objeto->getNome());
            $inserir->bindValue(':valor_unidade',$objeto->getValor_unidade());
            $inserir->bindValue(':estoque',$objeto->getEstoque());
            $inserir->bindValue(':estoque_minimo',$objeto->getEstoque_minimo());
            $inserir->bindValue(':foto',$objeto->getFoto());
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
