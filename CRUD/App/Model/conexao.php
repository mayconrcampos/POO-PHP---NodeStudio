<?php
// Este CRUD será realizado com o padrão Singleton, para que seja utilizada apenas uma instância da conexao, deixando-a mais rápida.

namespace App\Model;

use Exception;

class Conexao {
    private static $instance;

    public static function getConn() {
        // Método que verifica se há uma instância da conexão. Se existir ele retorna a instância. $this->instance;
        try{
            self::$instance = new \PDO("mysql:host=localhost;port=3306;dbname=pdo;charset=utf8", "root", "5DaJ10.,Xw,8");
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            
            return self::$instance;
        
        }catch (Exception $erro){
            echo "Ocorreu o seguinte erro: ".$erro->getMessage();
        }
    }        
}
