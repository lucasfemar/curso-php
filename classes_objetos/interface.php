<div class="titulo">Interface</div>

<?php
interface Animal{
    function respirar();
}

interface Mamifero{
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir() : string;
    function correr();
}

interface Felino{
    function correr();
}

class Cachorro implements Canino{
    function respirar(){
        return 'Respirando';
    }

    function latir() : string{
        return 'Estou latindo';
    }

    function mamar(){
        return 'Estou Mamando';
    }

    function correr(){
        return 'Correndo';
    }
}

$bob = new Cachorro();

echo $bob->respirar() . "<br>";
echo $bob->latir() . '<br>';
echo $bob->mamar() . '<br>';
echo $bob->correr() . '<br>';

echo '<br>';
var_dump($bob);
echo '<br>';
var_dump($bob instanceof Cachorro);
var_dump($bob instanceof Canino);
var_dump($bob instanceof Animal);
var_dump($bob instanceof Mamifero);
var_dump($bob instanceof Felino);