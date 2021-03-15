<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
//Não pode
// FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fista"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

//Outra forma de criar uma constante
define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];