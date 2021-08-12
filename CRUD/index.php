<?php
    require_once "vendor/autoload.php";

    $produto = new \App\Model\Produto();
    $produto->setNome("Notebook Dell");
    $produto->setDescricao("Core i5 8GB RAM 500GB SSD");


    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->insert($produto);

    //echo "ok";


?>


