@
<?php

class Produto {
    public $nome;
    public $preco;
}

$p = new Produto();
$p->nome = "Teclado";
$p->preco = 150.00;

echo "Produto: " . $p->nome . " | Preço: " . $p->preco;
@
