<?php

//namespace App\Model;
include_once("ProdutoDao.php");

$id = $_GET['id'];

$prod = new \App\Model\ProdutoDao();
$prod->delete($id);

//header("Location: index.php");