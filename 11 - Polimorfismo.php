<?php

class Animal {
    public function Andar(){
        echo "O animal está andando.\n";
    }
}

class Cavalo extends Animal{
    public function Andar(){
        echo "O animal está galopando.\n";
    }
    public function relinxar(){
        echo "O cavalo está relinxando.\n";
    }
}



$animal = new Animal();
$animal->Andar();

$cavalo = new Cavalo();
$cavalo->Andar();
$cavalo->relinxar();

// Polimorfismo é nada mais nada menos que, reescrever um método que foi herdado da classe mãe.