<?php

class Item
{
    public $nome;
    public $preco;
    public $quantidade;

    public function valorTotal()
    {
        return $this->preco * $this->quantidade;
    }
}

class Carrinho
{
    public $itens = [];

    public function adicionarItem($item)
    {
        $this->itens[] = $item;
    }

    public function calcularTotal()
    {
        $total = 0;

        foreach ($this->itens as $item) {
            $total += $item->valorTotal();
        }

        return $total;
    }
}

$item1 = new Item();
$item1->nome = "Teclado";
$item1->preco = 150.00;
$item1->quantidade = 1;

$item2 = new Item();
$item2->nome = "Mouse";
$item2->preco = 80.00;
$item2->quantidade = 2;

$carrinho = new Carrinho();
$carrinho->adicionarItem($item1);
$carrinho->adicionarItem($item2);

foreach ($carrinho->itens as $item) {
    echo $item->nome . " - R$ " . number_format($item->valorTotal(), 2, ',', '.') . PHP_EOL;
}

echo "Valor total da compra: R$ " . number_format($carrinho->calcularTotal(), 2, ',', '.') . PHP_EOL;
