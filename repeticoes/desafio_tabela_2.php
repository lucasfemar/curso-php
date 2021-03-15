<div class="titulo">Desafio Tabela #2</div>

<form action="/exercicio.php?dir=repeticoes&file=desafio_tabela_2" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" name="linhas" id="linhas" class="linhas" value=<?= $_POST['linhas'] ?? 0 ?>>
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" name="colunas" id="colunas" class="colunas" value=<?=$_POST['colunas'] ?? 0 ?>>
    </div>
    <button type="submit">Gerar Tabela</button>
</form>

<?php
$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);
?>

<table>
    <?php

    for ($i = 1; $i <= $linhas; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $colunas; $j++) {
            $k += 1;
            echo "<td>$k</td>";
        }
        echo '</tr>';
    }
    ?>
</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    form>div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>