<?php

class UsuariosDAO extends DAO{
    protected $tabela = 'usuarios';
    protected $classe = 'Usuario';
    protected function editar(Ientidade &$objeto) {
        $sql = "UPDATE {$this->tabela} SET nome=:nome,cpf=:cpf,estado_civil=:estado_civil,endereco=:endereco,data_nascimento=:data_nascimento,email=:email,telefone=:telefone,senha=:senha,login=:login,complemento=:complemento,cep=:cep,celular=:celular,bairro=:bairro,rg=:rg,sexo=:sexo,uf=:uf,cidade=:cidade,numero=:numero,perfil=:perfil WHERE id = :id";
        try {
            $editar =  $this->con->prepare($sql);
            $editar->bindValue(':nome',$objeto->getNome());
            $editar->bindValue(':cpf',$objeto->getCpf());
            $editar->bindValue(':estado_civil',$objeto->getEstado_civil());
            $editar->bindValue(':endereco',$objeto->getEndereco());
            $editar->bindValue(':data_nascimento',$objeto->getData_nascimento());
            $editar->bindValue(':email',$objeto->getEmail());
            $editar->bindValue(':telefone',$objeto->getTelefone());
            $editar->bindValue(':senha',$objeto->getSenha());
            $editar->bindValue(':login',$objeto->getLogin());
            $editar->bindValue(':complemento',$objeto->getComplemento());
            $editar->bindValue(':cep',$objeto->getCep());
            $editar->bindValue(':celular',$objeto->getCelular());
            $editar->bindValue(':bairro',$objeto->getBairro());
            $editar->bindValue(':rg',$objeto->getRg());
            $editar->bindValue(':sexo',$objeto->getSexo());
            $editar->bindValue(':uf',$objeto->getUf());
            $editar->bindValue(':cidade',$objeto->getCidade());
            $editar->bindValue(':numero',$objeto->getNumero());
            $editar->bindValue(':perfil',$objeto->getPerfil());
            
            $editar->bindValue(':id',$objeto->getId());
            $editar->execute();
            return true;
            
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

    protected function inserir(Ientidade &$objeto) {
        $sql = "INSERT INTO {$this->tabela} (nome,cpf,estado_civil,endereco,data_nascimento,email,telefone,senha,login,complemento,cep,celular,bairro,rg,sexo,uf,cidade,numero,perfil) VALUES (:nome,:cpf,:estado_civil,:endereco,:data_nascimento,:email,:telefone,:senha,:login,:complemento,:cep,:celular,:bairro,:rg,:sexo,:uf,:cidade,:numero,:perfil)";
       
        try {
           $inserir =  $this->con->prepare($sql);
            $inserir->bindValue(':nome',$objeto->getNome());
            $inserir->bindValue(':cpf',$objeto->getCpf());
            $inserir->bindValue(':estado_civil',$objeto->getEstado_civil());
            $inserir->bindValue(':endereco',$objeto->getEndereco());
            $inserir->bindValue(':data_nascimento',$objeto->getData_nascimento());
           $inserir->bindValue(':email',$objeto->getEmail());
           $inserir->bindValue(':telefone',$objeto->getTelefone());
            $inserir->bindValue(':senha',$objeto->getSenha());
            $inserir->bindValue(':login',$objeto->getLogin());
            $inserir->bindValue(':complemento',$objeto->getComplemento());
            $inserir->bindValue(':cep',$objeto->getCep());
            $inserir->bindValue(':celular',$objeto->getCelular());
            $inserir->bindValue(':bairro',$objeto->getBairro());
            $inserir->bindValue(':rg',$objeto->getRg());
            $inserir->bindValue(':sexo',$objeto->getSexo());
            $inserir->bindValue(':uf',$objeto->getUf());
            $inserir->bindValue(':cidade',$objeto->getCidade());
            $inserir->bindValue(':numero',$objeto->getNumero());
            $inserir->bindValue(':perfil',$objeto->getPerfil());
            $inserir->execute();
            // Coloco o ultimo id inserido no banco como ID do meu objeto.
            $objeto->setId($this->con->lastInsertId());
            return true;
        } catch (\PDOException $ex) {
            echo "<p>Erro: {$ex->getMessage()}</p>";
        }
    }

}
