<?php

/**
 * Dos três modificadores.
 * 
 * Podemos usar os modificadores de acesso também nos métodos da classe.
 * 
 * Private a gente só consegue acessar o método dentro do escopo da própria classe.. Ou seja, conseguiremos usá-la se outro método chamá-la de dentro da classe. 
 * 
 * Private não se estende para classes filhas, ou seja, classes filhas não conseguem utilizar os métodos private da classe mãe.
 * 
 * Para que possamos acessar métodos da classe mãe através das classes filhas, ou usamos métodos públic ou protected.
 * 
 */

class Pessoa{
    private $nome;
    private $idade;

    public function __construct($nome, $idade){
       $this->setNomeIdade($nome, $idade);
    }

    public function setNomeIdade($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    private function getNomeIdade(){
        return "Nome: ".$this->nome." Idade: ".$this->idade."\n";
    }

    public function falarNome(){
        echo $this->getNomeIdade();
    }
}

$maycon = new Pessoa("Maycon", 38);
$maycon->falarNome();