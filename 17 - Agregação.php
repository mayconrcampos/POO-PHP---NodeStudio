<?php

// Agregação é quando na relação entre dois objetos, uma classe precisa da outra para existir.

use function PHPSTORM_META\type;

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
}

$leite = new Produtos("Leite 1L", 3.50);
$pao = new Produtos("Pão Francês", 8.90);
$salame = new Produtos("Salame", 19);
$queijo = new Produtos("Queijo", 4.99);
$requeijao = new Produtos("Requeijao", 6.9);

$cesta = new Carrinho();
$cesta->adiciona($leite);
$cesta->adiciona($pao);
$cesta->adiciona($salame);
$cesta->adiciona($queijo);
$cesta->adiciona($requeijao);
$cesta->exibe();

