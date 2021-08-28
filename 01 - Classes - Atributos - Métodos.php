<?php

class Pessoa {
    var $nome;
    var $idade;
    var $altura;

    function __construct($nome, $idade, $altura){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
    }

    function Falar() {
        echo "Nome: ".$this->nome." Idade: ".$this->idade." Altura: ".$this->altura."\n";
    }

    function __destruct(){
        echo "Objeto {$this->nome} finalizado...\n";
    }
}

$pessoa = new Pessoa("Maycon R. Campos", 39, 1.70);
$pessoa->Falar();
