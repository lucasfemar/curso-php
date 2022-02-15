<div class="titulo">Include Função</div>
<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo(){
    include('include_arquivo.php');

    echo $variavel;
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8). '!<br>'; -> Erro pois foi chamada antes de invocar a função carregarArquivo()
carregarArquivo();

echo "Variável = '{$variavel}'."; // Não é a mesma variavel do arquivo include_arquivo.php
//var_dump($variavel)

echo '<br>' . soma(3,8); // Porém a função soma() é possível utilizar fora do escopo da função carregarArquivo()