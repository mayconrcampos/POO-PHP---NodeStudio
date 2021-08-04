<?php

class Conta {
    private $banco;
    private $nomeCliente;
    private $ag;
    private $cc;
    private $saldo = 0;
    private $limite;

    public function __construct($banco, $nomeCliente, $ag, $cc, $limite){
        $this->setConta($banco, $nomeCliente, $ag, $cc, $limite);
    }

    public function setConta($banco, $nomeCliente, $ag, $cc, $limite){
        $this->banco = $banco;
        $this->nomeCliente = $nomeCliente;
        $this->ag = $ag;
        $this->cc = $cc;
        $this->limite = $limite;

        $this->mostraConta();
    }

    private function mostraConta(){
        echo "--- Conta Corrente ---\n";
        echo "Banco     : ".$this->banco."\n";
        echo "Cliente   : ".$this->nomeCliente."\n";
        echo "AG        : ".$this->ag."\n";
        echo "C/C       : ".$this->cc."\n";
        echo "------------------------------\n";
        echo "Saldo (R$): ".number_format($this->saldo, 2, ",", ".")."\n";
        echo "Limite(R$): ".number_format($this->limite, 2, ",", ".")."\n\n";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito (R$) : ".number_format($valor, 2, ",", ".")."\n\n";

        $this->mostraConta();
    }

    public function sacar($valor){
        $meuLimite = -$this->limite;
        if($this->saldo > $meuLimite){
            $this->saldo -= $valor;
            echo "Saque (R$)  : ".number_format($valor, 2, ",", ".")."\n\n";
        }else{
            echo "Saldo Insuficiente.\n\n";
        }
        $this->mostraConta();
    }
}

$minhaConta = new Conta("INTER SA", "Maycon R Campos", "0001-9", "1023255-9", 500);
$minhaConta->depositar(1000);
$minhaConta->depositar(1500);
$minhaConta->sacar(400);
$minhaConta->sacar(2200);
$minhaConta->sacar(400);
$minhaConta->sacar(1);
$minhaConta->depositar(7850);
