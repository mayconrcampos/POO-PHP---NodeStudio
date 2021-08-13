<?php

namespace App\Model;

class ProdutoDao {

    public function insert(Produto $p){

        $sql = "INSERT INTO produtos (nome, descricao) VALUES (?, ?)";

        $stmt = \App\Model\Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();
    }
    
    public function select(){

    }

    public function update(Produto $p){

    }

    public function delete($id){

    }
}