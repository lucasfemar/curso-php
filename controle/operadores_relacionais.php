<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true Compara o valor.
var_dump(111 === '111'); // false Compar não somente o valor, mas compara o tipo da variável.(Igualdade Restrita)
var_dump(111 != '111'); // false
var_dump(111 !== '111'); // true

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';
//Se o valor da esquerda foi maior que o da direita retorna 1,
//Se os valores forem iguais rertona 0
//Se o valor da esquerda for maior que o da direita retorna -1
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");