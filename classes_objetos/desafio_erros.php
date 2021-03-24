<div class="titulo">Desafio Erros</div>
<?php

// interface Template{
//     function metodo1();
//     public function metodo2($paremetro);
// }

// abstract class ClasseAbstrata extends Template {
//     public function metodo3() {
//         echo "Estou funcionando";
//     }
// }

// class Classe implements ClasseAbstrata {
//     function __construct($parametro) {

//     }
// }

// $exemplo = Classe();
// $exemplo.metodo3();


interface Template {
    function metodo1();
    public function metodo2($paremetro);
}

abstract class ClasseAbstrata implements Template{
    function metodo1() {
        echo "Metodo 1<br>";
    }

    public function metodo2($parametro) {
        echo "Metodo 2<br>";
    }

    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }

    public function metodo1() {

    }

    public function metodo2($parametro){

    }
}

$exemplo = new Classe("Ola");
$exemplo -> metodo3();
