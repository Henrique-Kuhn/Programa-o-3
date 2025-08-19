<?php

class Ingresso {
    protected float $valor;

    public function __construct(float $valor) {
        $this->valor = $valor;
    }

    public function imprimeValor() {
        echo "Valor do ingresso: R$ " . ($this->valor, 2) . "<br>";
    }
}

class VIP extends Ingresso {
    protected float $valorAdicional;

    public function __construct(float $valor, float $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorVIP() {
        return $this->valor + $this->valorAdicional;
    }
}

class Normal extends Ingresso {
    public function imprimeTipo() {
        echo "Ingresso Normal<br>";
    }
}

class CamaroteInferior extends VIP {
    private string $localizacao;

    public function __construct(float $valor, float $valorAdicional, string $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeLocalizacao() {
        echo "Localização do ingresso: " . $this->localizacao . "<br>";
    }
}

class CamaroteSuperior extends VIP {
    private float $valorAdicionalSuperior;

    public function __construct(float $valor, float $valorAdicional, float $valorAdicionalSuperior) {
        parent::__construct($valor, $valorAdicional);
        $this->valorAdicionalSuperior = $valorAdicionalSuperior;
    }

    public function getValorCamaroteSuperior() {
        return $this->valor + $this->valorAdicional + $this->valorAdicionalSuperior;
    }
}
$ingressoNormal = new Normal(50);
$ingressoNormal->imprimeValor();
$ingressoNormal->imprimeTipo();
$ingressoVIP = new VIP(100, 50);
$ingressoVIP->imprimeValor();
$ingressoVIP->imprimeTipo();
$ingressoCamaroteInferior = new CamaroteInferior(150, 50, "Setor A");
$ingressoCamaroteInferior->imprimeValor();
$ingressoCamaroteInferior->imprimeLocalizacao();
$ingressoCamaroteSuperior = new CamaroteSuperior(200, 50,150);
$ingressoCamaroteSuperior->imprimeValor();
$ingressoCamaroteSuperior->imprimeLocalizacao();

?>
