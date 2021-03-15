<div class="titulo">Visibilidade</div>
<?php

class A {

    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Public = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrar(){
        echo 'Não vou imprimir';
    }
}

$a = new A();
$a->mostrarA();