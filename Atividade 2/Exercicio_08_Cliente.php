@
<?php

class Cliente {
    public $nome;
    protected $cpf;
    private $telefone;

    public function testarAcessos() {
        $this->nome = "João";
        $this->cpf = "123.456.789-00";
        $this->telefone = "99999-8888";
    }
}

$cliente = new Cliente();
$cliente->nome = "Maria";
@
