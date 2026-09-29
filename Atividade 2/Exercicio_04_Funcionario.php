@
<?php

class Funcionario {
    protected $salario;
}

class Gerente extends Funcionario {
    public function definirSalario($valor) {
        $this->salario = $valor;
    }

    public function obterSalario() {
        return $this->salario;
    }
}
@
