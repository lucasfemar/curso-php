<div class="titulo">Map & Filter</div>
<?php
echo '<strong>MAP</strong><br>';
echo 'Primeiro Exemplo(sem função Map) <br>';

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br><br>Segundo Exemplo (Função Map)<br>';
$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);

echo '<br><br> Terceiro Exemplo<br>';
echo '(Função Map, com função pesonalizada no parametro)<br>';

function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);

echo '<br><br><strong>FILTER</strong><br>';
echo 'Primeiro exemplo (sem função Filter)<br>';

$apenasOsAprovados1 = [];
foreach ($notas as $nota) {
    if ($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}
print_r($apenasOsAprovados1);

echo '<br><br> Segundo exemplo (Função Filter)<br>';
function aprovados($nota)
{
    return $nota >= 7;
}
$apenasOsAprovados2 = array_filter($notas, aprovados);
print_r($apenasOsAprovados2);
