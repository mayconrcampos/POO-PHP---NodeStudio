<?php

// Vamos estudar sobre tratamento de exceções

// Exceção é uma ocorrência anormal que afeta o funcionamento da aplicação
// Exception é a classe base para todas as exceptions.
// message, code, file, line

class NewsLetter{

    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este email é inválido!", 100);

        }else{
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newsletter = new NewsLetter();

try {
    $newsletter->cadastrarEmail("maycon@@gmail.com");


}catch(Exception $e) {
    echo "ERRO Código               ". $e->getCode()."\n";
    echo "ERRO Mensagem             ". $e->getMessage()."\n";
    echo "ERRO Linha                ". $e->getLine()."\n";
    echo "ERRO Arquivo              ". $e->getFile()."\n";
}

// Desta forma, temos informações suficientes para quando ocorrer o erro, a aplicação não pare de rodar e também possamos capturar as mensagens de erro para corrigir o código.