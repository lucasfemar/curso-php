<div class="titulo">Traits #02</div>

<?php

trait validacao {
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    //Resolver conflito pos abas as traits tem funções com o mesmo nome.
    use validacao, validacaoMelhor {
        //Usar "validarString" da trait "validacaoMelhor" ao invés da trait "validacao"
        validacaoMelhor::validarString insteadOf validacao;

        // Renomear a função para poder usa-la;.
        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();

var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));