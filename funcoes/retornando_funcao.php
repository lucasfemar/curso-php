<div class="titulo">Retornando Função</div>

<?php
function soma($a){
    //o variável $a só poderá sera acessada caso eu utilize o "use"
    return function($b) use ($a){
        return $a + $b;
    };
}

//Passo os parametros para as função soma
//e depois para a função anonima
echo soma(3)(3);

//1° Passo somente o primeiro parâmetro.
$doisMais= soma(2);

//2° Passo apenas o parâmetro da função
//anonima, quantas vezes eu quiser
//para realizar diferentes somas com menos tempo
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);