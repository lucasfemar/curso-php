<div class="titulo">Traits #01</div>
<?php
trait validacao {
    public $a = 'Valor a';
    function validacaoString($str){
        return isset($str) && $str != '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';
    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}

//Não é possivel chamar um método ou uma função direto
//de uma trait
//var_dump(validacao->validarString(''));

$usuario = new Usuario();
var_dump($usuario->validacaoString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, "<br>", $usuario->b;
echo $usuario->imprimirValorC();