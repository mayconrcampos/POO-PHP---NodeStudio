<?php

// Associação - Acontece quando um objeto utiliza outro, porém, sem que eles dependam um do outro.

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Maycon";
$cliente->endereco = "Rua da Tainha";

$pedido = new Pedido();
$pedido->numero = 1;
$pedido->cliente = $cliente;


$dados = array(
    "numero" => $pedido->numero,
    "nome_cliente" => $pedido->cliente->nome,
    "Endereço" => $pedido->cliente->endereco
);

var_dump($dados);



