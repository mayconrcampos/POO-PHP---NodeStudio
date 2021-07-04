<?php

// Herança é um recurso que permite que classes compartilhem atributos e métodos a fim de reaproveitar códigos ou comportamentos generalizados.

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    
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

$carro = new Carro();
$carro->modelo = "gol";
$carro->cor = "Prata";
$carro->ano = "1995";
$carro->num_portas = 2;
$carro->Andar();
$carro->LigarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "CG 125cc";
$moto->cor = "azul";
$moto->ano = "2018";
$moto->Andar();
$moto->Empinar();
$moto->Parar();
var_dump($moto);


