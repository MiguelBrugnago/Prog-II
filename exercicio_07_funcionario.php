<?php

class Funcionario
{
    public $nome;
    public $salario;

    public function reajustarSalario($porcentagem)
    {
        $this->salario += $this->salario * ($porcentagem / 100);
    }
}

$funcionario = new Funcionario();
$funcionario->nome = "Caneta Azul";
$funcionario->salario = 2500.00;

$porcentagem = 10;
$funcionario->reajustarSalario($porcentagem);

echo "Funcionário: " . $funcionario->nome . PHP_EOL;
echo "Reajuste: " . $porcentagem . "%" . PHP_EOL;
echo "Novo salário: R$ " . number_format($funcionario->salario, 2, ',', '.') . PHP_EOL;
