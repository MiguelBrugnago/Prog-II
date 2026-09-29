<?php

class Retangulo
{
    public $largura;
    public $altura;

    public function calcularArea()
    {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro()
    {
        return 2 * ($this->largura + $this->altura);
    }
}

$retangulo = new Retangulo();
$retangulo->largura = 5;
$retangulo->altura = 3;

echo "Largura: " . $retangulo->largura . PHP_EOL;
echo "Altura: " . $retangulo->altura . PHP_EOL;
echo "Área: " . $retangulo->calcularArea() . PHP_EOL;
echo "Perímetro: " . $retangulo->calcularPerimetro() . PHP_EOL;
