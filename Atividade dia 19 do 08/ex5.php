<?php

class Teste {
    public static function main() {
        // a. Assistente Administrativo e Técnico
        $assistente = new AssistenteAdministrativo("João", 123);
        $tecnico = new Tecnico("Maria", 456);
        echo "Assistente Administrativo: {$assistente->getMatricula()} - {$assistente->getNome()}\n";
        echo "Técnico: {$tecnico->getMatricula()} - {$tecnico->getNome()}\n\n";

        // b. Animais
        $cachorro = new Cachorro("Rex");
        $gato = new Gato("Mimi");
        echo "{$cachorro->getNome()} faz: ";
        $cachorro->latir();
        $cachorro->caminhar();
        echo "{$gato->getNome()} faz: ";
        $gato->miar();
        $gato->caminhar();
        echo "\n";

        // c. Rica, Pobre, Miseravel
        $rica = new Rica("Ana", 10000);
        $pobre = new Pobre("Carlos");
        $miseravel = new Miseravel("Pedro");
        $rica->fazerCompras();
        $pobre->trabalhar();
        $miseravel->mendigar();
        echo "\n";

        // d. Ingresso
        echo "Digite 1 para ingresso Normal ou 2 para VIP: ";
        $tipoIngresso = trim(fgets(STDIN));
        if ($tipoIngresso == "1") {
            $ingresso = new Normal(50);
            echo "Ingresso Normal. Valor: R$ {$ingresso->getValor()}\n";
        } elseif ($tipoIngresso == "2") {
            echo "Digite 1 para Camarote Superior ou 2 para Camarote Inferior: ";
            $tipoVip = trim(fgets(STDIN));
            if ($tipoVip == "1") {
                $ingresso = new CamaroteSuperior(100, "A1");
                echo "VIP Camarote Superior. Valor: R$ {$ingresso->getValor()}\n";
            } else {
                $ingresso = new CamaroteInferior(80, "B2");
                echo "VIP Camarote Inferior. Valor: R$ {$ingresso->getValor()}\n";
            }
        }
        echo "\n";

        // e. Imóvel
        echo "Digite 1 para imóvel Novo ou 2 para Velho: ";
        $tipoImovel = trim(fgets(STDIN));
        if ($tipoImovel == "1") {
            $imovel = new Novo(200000, 30000);
            echo "Imóvel Novo. Valor final: R$ {$imovel->getValorFinal()}\n";
        } else {
            $imovel = new Velho(200000, 15000);
            echo "Imóvel Velho. Valor final: R$ {$imovel->getValorFinal()}\n";
        }
    }
}

// Classes auxiliares
class AssistenteAdministrativo {
    private $nome, $matricula;
    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
    public function getNome() { return $this->nome; }
    public function getMatricula() { return $this->matricula; }
}
class Tecnico extends AssistenteAdministrativo {}

class Animal {
    protected $nome;
    public function __construct($nome) { $this->nome = $nome; }
    public function getNome() { return $this->nome; }
    public function caminhar() { echo "{$this->nome} está caminhando.\n"; }
}
class Cachorro extends Animal {
    public function latir() { echo "Au au!\n"; }
}
class Gato extends Animal {
    public function miar() { echo "Miau!\n"; }
}

class Rica {
    private $nome, $dinheiro;
    public function __construct($nome, $dinheiro) {
        $this->nome = $nome;
        $this->dinheiro = $dinheiro;
    }
    public function fazerCompras() { echo "{$this->nome} está fazendo compras.\n"; }
}
class Pobre {
    private $nome;
    public function __construct($nome) { $this->nome = $nome; }
    public function trabalhar() { echo "{$this->nome} está trabalhando.\n"; }
}
class Miseravel {
    private $nome;
    public function __construct($nome) { $this->nome = $nome; }
    public function mendigar() { echo "{$this->nome} está mendigando.\n"; }
}

class Ingresso {
    protected $valor;
    public function __construct($valor) { $this->valor = $valor; }
    public function getValor() { return $this->valor; }
}
class Normal extends Ingresso {}
class VIP extends Ingresso {}
class CamaroteSuperior extends VIP {
    private $localizacao;
    public function __construct($valor, $localizacao) {
        parent::__construct($valor);
        $this->localizacao = $localizacao;
    }
}
class CamaroteInferior extends VIP {
    private $localizacao;
    public function __construct($valor, $localizacao) {
        parent::__construct($valor);
        $this->localizacao = $localizacao;
    }
}

class Imovel {
    protected $preco;
    public function __construct($preco) { $this->preco = $preco; }
}
class Novo extends Imovel {
    private $adicional;
    public function __construct($preco, $adicional) {
        parent::__construct($preco);
        $this->adicional = $adicional;
    }
    public function getValorFinal() { return $this->preco + $this->adicional; }
}
class Velho extends Imovel {
    private $desconto;
    public function __construct($preco, $desconto) {
        parent::__construct($preco);
        $this->desconto = $desconto;
    }
    public function getValorFinal() { return $this->preco - $this->desconto; }
}

// Executa o main
Teste::main();

?>