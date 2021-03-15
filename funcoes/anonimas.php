<div class="titulo">Funções Anônimas</div>
<?php
$soma = function($a, $b){
    return $a + $b;
};

echo $soma (1, 2) . '<br>';

//função que pode receber outra fução como parâmetro
function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b) ?? 'NADA';
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicação = function ($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicação);

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', divisao);