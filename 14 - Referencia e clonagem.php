<?php

// Referência e Clonagem de objetos

class Pessoa {
    public $idade;

    public function __clone(){
        echo "Este método mágico só é executado ao utilizar a palavra clone.\n";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// Clone retira a referência e torna pessoa2 independente de pessoa. Se remover o comando clone, a idade dos dois será 22.
$pessoa2 = clone $pessoa;
$pessoa2->idade = 22;

echo $pessoa2->idade;
echo $pessoa->idade;

