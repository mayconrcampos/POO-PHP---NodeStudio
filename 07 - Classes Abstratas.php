<?php 
/**
 *   Vamos ver sobre classes Abstratas.
 */
 // Classes abstratas não podem ser instanciadas.
 // Elas só servem para fornecer uma abstração de uma classe genérica de alguma entidade, e classes mais específicas vão herdar dela as caractrerísticas principais, porém os métodos todos serão implementados dentro das classes herdeiras.

 abstract class Banco {
    protected $nome_cliente;
    protected $contaCorrente;
    protected $saldo;
    protected $limite;
     
    abstract protected function __construct($nome_cliente, $contaCorrente, $saldo, $limite);
    abstract protected function setAttrs($nome_cliente, $contaCorrente, $saldo, $limite);
 }

 class BancoInter extends Banco{
    public function __construct($nome_cliente, $contaCorrente, $saldo, $limite){
        $this->setAttrs($nome_cliente, $contaCorrente, $saldo, $limite);
     }
 
     protected function setAttrs($nome_cliente, $contaCorrente, $saldo, $limite) {
         $this->nome_cliente = $nome_cliente;
         $this->contaCorrente = $contaCorrente;
         $this->saldo = $saldo;
         $this->limite = $limite;
     }

    protected function getAttrs(){
        echo "-----------------------------------------\n";
        echo "Nome Cliente : ".$this->nome_cliente."\n";
        echo "Conta Nº     : ".$this->contaCorrente."\n";
        echo "Saldo (R$)   : ".number_format($this->saldo, 2, ".", ",")."\n";
        echo "Limite (R$)  : ".number_format($this->limite, 2, ".", ",")."\n";
        echo "-----------------------------------------\n";
    }

    public function depositar($valor){
        $valor = filter_var($valor, FILTER_SANITIZE_NUMBER_FLOAT);
        $this->saldo += $valor;
        echo "Depósito de R$: ".number_format($valor, 2, ".", ",")."\n";
        $this->getAttrs();
    }

    public function sacar($valor){
        $limite = (0 - $this->limite);
        $this->saldo -= $valor;
        if($this->saldo >= $limite){
            echo "Saque de R$: ".number_format($valor, 2, ".", ",")."\n";
            $this->getAttrs();
        }else{
            $this->saldo += $valor;
            echo "Não foi possível sacar o valor de R$: ".number_format($valor, 2, ".", ",")."\n";
            echo "Saldo insuficiente.\n";
        }
    }

    public function mostrarConta(){
        $this->getAttrs();
    }
 }


$conta = new BancoInter("Maycon R Campos", "1023255-9", 4000, 1000);

$conta->mostrarConta();
$conta->depositar(1500);
$conta->sacar(8000);
$conta->depositar(15000);

$conta2 = new BancoInter("Ariana D Campos", "11233212-5", 2500, 1000);
$conta2->depositar(500);
$conta2->sacar(3000);

