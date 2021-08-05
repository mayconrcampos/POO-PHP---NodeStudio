<?php

require "classes/produto.php";
require "models/produto.php";

// A melhor forma de usar namespaces é conforme abaixo.
// com o comando use e criando um apelido para a classe.
// Só alegria

use models\Produto as ProdutoModel;
use classes\Produto as ProdutoClasses;

$produto = new ProdutoClasses();
$produto->mostrarDetalhes();



$produto1 = new ProdutoModel();
$produto1->mostrarDetalhes();



