<?php

class Endereco {

    private $idEndereco;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $latitude;
    private $longitude;

    function __construct($endereco) {
        $this->idEndereco = $endereco->idEndereco;
        $this->rua = $endereco->rua;
        $this->numero = $endereco->numero;
        $this->bairro = $endereco->bairro;
        $this->cidade = $endereco->cidade;
        $this->estado = $endereco->estado;
        $this->cep = $endereco->cep;
        $this->latitude = $endereco->latitude;
        $this->longitude = $endereco->longitude;
    }

    public function getIdEndereco() {
        return $this->idEndereco;
    }

    public function setIdEndereco($idEndereco) {
        $this->idEndereco = $idEndereco;
    }

    public function getRua() {
        return $this->rua;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

}

?>
