<?php

class Categoria {

    private $idCategoria;
    private $nome;
    private $qtd_produtos;
    private $id_Imagem;

    function __construct($retorno) {
        $this->idCategoria = $retorno->idCategoria;
        $this->nome = $retorno->nome;
        $this->qtd_produtos = $retorno->qtdProdutos;
        $this->id_Imagem = $retorno->id_Imagem;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQtd_produtos() {
        return $this->qtd_produtos;
    }

    public function setQtd_produtos($qtd_produtos) {
        $this->qtd_produtos = $qtd_produtos;
    }

    public function getId_Imagem() {
        return $this->id_Imagem;
    }

    public function setId_Imagem($id_Imagem) {
        $this->id_Imagem = $id_Imagem;
    }

}

?>
