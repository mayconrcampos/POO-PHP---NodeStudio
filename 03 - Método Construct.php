<?php

// É inicializado automaticamente quando estanciamos a classe.
// O método construtor possibilita que possamos setar os atributos da classe no ato da instanciação.

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->setEmailSenhaNome($email, $senha, $nome);
    }

    public function setEmailSenhaNome($e, $s, $n){
        $this->email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->senha = $s;
        $this->nome = $n;
    }

    public function getEmailSenhaNome(){
        echo "Email: ".$this->email."\n";
        echo "Senha: ".$this->senha."\n";
        echo "Nome : ".$this->nome."\n";
    }

    public function Logar(){
        if(empty($this->email) and empty($this->senha)){
            echo "Email e Senha não setados.";
        }else{
            if($this->email == "teste@teste.com" and $this->senha == "123456"){
                echo "Logado com Sucesso\n";
            }else{
                echo "Login ou senha inválidos\n";
            }
        }        
    }

    public function ExibirUsuario(){
        echo "Usuário: ".$this->email."\n";
        echo "Senha  : ".$this->senha."\n";
        echo "---------------------------\n";
        echo "Nome do Usuário: ".$this->nome."\n";
    }
}

$logar = new Login("teste@teste.com", "123456", "Maycon R Campos");
$logar2 = new Login("maycon@gmail.com", "otasenha", "Usuario de teste");

$logar->ExibirUsuario();
$logar->Logar();

$logar2->ExibirUsuario();
$logar2->Logar();