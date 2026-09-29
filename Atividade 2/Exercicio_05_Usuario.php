@
<?php

class Usuario {
    private $senha;

    public function setSenha($novaSenha) {
        $this->senha = $novaSenha;
    }

    public function verificarSenha($senhaTentativa) {
        return $this->senha === $senhaTentativa;
    }
}
@
