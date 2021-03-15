<div class="titulo">Desafio Palindromo</div>
<?php

function palindromo($palavra){
    // $palavra um tamanho de 5, porém conta-se de 0 á 4.
    $ultimoIndice = strlen($palavra) - 1;   
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara').'<br>';
echo palindromo('ana').'<br>';
echo palindromo('bola').'<br>';
echo palindromo('aabbaa').'<br>';
echo '<hr>';

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromo('arara').'<br>';
echo palindromo('ana').'<br>';
echo palindromo('bola').'<br>';
echo palindromo('aabbaa').'<br>';
?>