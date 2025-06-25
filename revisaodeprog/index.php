<!-- a classe é o projeto e o objeto é como se fosse o resultado final -->





<?php
 class aluno{
    public $nome;
    public $matricula;
    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
    public function pegarlivro($livro){
        echo "O aluno {$this->nome} pegou o livro {$livro} <br>";
    }

 }
 class livro{
    public $titulo;
    public $autor;
    public function __construct($titulo, $autor){
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function emprestar($aluno){
        echo "O livro {$this->titulo} foi emprestado para {$aluno->nome} <br>";
    }
    public function devolver($aluno){
        echo "O livro {$this->titulo} foi devolvido por {$aluno->nome} <br>";
    }
    
}
class ContaBancaria{
    private $saldo;
    private $titular;
    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function depositar($valor){
        $this->saldo += $valor;
        echo "Depósito de R$ {$valor} realizado. Saldo atual: R$ {$this->saldo} <br>";
    }
    public function sacar($valor){
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para saque de R$ {$valor}. Saldo atual: R$ {$this->saldo} <br>";
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado. Saldo atual: R$ {$this->saldo} <br>";
        }
    }
    public function getTitular(){
        return $this->titular;
    }
    public function setTitular($titular){
        $this->titular = $titular;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}

    $aluno1 = new aluno("João", "12345");
    $aluno2 = new aluno("Maria", "67890");
    $aluno3 = new aluno("Pedro", "54321");
    $livro1 = new livro("Aprendendo PHP", "Autor A");
    $livro2 = new livro("Programação Orientada a Objetos", "AutorB");
    $livro3 = new livro("Desenvolvimento Web", "Autor C");
    $livro1->emprestar($aluno1);
     echo "<br>";
    $livro2->emprestar($aluno2);
     echo "<br>";
    $livro3->emprestar($aluno3);
     echo "<br>";
    $livro1->devolver($aluno1);
     echo "<br>";
    $livro2->devolver($aluno2);
     echo "<br>";
    $livro3->devolver($aluno3);
     echo "<br>";
    $aluno1->pegarlivro($livro1->titulo);
     echo "<br>";
    $aluno2->pegarlivro($livro2->titulo);
     echo "<br>";
    $aluno3->pegarlivro($livro3->titulo);
    echo "<br>";
    $conta1 = new ContaBancaria("João", 1000);
    $conta1->depositar(500);
    $conta1->sacar(200);
    $conta1->getTitular();
    $conta1->setTitular("João Silva");
    echo "Titular da conta: " . $conta1->getTitular() . "<br>";
    echo "Saldo atual: R$ " . $conta1->getSaldo() . "<br>";

?>