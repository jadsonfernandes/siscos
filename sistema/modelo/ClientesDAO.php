<?php

class ClientesDAO extends DAO{
    protected $tabela = 'clientes';
    protected $classe = 'Cliente';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET numero=:numero, cpf=:cpf, endereco=:endereco, nome=:nome, rg=:rg, sexo=:sexo, complemento=:complemento, cep=:cep, celular=:celular, cidade=:cidade, estado_civil=:estado_civil, bairro=:bairro, email=:email, telefone=:telefone, uf=:uf, data_nascimento=:data_nascimento WHERE id = :id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':numero',$objeto->getNumero());
            $editar->bindValue(':cpf',$objeto->getCpf());
            $editar->bindValue(':endereco',$objeto->getEndereco());
            $editar->bindValue(':nome',$objeto->getNome());
            $editar->bindValue(':rg',$objeto->getRg());
            $editar->bindValue(':sexo',$objeto->getSexo());
            $editar->bindValue(':complemento',$objeto->getComplemento());
            $editar->bindValue(':cep',$objeto->getCep());
            $editar->bindValue(':celular',$objeto->getCelular());
            $editar->bindValue(':cidade',$objeto->getCidade());
            $editar->bindValue(':estado_civil',$objeto->getEstado_civil());
            $editar->bindValue(':bairro',$objeto->getBairro());
            $editar->bindValue(':email',$objeto->getEmail());
            $editar->bindValue(':telefone',$objeto->getTelefone());
            $editar->bindValue(':uf',$objeto->getUf());
            $editar->bindValue(':data_nascimento',$objeto->getData_nascimento());
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (numero,cpf,endereco,nome,rg,sexo,complemento,cep,celular,cidade,estado_civil,bairro,email,telefone,uf,data_nascimento) VALUES (:numero,:cpf,:endereco,:nome,:rg,:sexo,:complemento,:cep,:celular,:cidade,:estado_civil,:bairro,:email,:telefone,:uf,:data_nascimento)";
       
        try {
           $inserir =  $this->con->prepare($sql);
            $inserir->bindValue(':numero',$objeto->getNumero());
            $inserir->bindValue(':cpf',$objeto->getCpf());
            $inserir->bindValue(':endereco',$objeto->getEndereco());
            $inserir->bindValue(':nome',$objeto->getNome());
            $inserir->bindValue(':rg',$objeto->getRg());
            $inserir->bindValue(':sexo',$objeto->getSexo());
            $inserir->bindValue(':complemento',$objeto->getComplemento());
            $inserir->bindValue(':cep',$objeto->getCep());
            $inserir->bindValue(':celular',$objeto->getCelular());
            $inserir->bindValue(':cidade',$objeto->getCidade());
            $inserir->bindValue(':estado_civil',$objeto->getEstado_civil());
            $inserir->bindValue(':bairro',$objeto->getBairro());
            $inserir->bindValue(':email',$objeto->getEmail());
            $inserir->bindValue(':telefone',$objeto->getTelefone());
            $inserir->bindValue(':uf',$objeto->getUf());
            $inserir->bindValue(':data_nascimento',$objeto->getData_nascimento());
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
