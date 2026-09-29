@
<?php

class ConexaoBD {
    private $conexao;

    private function conectar() {
        return "Conexão estabelecida com sucesso!";
    }

    public function getConexao() {
        if ($this->conexao == null) {
            $this->conexao = $this->conectar();
        }
        return $this->conexao;
    }
}
@
