<?php

class caneta{
    private $ponta;
    private $cor;
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function setCor($cor){
        $this ->cor= $cor;

    }
    public function getCor(){
        echo"<br> A Cor é: ", $this->cor;
    }
    public function getPonta(){
     echo"<br> A Ponta é: ", $this->ponta, "<br>";
  
    }
    public function __construct($ponta, $cor){
        $this->ponta = $ponta;
        $this->cor = $cor;
    }
    public function mostracaneta(){
    echo "<br> ############# <br> A caneta é: <br>";
    echo "A ponta é: ", $this->ponta;
    echo "<br> A cor é: ", $this->cor;
    echo "<br> ############# <br>";
    }
    

}

$c1 = new caneta(10, "branca");
$c1->mostracaneta();
$c2 = new caneta(15, "preta");
$c2 -> mostracaneta();
class carro {
  private $modelo;
  private $cor;
  private $ano;
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getModelo(){
        echo "<br> O modelo é: ", $this->modelo;
    }
    public function getCor(){
        echo "<br> A cor é: ", $this->cor;
    }
    public function getAno(){
        echo "<br> O ano é: ", $this->ano;
    }
    public function __construct($modelo, $cor, $ano){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }  
}
$carro1 = new carro("Fusca", "azul", 1990);
$carro1->getModelo();
$carro1->getCor();
$carro1->getAno();
?>