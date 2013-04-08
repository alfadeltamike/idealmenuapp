<?php

class Produto {

    private $idProduto;
    private $nome;
    private $descricao;
    private $preco;
    private $id_Imagem;
    private $id_Categoria;

    function __construct($retorno) {
        $this->idProduto = $retorno->idProduto;
        $this->nome = $retorno->nome;
        $this->descricao = $retorno->descricao;
        $this->preco = $retorno->preco;
        $this->id_Imagem = $retorno->id_Imagem;
        $this->id_Categoria = $retorno->id_Categoria;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getId_Imagem() {
        return $this->id_Imagem;
    }

    public function setId_Imagem($id_Imagem) {
        $this->id_Imagem = $id_Imagem;
    }

    public function getId_Categoria() {
        return $this->id_Categoria;
    }

    public function setId_Categoria($id_Categoria) {
        $this->id_Categoria = $id_Categoria;
    }

}

?>
