<div class="titulo">Mapa</div>
<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);
echo '<br>';
var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informação"]);

echo '<br>';

echo '<br> Evite fazer isso';
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h",
);

echo '<br>';
print_r($lista);

//Adiconar um elemento na sua lista
//Se escrever $lista = 'i' você estará substituindo todo o array pelo valor 'i'.
$lista[] = 'i'; 

//adiciona o valor 'j' dentro de uma chave chamada 'vinte'
$lista['vinte'] = 'j';
echo '<br>';
echo '<br>';
print_r($lista);