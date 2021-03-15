<div class="titulo">Recursividade</div>
<?php
function somaUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; $numero--){
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(10) . "<br>";


function somaRecusivaUmAte($numero){
    // Condição de Parada!!!!
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecusivaUmAte($numero -1);
}

echo somaRecusivaUmAte(5);