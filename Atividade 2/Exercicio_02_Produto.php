@
<?php

class Produto {
    public $nome;
    private $preco;

    public function setPreco($valor) {
        $this->preco = $valor;
    }

    public function getPreco() {
        return $this->preco;
    }
}

$p = new Produto();
$p->nome = "Teclado Mecânico";
$p->setPreco(250.50);

echo "Produto: " . $p->nome . " | Preço: " . $p->getPreco();
@
