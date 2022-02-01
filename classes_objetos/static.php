<div class="titulo">Membros Estáticos</div>
<?php
class A {
    public $naoStatic = 'Variável não instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        //tenativa 1
        //echo "Estática = {$this->static}<br>";
        //tentativa 2
        //echo "Estática = {self::$static}<br>;
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //Impossível chamar membroa não estáticos
        //echo "Não estática = {$this->naoStatic}<br>;" * Erro *
        //echo "Estática = {$static}<br>"; * Erro *
        echo "Estática = " . self::$static . "<br>";
    }
}
$objetoA = new A();
$objetoA->mostrarA();
echo '<br>';

//O exemplo a baixo não é melhor forma de acessar 
//uma função estática pois passa a impressão
//que ela faz parte do Objeto e não da Classe
$objetoA->mostrarStaticA();

//Maneira mais eficaz de chamar uma função ou variável estática
echo A::$static, '<br>';
A::mostrarStaticA();

A::$static = 'Alterando mebro de classe';
echo A::$static, '<br>';