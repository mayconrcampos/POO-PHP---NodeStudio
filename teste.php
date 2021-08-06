<?php

$conta = 0;

while($conta < 11){
    echo $conta."\n";
    $conta++;
}

for($i = 1; $i <= 10; $i++){
    echo "Tabuada de ".$i."\n";
    for($j = 1; $j <= 10; $j++){
        echo $i." x ".$j." = ".$i * $j."\n";
    }
}

