<?php

class Ordem_servicosDAO extends DAO{
    protected $tabela = 'ordem_servicos';
    protected $classe = 'Ordem_servico';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET valor_total:=valor_total,data_os=:data_os, equipamento=:equipamento, defeito=:defeito, id_cliente=:id_cliente, id_usuario=:id_usuario, id_produto=:id_produto, id_situacao=:id_situacao, id_servico=:id_servico,  WHERE id=:id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':valor_total',$objeto->getValor_total());
            $editar->bindValue(':data_os',$objeto->getData_os());
            $editar->bindValue(':equipamento',$objeto->getEquipamento());
            $editar->bindValue(':defeito',$objeto->getDefeito());
            $editar->bindValue(':id_cliente',$objeto->getId_cliente());
            $editarr->bindValue(':id_usuario',$objeto->getId_usuario());
            $editar->bindValue(':id_produto',$objeto->getId_produto());
            $editar->bindValue(':id_situacao',$objeto->getId_situacao());
            $editar->bindValue(':id_servico',$objeto->getId_servico());
           
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (valor_total,data_os,equipamento,defeito,id_cliente,id_usuario,id_produto,id_situacao,id_servico) VALUES (:valor_total,:data_os,:equipamento,:defeito,:id_cliente,:id_usuario,:id_produto,:id_situacao,:id_servico)";
       
        try {
           $inserir =  $this->con->prepare($sql);
            $inserir->bindValue(':valor_total',$objeto->getValor_total());
            $inserir->bindValue(':data_os',$objeto->getData_os());
            $inserir->bindValue(':equipamento',$objeto->getEquipamento());
            $inserir->bindValue(':defeito',$objeto->getDefeito());
            $inserir->bindValue(':id_cliente',$objeto->getId_cliente());
            $inserir->bindValue(':id_usuario',$objeto->getId_usuario());
            $inserir->bindValue(':id_produto',$objeto->getId_produto());
            $inserir->bindValue(':id_situacao',$objeto->getId_situacao());
            $inserir->bindValue(':id_servico',$objeto->getId_servico());
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
