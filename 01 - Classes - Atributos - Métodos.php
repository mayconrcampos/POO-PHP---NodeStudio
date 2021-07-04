<?php

class Pessoa {
    public $nome;
    public $idade;
    public $altura;

    public function Falar() {
        echo "Nome: ".$this->nome." Idade: ".$this->idade." Altura: ".$this->altura."\n";
    }

    
}

$pessoa = new Pessoa();

$pessoa->nome = "Maycon";
$pessoa->idade = 38;
$pessoa->altura = 1.70;

$pessoa->Falar();
