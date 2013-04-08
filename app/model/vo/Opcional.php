<?php

class Opcional {
    
    private $idOpcional;
    private $nome;
    private $preco;
    private $id_Produto;
    
    public function getIdOpcional() {
        return $this->idOpcional;
    }

    public function setIdOpcional($idOpcional) {
        $this->idOpcional = $idOpcional;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getId_Produto() {
        return $this->id_Produto;
    }

    public function setId_Produto($id_Produto) {
        $this->id_Produto = $id_Produto;
    }

}

?>
