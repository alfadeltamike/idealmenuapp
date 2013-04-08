<?php

class Cardapio {
    
    private $idCardapio;
    private $id_Estabelecimento;
    
    public function getIdCardapio() {
        return $this->idCardapio;
    }

    public function setIdCardapio($idCardapio) {
        $this->idCardapio = $idCardapio;
    }

    public function getId_Estabelecimento() {
        return $this->id_Estabelecimento;
    }

    public function setId_Estabelecimento($id_Estabelecimento) {
        $this->id_Estabelecimento = $id_Estabelecimento;
    }

}

?>
