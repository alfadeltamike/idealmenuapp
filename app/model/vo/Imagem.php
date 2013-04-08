<?php

class Imagem {
    private $idImagem;
    private $nome;
    private $conteudo;
    
    public function getIdImagem() {
        return $this->idImagem;
    }

    public function setIdImagem($idImagem) {
        $this->idImagem = $idImagem;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

}

?>
