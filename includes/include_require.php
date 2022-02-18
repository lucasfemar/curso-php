<div class="titulo">Include vs Require</div>

<?php

/**
 * Chamar um aquirvo inexistente com o include não
 * impede a renderização da pagina.
 * 
 *  Já chamar com o require um arquivo inexistente a renderização
 *  é parada.
 */
ini_set('display_errors', 1);


echo "Usando include com arquivo inexistente...<br>" ;
include('arquivo_inexistente.php');


echo "Usando require com arquivo inexistente...<br>" ;
require('arquivo_inexistente.php');
echo 'Não achou mesmo... <br>';