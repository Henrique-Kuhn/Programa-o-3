<?php

class Funcionario{
    public nome;
    public salario;
    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
    public function addAumento(double $valor) {
        $this->salario += $valor;
    }
    public function ganhoAnual() {
        return $this->salario * 12;
    }
    public function exibeDados() {
        echo "Nome: {$this->nome}, Salário: {$this->salario}\n";

}
}
class Assistente extends Funcionario {
    private $matricula;
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function __construct($nome, $salario) {
        parent::__construct($nome, $salario);
    }
    public function exibeDados() {
        parent::exibeDados();
        echo "Matrícula: {$this->matricula}\n";
    }
}
class Tecnico extends Assistente {
    private $bonus;

    public function __construct($nome, $salario, $bonus) {
        parent::__construct($nome, $salario);
        $this->bonus = $bonus;
    }

    public function ganhoAnual() {
        return ($this->salario + $this->bonus) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Bônus: {$this->bonus}\n";
    }
}

class Administrativo extends Assistente {
    private $turno;
    private $adicionalNoturno;
    public $turno;
    public $adicionalNoturno;
    public function __construct($nome, $salario, $turno, $adicionalNoturno = 0) {
        parent::__construct($nome, $salario);
        $this->turno = $turno;
        $this->adicionalNoturno = $adicionalNoturno;
    }

    public function ganhoAnual() {
        if (strtolower($this->turno) === 'noite') {
            return ($this->salario + $this->adicionalNoturno) * 12;
        }
        return $this->salario * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Turno: {$this->turno}\n";
        if (strtolower($this->turno) === 'noite') {
            echo "Adicional Noturno: {$this->adicionalNoturno}\n";
        }
    }

    public function ganhoAnual() {
        return ($this->salario + $this->adicionalNoturno) * 12;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Turno: {$this->turno}, Adicional Noturno: {$this->adicionalNoturno}\n";
    }
}

$primeiro_funcionario->addAumento(500);
$primeiro_funcionario->exibeDados();
$assistente = new Assistente("Maria", 2500);
$assistente->setMatricula("12345");
$assistente->addAumento(300);
$assistente->exibeDados();
$tecnico = new Tecnico("Carlos", 4000, 600);
$tecnico->setMatricula("67890");
$tecnico->addAumento(700);
$tecnico->exibeDados();
$administrativo = new Administrativo("Ana", 3500, "Noite", 200);
$administrativo->setMatricula("54321");
$administrativo->addAumento(400);
$administrativo->exibeDados();
echo "Ganho Anual do Funcionário: " . $primeiro_funcionario->ganhoAnual() . "\n";
echo "Ganho Anual do Assistente: " . $assistente->ganhoAnual() . "\n";
echo "Ganho Anual do Técnico: " . $tecnico->ganhoAnual() . "\n";
echo "Ganho Anual do Administrativo: " . $administrativo->ganhoAnual() . "\n";


?>