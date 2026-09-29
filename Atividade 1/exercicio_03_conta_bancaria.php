<?php

class ContaBancaria
{
    public $titular;
    public $saldo;

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar($valor)
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }

        return false;
    }
}

$conta = new ContaBancaria();
$conta->titular = "Miguel Brugnago";
$conta->saldo = 1000.00;

$conta->depositar(500.00);

if ($conta->sacar(250.00)) {
    echo "Saque de R$ 250,00 realizado com sucesso." . PHP_EOL;
} else {
    echo "Não foi possível realizar o saque." . PHP_EOL;
}

echo "Titular: " . $conta->titular . PHP_EOL;
echo "Saldo final: R$ " . number_format($conta->saldo, 2, ',', '.') . PHP_EOL;
