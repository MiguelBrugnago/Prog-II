@
<?php

class Pedido {
    private $itens = [];

    public function inserirItem($nomeItem) {
        $this->itens[] = $nomeItem;
    }

    public function listarItens() {
        return $this->itens;
    }
}
@
