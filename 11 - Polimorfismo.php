<?php

class Animal {
    public function Andar(){
        echo "O animal está andando.\n";
    }
}

// O que seria o polimorfismo? Seria reescrever o método herdado de animal, dentro da classe herdeira. Fazer uma especialização deste método para se adaptar à classe herdeira.
class Cavalo extends Animal{
    public function Andar(){
        echo "O animal está galopando.\n";
    }
}



$animal = new Animal();
$animal->Andar();

$cavalo = new Cavalo();
$cavalo->Andar();

// Polimorfismo é nada mais nada menos que, reescrever um método que foi herdado da classe mãe.