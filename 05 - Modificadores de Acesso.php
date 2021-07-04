<?php

use Carro as GlobalCarro;

/**
 * Os modificadores de acesso são responsáveis por ocultar ou tornar públicos atributos e métodos de uma classe. Isto é possível dada a necessidade de se ocultar partes sensíveis do código que não podem ser manipulados de fora da classe, podendo assim gerar alguma vulnerabilidade no programa.
 * 
 * Tipos de visibilidade.
 * 
 * public - Fará com que não haja ocultação nenhuma, ou seja, toda propriedade ou método declarado com public serão acessíveis por todos que quiserem acessá-los.
 * 
 * protected - Fará com que somente os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.
 * 
 * private - Ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente pela classe que a declarou. (é o modificador mais restrito de todos.)
 * 
 * Ao ocultar os atributos, eles serão acessíveis somente através dos getters e setters.
 */

class Veiculo{
    private $modelo;
    private $cor;
    private $ano;

    public function setAttrs($mod, $cor, $ano){
        $this->modelo = $mod;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function getAttrs(){
        echo "Modelo: ".$this->modelo."\n";
        echo "Cor   : ".$this->cor."\n";
        echo "Ano   : ".$this->ano."\n";
    }
    
    public function Andar(){
        echo "Está andando.\n";
    }

    public function Parar(){
        echo "Parou!\n";
    }
}

class Carro extends Veiculo {
    // Na classe extendida, podemos especializar os atributos e métodos.
    public $num_portas;

    public function LigarLimpador(){
        echo $this->modelo." ligou o limpador de para-brisas.\n";
    }


}

class Moto extends Veiculo {
    
    public function Empinar(){
        echo $this->modelo." está empinando!\n";
    }

}

// Quando ocultamos os atributos de uma classe, ela só pode ser setada utilizando um método set, e do mesmo modo, podemos ver seus valores utilizando o método get.
$carro = new Veiculo();
$carro->setAttrs("Gol", "branco", "1990");
$carro->getAttrs();
var_dump($carro);

$carro2 = new Carro();
$carro2->setAttrs("Goleira", "Azul", "1995");
$carro2->getAttrs();
$carro2->num_portas = 2;
var_dump($carro2);