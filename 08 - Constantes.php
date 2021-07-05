<?php


/**
 * Vamos aprender sobre Constantes, Self e Parent.
 */

 class Pessoa {
     const nome = "Maycon";

     public function exibeNome(){
         echo self::nome;
     }
 }

 $pessoa = new Pessoa();
 $pessoa->exibeNome();

 class Maycon extends Pessoa {
     const nome = " Campos";

     public function exibeNome(){
        echo parent::nome; // Se eu quiser imprimir o nome Maycon da classe Pessoa, devo referenciar a constante da classe pai usando parent. Se eu quiser exibir o nome Campos da classe Maycon, utilizo self.
    }

 }

 $maycon = new Maycon();
 $maycon->exibeNome();

