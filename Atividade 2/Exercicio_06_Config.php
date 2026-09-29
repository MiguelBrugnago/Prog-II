@
<?php

class Config {
    protected $parametros = [];
}

class AppConfig extends Config {
    public function definirParametro($chave, $valor) {
        $this->parametros[$chave] = $valor;
    }

    public function lerParametro($chave) {
        return $this->parametros[$chave];
    }
}
@
