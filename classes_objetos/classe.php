<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //atributos
    public $nome = 'Anônimo ';
    public $idade = 18;

    //funções
    public function apresentar(){
        return "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Lucas';
$c1->idade = '22';
echo $c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'Joana';
$c2->idade = '18';
echo $c2->apresentar();