<div class="titulo">Operações</div>
<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];
//Nesse caso a chave nome da variável $dados1 que vai prevalecer.
//Porque está mais a esquerda na operação

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

//Duas opções para fazer interpolações de arrays dentro das aspas.
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

//remover um elemento de um array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

//Limpar um array
unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1 , 3, 5, 7, 9];
$pares = [0 , 2, 4, 6, 8];

//os indices de cada array($impares, $pares) tem o mesmo nome.
//sendo assim na operação seguinte a variável $decimais vai receber
//os valores de $pares, pois aparece primeiro na operação
$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

//Todos os valores vão pra dentro de $decimais
//Não em ordem.
$decimais2 = array_merge($pares, $impares);
echo '<br>';
print_r($decimais2);

//Ordena os valores.
sort($decimais2);
echo '<br>';
print_r($decimais2);