<?php

class produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirinformacao () {
     echo "<strong>Nome: $this->nome, Preço: $this->preco, Quantidade: $this->quantidade <br></strong>";
    }
}
echo "Exibindo informações do produto: <br>";
$produto1 = new produto();
$produto1->nome = "Produto 1";
$produto1->preco = 10.99;
$produto1->quantidade = 5;
$produto1->exibirinformacao();
echo "<br>Novo produto: <br>";
$produto2 = new produto();
$produto2->nome = "Produto 2";
$produto2->preco = 20.50;
$produto2->quantidade = 3;
$produto2->exibirinformacao();

function media($produto1, $produto2) {
    return ($produto1->preco + $produto2->preco) / 2;
}
$media = media($produto1, $produto2);
echo "<br>Média de preços: $media <br>";
?>