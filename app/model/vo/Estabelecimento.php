<?php

class Estabelecimento {
    private $idEstabelecimento;
    private $nome;
    private $telefone;
    private $cnpj;
    private $status;
    private $id_Usuario;
    private $endereco;
    private $id_Imagem;
    
    function __construct($estabelecimento, $id_Usuario) {
        $this->idEstabelecimento = $estabelecimento->idEstabelecimento;
        $this->nome = $estabelecimento->nome;
        $this->telefone = $estabelecimento->telefone;
        $this->cnpj = $estabelecimento->cnpj;
        $this->status = $estabelecimento->status;
        $this->id_Usuario = $id_Usuario;
        $this->id_Imagem = $estabelecimento->idImagem;
        $this->endereco = new Endereco($estabelecimento->endereco);
    }
    
    public function getIdEstabelecimento() {
        return $this->idEstabelecimento;
    }

    public function setIdEstabelecimento($idEstabelecimento) {
        $this->idEstabelecimento = $idEstabelecimento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getId_Usuario() {
        return $this->id_Usuario;
    }

    public function setId_Usuario($id_Usuario) {
        $this->id_Usuario = $id_Usuario;
    }

    public function getId_Imagem() {
        return $this->id_Imagem;
    }

    public function setId_Imagem($id_Imagem) {
        $this->id_Imagem = $id_Imagem;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}

?>
