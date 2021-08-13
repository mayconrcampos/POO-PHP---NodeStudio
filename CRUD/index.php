<?php
    require_once "vendor/autoload.php";

    $produto = new \App\Model\Produto();
    $produto->setNome("Notebook Dell");
    $produto->setDescricao("Core i5 8GB RAM 500GB SSD");

    $insere = new \App\Model\ProdutoDao();
    $insere->insert($produto);

    //echo "ok";


?>


