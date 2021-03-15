<div class="titulo">Desafio_For</div>
<?php
$y = '';

for ($i = 1; $i <= 5; $i++) {
    $y = $y .'#';
    echo "$y <br>";
}

echo '<hr>';

$array = ['#', '##', '###', '####', '#####'];
for($i = 0; $i < count($array); $i++){
    echo "{$array[$i]} <br>";
}

echo '<hr>';

for($i = '#'; $i != '######'; $i .= '#'){
    echo "$i <br>";
}