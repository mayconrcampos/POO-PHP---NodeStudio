<?php

/**
 * Clone *
 * __construct *
 * invoke
 * tostring
 * get
 * set
 */

 class Pessoa {
     private $dados = array(); // Agora com um array, podemos criar novos atributos de forma dinâmica.

    // Função set permite com que eu possa criar novos atributos e atribuir valores a eles de forma dinâmica.
     public function __set($nome, $value){
         $this->dados[$nome] = $value;
     }

     // Função get permite com que eu possa recuperar o valor de um atributo diretamente mesmo ele estando privado.
     // Como se eu tivesse acesso publico.
     public function __get($nome){
         return $this->dados[$nome];
     }

     // Método mágico tostring permite que eu possa dar um echo no objeto.
     public function __toString(){
        return "Nome      : ".$this->nome."\n"
                ."Idade     : ".$this->idade."\n"
                ."Altura    : ".$this->altura."\n"
                ."Sexo      : ".$this->sexo."\n";
     }

     // Invoke é chamado quando tentamos usar o objeto como função
     public function __invoke($nome){
         if($nome == "Ariana"){
             return "Essa é a mulher mais deliciosa de toda a galáxia.\n";
         }else{
             return "Foda-se\n";
         }
     }

 }

 // Percebam que usando os métodos mágicos __get __set , eu consigo acessar o atributo diretamente pelo objeto instanciado mesmo com atributo privado na classe.
 $pessoa = new Pessoa();
 $pessoa->nome = "Maycon";

 $pessoa->idade = 38;
 $pessoa->altura = 1.70;
 $pessoa->sexo = "M";

echo $pessoa("Ariana"); // Objeto se comportando como função
echo $pessoa("Otamolier"); // Objeto se comportando como função através do invoke

 echo $pessoa;

