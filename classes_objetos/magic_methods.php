<div class="titulo">Métodos Mágicos</div>
<!-- https://www.php.net/manual/en/language.oop5.magic.php -->
<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this . "<br>"; //chama o metodo toString pois se trata de uma string
    }

    // Metodo __get é sempre chamado quando o atributo chamado não existe na classe
    public function __get($atrib)
    {
        echo "Lendo atributo não declarado {$atrib}";
    }

    // Metodo __set é chamado semrpe que o mudamos o valor de um atributo que não existe existe na classe
    public function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado {$atrib}/{$valor}";
    }

    // Metodo __cal sempre é chamado quando se chama uma função que não existe na classe
    public function __call($metodo, $params)
    {
        echo "Tentando executar método {$metodo}";
        echo '<br>';
        print_r($params);
    }
}

$pessoa = new Pessoa("Lucas", 24);
$pessoa->apresentar();
echo $pessoa . '<br>';
$pessoa->nome = "Rafaela";
$pessoa->apresentar();

echo '<br>***** Métodos Magicos ******<br>';
$pessoa->nomeCompleto; //__get
echo '<br><br>';
$pessoa->nomeCompleto = "Muito Legal!!!"; // __set
echo '<br><br>';
$pessoa->naoExisto("email@email.com", 125, [1, 2, 3]); //_call

echo '<br>';
$pessoa = null;