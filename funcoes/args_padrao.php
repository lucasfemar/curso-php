<div class="titulo">Argumentos Padrão</div>
<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}
echo saudacao();
echo saudacao(null); 
echo saudacao(null, null); 
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>"; 
    echo "Para beber: $bebida <br>";
}
anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

//Coloque sempre os valores padrões por ultimo, caso 
// o contrário vc terá que colocar os parametros 
// padrões obrigatoriamente. Exempl.:
//Impossivel informar apenas a comida sem informar a bebida primeiro
function anotarPedido2($bebida ='Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber $bebida <br>";
}
//anotarPedido2('Hambuguer');
anotarPedido2('Refrigerante2', 'Pizza2');
?>