<?php

class Contato
{
    public $nome;
    public $telefone;
    public $email;
}

$contato1 = new Contato();
$contato1->nome = "Miguel Brugnago";
$contato1->telefone = "(49) 99999-1111";
$contato1->email = "miguelhauck8@email.com";

$contato2 = new Contato();
$contato2->nome = "Henrique";
$contato2->telefone = "(49) 99999-2222";
$contato2->email = "henrique@email.com";

$contato3 = new Contato();
$contato3->nome = "Carlos";
$contato3->telefone = "(49) 99999-3333";
$contato3->email = "carlos@email.com";

$contatos = [$contato1, $contato2, $contato3];

echo "AGENDA DE CONTATOS" . PHP_EOL;
echo "==================" . PHP_EOL;

foreach ($contatos as $contato) {
    echo "Nome: " . $contato->nome . PHP_EOL;
    echo "Telefone: " . $contato->telefone . PHP_EOL;
    echo "E-mail: " . $contato->email . PHP_EOL;
    echo "------------------" . PHP_EOL;
}
