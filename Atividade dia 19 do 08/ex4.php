<?php

class Imovel {
    private $endereco;
    private $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function imprimir() {
        echo "Endereço: {$this->endereco}, Preço: R$ {$this->preco}<br>";
    }
}

class Novo extends Imovel {
    private $adicional;

    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }

    public function getAdicional() {
        return $this->adicional;
    }

    public function imprimirAdicional() {
        echo "Adicional no preço: R$ {$this->adicional}<br>";
    }

    public function imprimir() {
        parent::imprimir();
        $this->imprimirAdicional();
        echo "Preço total: R$ " . ($this->getPreco() + $this->adicional) . "<br>";
    }
}

class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function imprimirDesconto() {
        echo "Desconto no preço: R$ {$this->desconto}<br>";
    }

    public function imprimir() {
        parent::imprimir();
        $this->imprimirDesconto();
        echo "Preço com desconto: R$ " . ($this->getPreco() - $this->desconto) . "<br>";
    }
}
$casaNova = new Novo("Rua A, 123", 300000, 50000);
$casaVelha = new Velho("Rua B, 456", 200000,15000);
$casaNova->imprimir();
$casaVelha->imprimir();


?>