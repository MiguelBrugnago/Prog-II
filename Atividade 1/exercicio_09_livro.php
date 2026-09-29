<?php

class Livro
{
    public $titulo;
    public $autor;
    public $ano;
}

$livro1 = new Livro();
$livro1->titulo = "Livro A";
$livro1->autor = "Autor A";
$livro1->ano = 2014;

$livro2 = new Livro();
$livro2->titulo = "Livro B";
$livro2->autor = "Autor B";
$livro2->ano = 2018;

$livro3 = new Livro();
$livro3->titulo = "Livro C";
$livro3->autor = "Autor C";
$livro3->ano = 2022;

$livros = [$livro1, $livro2, $livro3];

echo "LIVROS PUBLICADOS APÓS 2015" . PHP_EOL;
echo "============================" . PHP_EOL;

foreach ($livros as $livro) {
    if ($livro->ano > 2015) {
        echo "Título: " . $livro->titulo . PHP_EOL;
        echo "Autor: " . $livro->autor . PHP_EOL;
        echo "Ano: " . $livro->ano . PHP_EOL;
        echo "----------------------------" . PHP_EOL;
    }
}
