<div class="titulo">Construtor & Destrutor</div>
<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade = 18){
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'E morreu!<br>';
    }

    function apresentar(){
        return "Nome: {$this->nome}, Idade: {$this->idade}";
    }
}

$pessoaA = new Pessoa('Lucas Marcelo', 22);
echo $pessoaA->apresentar() . '<br>';

//chama destrutor
unset($pessoaA);

$pessoaB = new Pessoa('Joana Silva');
echo $pessoaB->apresentar() . '<br>';

//chama destrutor
$pessoaB = null;