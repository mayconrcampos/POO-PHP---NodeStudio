<?php

class Funcionario {
    private $Codigo;
    public $nome;
    private $nascimento;
    protected $salario;

    // método SetSalario

    public function setSalario($salario){
        if($salario > 0 && is_numeric($salario)){
            $this->salario = $salario;
        }
    }

    public function getSalario(){
        return $this->salario;
    }
}

class Estagiario extends Funcionario{

    public function getSalario(){
        return $this->salario * 1.12;
    }
}

$maycon = new Funcionario();
$maycon->setSalario(1390.00);
echo $maycon->getSalario();

$fulano = new Estagiario();
$fulano->setSalario(1390.00);
$fulano->nome = "Fulaninho da Silva";
echo "\n".$fulano->getSalario()." Nome: ".$fulano->nome;

