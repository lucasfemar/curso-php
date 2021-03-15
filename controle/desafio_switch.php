<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Fahrenheit</option>
        <option value="fah-cel">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
$selectedValue = $_POST['conversao'];

switch ($_POST['conversao']) {
    case 'km-milha':
        $result = $param * FATOR_KM_MILHA;
        $mensagem = "{$param} Km(s) = {$result} Milha(s)";
        break;
    case 'milha-km':
        $result = $param / FATOR_KM_MILHA;
        $mensagem = "{$param} Milha(s) = {$result} Km(s)";
        break;
    case 'metro-km':
        $result = $param / FATOR_METRO_KM;
        $mensagem = "{$param} Metros(s) = {$result} Km(s)";
        break;
    case 'km-metro':
        $result = $param * FATOR_METRO_KM;
        $mensagem = "{$param} Km(s) = {$result} Metro(s)";
        break;
    case 'cel-fah':
        $result = $param * FATOR_CEL_FAH +32;
        $mensagem = "{$param}° Celcius = {$result}° Fahrenheint";
        break;
    case 'fah-cel':
        $result = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheint = {$result}° Celsius";
        break;
    default:
    $mensagem = "Nenhum valor calculado";
}
echo "<p>$mensagem</p>";