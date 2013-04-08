<?php

class Produto_Opcional {
    
    private $idProduto_Opcional;
    private $quantidade;
    private $id_Produto_Pedido;
    private $id_Opcional;
    
    public function getIdProduto_Opcional() {
        return $this->idProduto_Opcional;
    }

    public function setIdProduto_Opcional($idProduto_Opcional) {
        $this->idProduto_Opcional = $idProduto_Opcional;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getId_Produto_Pedido() {
        return $this->id_Produto_Pedido;
    }

    public function setId_Produto_Pedido($id_Produto_Pedido) {
        $this->id_Produto_Pedido = $id_Produto_Pedido;
    }

    public function getId_Opcional() {
        return $this->id_Opcional;
    }

    public function setId_Opcional($id_Opcional) {
        $this->id_Opcional = $id_Opcional;
    }

}

?>
