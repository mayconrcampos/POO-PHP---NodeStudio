<?php
    require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere com PDO e POO</title>
</head>
<body>
    <h1>Inserindo Produtos</h1>

    <form action="" method="post">
        <label for="">Nome Produto</label>
        <input type="text" name="nome">

        <label for="">Descrição</label>
        <input type="text" name="descricao">

        <input type="submit" value="Inserir">
    </form>

    <?php
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);

        if(!empty($nome) and !empty($descricao)){
            $produto = new \App\Model\Produto();
            $produto->setNome($nome);
            $produto->setDescricao($descricao);
            
            $insere = new \App\Model\ProdutoDao();
            $insere->insert($produto);


        }else{
            echo "É preciso preencher os dois campos.";
        }
        ?>

    <table border="1px">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>DEL</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $mostra = new \App\Model\ProdutoDao();
                $mostra->select();

            foreach($mostra->select() as $linha) {?>
            <tr>
                <td><a href="update.php?id=<?php echo $linha['id'] ?>"><?php echo $linha['id'] ?></a></td>
                <td><?php echo $linha['nome'] ?></td>
                <td><?php echo $linha['descricao'] ?></td>
                <td><a href="index.php?ide=<?php echo $linha['id'] ?>">DELETE</a></td>
            </tr>
    <?php   } ?>
        </tbody>
        
    </table>

    <?php
        if(!empty($_GET['ide'])){
            $mostra->delete($_GET['ide']);
            header("Refresh: 0;index.php");
        }
    ?>

    <a href="update.php">Atualizar</a>
    
</body>
</html>
