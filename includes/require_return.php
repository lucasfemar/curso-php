<div class="titulo">Require & Return</div>
<?php
ini_set("display_errors", 1);
$valorRetorno = require("return_usado.php");
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>"; // Variável dentro do arquivo 'return_usado.php'

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__. '/return_nao_usado.php');
echo "$valorRetorno2<br>"; // 1 se o arquivo existe : Error se o arquivo não existir
echo "$variavelDeclarada<br>"; // Variável dentro do arquivo 'return_nao_usado.php