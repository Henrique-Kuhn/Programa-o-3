<?php

class Animal{
    public $nome;
    public $raça;

    public function __construct($nome, $raça) {
        $this->nome = $nome;
        $this->raça = $raça;
    }
    public function caminhar() {
        echo "{$this->nome} está caminhando.\n";
    }
}

class Cachorro extends Animal {
    public function latir() {
        echo "{$this->nome} está latindo.\n";
    }
}
class Gato extends Animal {
    public function miar() {
        echo "{$this->nome} está miando.\n";
    }
}

$cachorro = new Cachorro("Rex", "Labrador");
$gato = new Gato("Mia", "Siamês");

class pessoa{
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}
class Rica extends pessoa {
    public $dinheiro;

    public function __construct($nome, $idade, $dinheiro) {
        parent::__construct($nome, $idade);
        $this->dinheiro = $dinheiro;
    }
    public function fazCompras() {
        echo "{$this->nome} está fazendo compras com {$this->dinheiro} reais.\n";
    }
}
class pobre extends pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);

    }
    public function trabalha() {
        echo "{$this->nome} está trabalhando para ganhar dinheiro.\n";
    }
}
class miseravel extends pessoa {
    public function __construct($nome, $idade) {
        parent::__construct($nome, $idade);
    }
    public function mendiga() {
        echo "{$this->nome} está mendigando por dinheiro.\n";
    }
}
$pessoa1 = new Rica("João", 30, 10000);
$pessoa2 = new pobre("Maria", 25);
$pessoa3 = new miseravel("José", 40);
$pessoa1->fazCompras();
$pessoa2->trabalha();
$pessoa3->mendiga();
?>