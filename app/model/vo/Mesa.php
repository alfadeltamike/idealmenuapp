<?php

class Mesa {

    private $idMesa;
    private $nome;
    private $qrcode;
    private $ocupado;
    private $id_Estabelecimento;

    function __construct($retorno) {
        $this->idMesa = $retorno->idMesa;
        $this->nome = $retorno->nome;
        $this->qrcode = $retorno->qrcode;
        $this->ocupado = $retorno->ocupado;
        $this->id_Estabelecimento = $retorno->id_Estabelecimento;
    }

    public function getIdMesa() {
        return $this->idMesa;
    }

    public function setIdMesa($idMesa) {
        $this->idMesa = $idMesa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQrcode() {
        return $this->qrcode;
    }

    public function setQrcode($qrcode) {
        $this->qrcode = $qrcode;
    }

    public function getOcupado() {
        return $this->ocupado;
    }

    public function setOcupado($ocupado) {
        $this->ocupado = $ocupado;
    }

    public function getId_Estabelecimento() {
        return $this->id_Estabelecimento;
    }

    public function setId_Estabelecimento($id_Estabelecimento) {
        $this->id_Estabelecimento = $id_Estabelecimento;
    }

}

?>
