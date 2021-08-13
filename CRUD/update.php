<?php

    require_once "vendor/autoload.php";


    $id = $_GET['id'];
    $linha = new \App\Model\ProdutoDao();
    foreach($linha->select($id) as $linha){
        $nome = $linha['nome'];
        $descricao = $linha['descricao'];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <h1>Atualizando Produtos</h1>

    <form action="" method="post">
        <label for="">Nome Produto</label>
        <input type="text" name="nome" value="<?php echo $nome ?>">

        <label for="">Descrição</label>
        <input type="text" name="descricao" value="<?php echo $descricao ?>">

        <input type="submit" value="Inserir">
    </form>

    <?php 
     
        $nome1 = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $descricao1 = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);

        if(!empty($nome1) and !empty($descricao1)){
            $produto = new \App\Model\Produto();
            $produto->setID($id);
            $produto->setNome($nome1);
            $produto->setDescricao($descricao1);
            
            $insere = new \App\Model\ProdutoDao();
            $insere->update($produto);

            header("Location: index.php");
        }else{
            echo "Preencha os dois campos.";
        }
    ?>

    <a href="index.php">Principal</a>

    
</body>
</html>