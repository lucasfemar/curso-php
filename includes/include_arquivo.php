<?php
echo "Carregando: include_arquivo<br>";

$variavel = "Estou definida<br>";

/** Caso esse arquivo seja chamado dua vezes na mesma pagina
 * Verificamos se a função 'soma' ja existe para não cria-la novamente. */ 

if(!function_exists('soma')){
    function soma($a, $b){
        return $a + $b;
    }
}