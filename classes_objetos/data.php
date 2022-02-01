<div class="titulo">Classe Data</div>
<?php
class Data {

    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new Data();
echo $data1->apresentar() . '<br>';

$data2 = new Data();
$data2->dia = 23;
$data2->mes = 02;
$data2->ano = 2021;
echo $data2->apresentar() . '<br>';