<?php
class caneta{
    //definir atributos
    
    public $cor;
    public $marca;
    public $ponta;
    public $tamanho;
    public $carga;

    //definir metodos
    public function escrever($texto){
        echo "escrevendo" .  $texto  .  "com a caneta<br>";

    }
    public function rabiscar(){
        echo "rabiscando com a caneta<br>";
    }
    public function sublinhar(){
        echo "Sublinhando com a caneta<br>";
    }
    public function pintar(){
        echo "Pintando com a caneta<br>";
    }   

}
echo "<br>NOVA CANETA <br> <br>";
$caneta1 = new caneta();
    $caneta1->cor = "azul";
    $caneta1->marca = "bic";
    $caneta1->ponta = "fina";
    $caneta1->tamanho = "pequena";
    $caneta1->carga = "cheia";
    
echo "Cor: " . $caneta1->cor . "<br>";
echo "Marca: " . $caneta1->marca . "<br>";
echo "Ponta: " . $caneta1->ponta . "<br>";
echo "Tamanho: " . $caneta1->tamanho . "<br>";
echo "Carga: " . $caneta1->carga . "<br>";
    $caneta1->escrever("\noi\n");
    $caneta1->rabiscar();
    $caneta1->sublinhar();
    $caneta1->pintar();

    echo "<br>NOVA CANETA <br> <br>";

$caneta2 = new caneta();
    $caneta2->cor = "preta";
    $caneta2->marca = "faber";
    $caneta2->ponta = "grossa";
    $caneta2->tamanho = "grande";
    $caneta2->carga = "vazia";
echo "Cor: " . $caneta2->cor . "<br>";
echo "Marca: " . $caneta2->marca . "<br>";
echo "Ponta: " . $caneta2->ponta . "<br>";
echo "Tamanho: " . $caneta2->tamanho . "<br>";
echo "Carga: " . $caneta2->carga . "<br>";
    $caneta2->escrever("\noi\n");
    $caneta2->rabiscar();
    $caneta2->sublinhar();
    $caneta2->pintar();
    echo "<br>NOVA CANETA <br> <br>";
$caneta3 = new caneta();
    $caneta3->cor = "vermelha";
    $caneta3->marca = "compactor";
    $caneta3->ponta = "fina";
    $caneta3->tamanho = "media";
    $caneta3->carga = "cheia";
echo "Cor: " . $caneta3->cor . "<br>";
echo "Marca: " . $caneta3->marca . "<br>";
echo "Ponta: " . $caneta3->ponta . "<br>";
echo "Tamanho: " . $caneta3->tamanho . "<br>";
echo "Carga: " . $caneta3->carga . "<br>";
    $caneta3->escrever("\noi\n");
    $caneta3->rabiscar();
    $caneta3->sublinhar();
    $caneta3->pintar();
?>
<style>
    *{
        text-align: center;
    }
</style>
