<div class="titulo">Argumentos Variáveis</div>
<?php
function soma($a, $b)
{
    return $a + $b;
}

//Só sera somado os dois primeiros parâmetros
echo soma(14, 15, 6, 7, 8, 9) . '<br>';
echo soma(6, 5, 4) . '<br>';

//os três pontos pega todos os parâmetros para somar
function somaCompleta(...$numeros)
{
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo 'Soma completa = ' . somaCompleta(1, 2, 3, 4) . '<br>';

$array = [6, 7, 8];
//os tres pontos dentro do chamado quebram e espalham os valores dentro do array
//e os coloca nos parâmetros
echo 'Soma completa do array = ' . somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes)
{
    echo "Titular: $titular <br>";
    if ($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
echo membros("Rafaela Eduarda", "Ana Julia", "Joana Silva", "Raissa Jonas");
echo '<br>';
echo membros("Carol Ruy");
