<?php

use Login as GlobalLogin;

class Login {
    public static $usuario;

    public static function verificaLogin(){
        echo "O usuário ".self::$usuario." está logado!\n";
    }

    public function sairSistema(){
        echo "Usuário ".self::$usuario." saiu do sistema.\n";
    }
}

// Quando criamos atributos e métodos estáticos, não precisamos instanciar essa classe, mas apenas chamamos seus métodos através da seguinte notação.

Login::$usuario = "admin";
Login::verificaLogin();

// this não funciona com membros estáticos, pois ele só funciona quando instanciamos uma classe.
// Logo, a notação correta é utilizar o self::$atributo . 


// Podemos utilizar métodos não estáticos, no entanto para utilizá-los será preciso instanciar um objeto desta classe.

$minhaClasse = new Login();
$minhaClasse->sairSistema();