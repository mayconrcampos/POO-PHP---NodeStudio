<?php

//$conta = 0;
//
//while($conta < 11){
//    echo $conta."\n";
//    $conta++;
//}
//
//for($i = 1; $i <= 10; $i++){
//    echo "Tabuada de ".$i."\n";
//    for($j = 1; $j <= 10; $j++){
//        echo $i." x ".$j." = ".$i * $j."\n";
//    }
//}

//$nome = readline("Digite seu nomezinho: ");
//$idade = readline("Digite sua idade: ");
//
//echo "Olá ".$nome."\n";
//
//if($idade < 18){
//    echo "Você é de menor!\n";
//}else{
//    echo "Você é de maior!\n";
//}

$a = 5;
$b = $a;
$b = 10;
echo $a;
echo $b;

echo gettype($b);
define("VEL_MAXIMA", 110);
echo VEL_MAXIMA;

if($c = 60){
    $c++;
    echo "\nC agora vale ".$c;
}

$a = 10;
$b = "10";

if($a == $b){
    echo "\nSão iguais!\n";
    print gettype($a). " " . gettype($b);
}else{
    print "\nSão diferentes!";
}

function percorre($km){
    static $total;
    $total += $km;
    echo "Percorreu mais $km km do total de $total km\n";
}

percorre(100);
percorre(500);
percorre(150);

function Ola(){
    $argumentos = func_get_args();
    $quantidade = func_num_args();

    for($n=0; $n < $quantidade; $n++){
        echo "Olá!! ".$argumentos[$n]."\n";
    }
}

Ola("Maycon", "Ariana", "Otavio");

$fp = fopen("README.MD", "r");
while(!feof($fp)){
    $buffer = fgets($fp, 4096);

    echo $buffer;
}
fclose($fp);

$arquivo = file("README.MD");

foreach($arquivo as $linha){
    echo "\n".$linha."\n";
}

echo getcwd();

$diretorio = "/";

if(is_dir($diretorio)){
    $ident = opendir($diretorio);
    echo "\n Listando pasta Raiz\n";
    while($arquivo = readdir($ident)){
        echo $arquivo."\n";
    }
    closedir($ident);
}

$texto = <<<CHAVE
Aqui neste área eu posso
escrever uma string gigantesca
com milhares de linhas
bem massa!\n
CHAVE;

echo $texto;


$fruta = "Maçã";

echo $fruta.' é a fruta de Adão';
echo "\n$fruta é a fruta de Adão\n";

print str_pad("Preço (R$)", 20, "*", STR_PAD_RIGHT);

echo str_repeat($fruta, 10);
