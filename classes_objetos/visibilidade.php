<div class="titulo">Visibilidade</div>
<?php

class A {

    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        // $this->naoMostrar();
        echo "Class A) Public = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca(){
        echo 'Vim por herança<br>';
    }

    private function naoMostrar(){
        echo 'Não vou imprimir<br>';
    }
}

$a = new A();
// echo $a->privado;
// Fatal error: Uncaught Error: Cannot access private property A::$privado in C:\xampp\htdocs\PHP\curso-php\classes_objetos\visibilidade.php:22 Stack trace: #0 C:\xampp\htdocs\PHP\curso-php\exercicio.php(23): include() #1 {main} thrown in C:\xampp\htdocs\PHP\curso-php\classes_objetos\visibilidade.php on line 22
$a->mostrarA();

class B extends A{
    public function mostrarB(){
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        // echo "Classe B) Privado = {$this->privado}<br>";
        parent::vaiPorHeranca();
    }
}

echo '<br>';

$b = new B();
$b->mostrarB();
echo '<br>';
$b->mostrarA();

// $b->vaiPorHeranca();
//Não funciona pois "vaiPorHeranca()" só pode ser acessada dentro da classe herança