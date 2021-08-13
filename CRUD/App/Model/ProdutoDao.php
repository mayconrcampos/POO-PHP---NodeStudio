<?php
namespace App\Model;
include_once("conexao.php");


class ProdutoDao {

    public function insert(Produto $p){

        $query = "INSERT INTO produtos (nome, descricao) VALUES (?, ?)";

        $stmt = \App\Model\Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());

        $stmt->execute();
    }

    
    public function select($id=null){

        if(!empty($id)){
            $query = "SELECT * FROM produtos WHERE id=?";

            $stmt = \App\Model\Conexao::getConn()->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();

        }else{
            $query = "SELECT * FROM produtos";

            $stmt = \App\Model\Conexao::getConn()->prepare($query);
            $stmt->execute();
        }
        
        

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }

    }


    public function update(Produto $p){

        $query = "UPDATE produtos SET nome=?, descricao=? WHERE id = ?";

        $stmt = \App\Model\Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getID());

        $stmt->execute();
    }
    

    public function delete($id){
        $query = "DELETE FROM produtos WHERE id=?";

        $stmt = \App\Model\Conexao::getConn()->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}