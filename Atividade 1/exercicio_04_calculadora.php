<?php

class Calculadora
{
    public function somar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        if ($b == 0) {
            return "Não é possível dividir por zero.";
        }

        return $a / $b;
    }
}

$calculadora = new Calculadora();
$a = 20;
$b = 5;

echo "Soma: " . $calculadora->somar($a, $b) . PHP_EOL;
echo "Subtração: " . $calculadora->subtrair($a, $b) . PHP_EOL;
echo "Multiplicação: " . $calculadora->multiplicar($a, $b) . PHP_EOL;
echo "Divisão: " . $calculadora->dividir($a, $b) . PHP_EOL;
