<?php
// Este CRUD será realizado com o padrão Singleton, para que seja utilizada apenas uma instância da conexao, deixando-a mais rápida.

namespace App\Model;

use PDOException;

class Conexao {

    private static $instance;


    public static function getConn() {
        // Método que verifica se há uma instância da conexão. Se existir ele retorna a instância. $this->instance;

        try{
            if(!isset(self::$instance)){
                self::$instance = new \PDO("mysql:dbname=pdo;host=localhost", "root", "5DaJ10.,Xw,8");
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;
        

        }catch(PDOException $e){
            echo "ERRO: ".$e->getMessage();
        }
        
    }
        
    
}