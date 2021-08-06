<?php

// Composição - É quando uma classe cria uma instância de outra classe dentro de si mesma, sendo assim, quando ela for destruída, a outra classe também será. 


// Na agregação, foram instanciados os produtos, fora da classe carrinho.. Na composição elas serão instanciadas dentro.
/*
class Produtos {
    public $nome;
    public $valor;


    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos = array();


    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        echo "----- Carrinho de Compras ----\n";
        foreach($this->produtos as $produto){
            echo "Prod:     ".$produto->nome."\n";
            echo "(R$):     ".number_format($produto->valor, 2, ".", ",")."\n";
            echo "------------------------------\n";
        }
    }
}*/

class Pessoa {
    public function atribuirNome($nome){
        return "O nome da pessoa é ".$nome.".\n";
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    
    public function exibeNome(){
        echo $this->pessoa->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("Maycon R. Campos");
$exibe1 = new Exibe("Ariana Campos");
$exibe2 = new Exibe("Otavio Izcak");
$exibe3 = new Exibe("Benjamin Campos");

$exibe->exibeNome();
$exibe1->exibeNome();
$exibe2->exibeNome();
$exibe3->exibeNome();
