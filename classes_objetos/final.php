<div class="titulo">Modificador Final</div>
<?php
abstract class Abstrata {
    abstract public function metodo1();

    //função final não pode ser alterada!
    final public function metodo2(){
        echo "Não vou mudar<br>";
    }
}


//Erro intephense, ignorar!
class Classe extends Abstrata {

    public function metodo1(){
        echo "Executuando metodo 1<br>";
    }

    //Tentando altera função final
    // public function metodo2(){
    //     echo 'Extendendo método 2<br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();


//Classe final não pode ser herdada!
final class Unica {
    public $attr = 'Valor Único';
}

$unica = new Unica;
echo $unica->attr;

//Tentando herdar uma classe final
// class Duplicata extends Unica {
//     public $att2;
// }