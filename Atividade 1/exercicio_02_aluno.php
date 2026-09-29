<?php

class Aluno
{
    public $nome;
    public $media;

    public function verificarAprovacao()
    {
        return $this->media >= 7.0;
    }
}

$aluno1 = new Aluno();
$aluno1->nome = "Miguel";
$aluno1->media = 8.5;

$aluno2 = new Aluno();
$aluno2->nome = "Henrique";
$aluno2->media = 6.0;

echo $aluno1->nome . ": " . ($aluno1->verificarAprovacao() ? "Aprovado" : "Reprovado") . PHP_EOL;
echo $aluno2->nome . ": " . ($aluno2->verificarAprovacao() ? "Aprovado" : "Reprovado") . PHP_EOL;
