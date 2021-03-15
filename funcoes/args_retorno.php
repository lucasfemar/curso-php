<div class="titulo">Argumentos & Rertorno</div>
<?php
function obterMenssagem()
{
    return 'Seja bem vindo(a)!';
}

obterMenssagem();
$m = obterMenssagem();
echo $m;
echo '<br>', obterMenssagem();
echo '<br>';
var_dump(obterMenssagem());

function obterMenssagemComNome($nome){
    return "Bem vindo, {$nome}";
}
echo '<br>', obterMenssagemComNome('Wagner');
echo '<br>', obterMenssagemComNome('Tiago');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;

echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocarValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocarValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>', $variavel;

?>