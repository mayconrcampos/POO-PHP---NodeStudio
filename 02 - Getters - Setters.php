<?php

class Login {
    private $email;
    private $senha;

    public function getEmailSenha(){
        echo "Email: ".$this->email."\n";
        echo "Senha: ".$this->senha."\n";
    }

    public function setEmailSenha($e, $s){
        $this->email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->senha = $s;
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
    }
}

$logar = new Login();
$logar->setEmailSenha("teste@teste.com", "123456");

$logar->Logar();
$logar->ExibirUsuario();
