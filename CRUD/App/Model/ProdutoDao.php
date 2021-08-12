<?php

namespace App\Model;

class ProdutoDao {

    public function insert(Produto $produto){

        $sql = "INSERT INTO produtos (nome, descricao) VALUES (?, ?)";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getDescricao());

        $stmt->execute();
    }

    public function read(){

    }

    public function update(Produto $produto){

    }

    public function delete($id){

    }
}