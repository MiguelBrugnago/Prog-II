<?php

class Carro
{
    public $marca;
    public $modelo;
    public $ano;

    public function exibirInformacoes()
    {
        echo "Marca: " . $this->marca . PHP_EOL;
        echo "Modelo: " . $this->modelo . PHP_EOL;
        echo "Ano: " . $this->ano . PHP_EOL;
    }
}

$meuCarro = new Carro();
$meuCarro->marca = "Volkswagen";
$meuCarro->modelo = "Saveiro 1.6";
$meuCarro->ano = 1997;

$meuCarro->exibirInformacoes();
