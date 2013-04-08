<?php

class Produto_Pedido {
    
    private $idProduto_Pedido;
    private $quantidade;
    private $opcional;
    private $id_Pedido;
    private $id_Produto;
    
    public function getIdProduto_Pedido() {
        return $this->idProduto_Pedido;
    }

    public function setIdProduto_Pedido($idProduto_Pedido) {
        $this->idProduto_Pedido = $idProduto_Pedido;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getOpcional() {
        return $this->opcional;
    }

    public function setOpcional($opcional) {
        $this->opcional = $opcional;
    }

    public function getId_Pedido() {
        return $this->id_Pedido;
    }

    public function setId_Pedido($id_Pedido) {
        $this->id_Pedido = $id_Pedido;
    }

    public function getId_Produto() {
        return $this->id_Produto;
    }

    public function setId_Produto($id_Produto) {
        $this->id_Produto = $id_Produto;
    }

}

?>
