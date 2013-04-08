<?php

class Comanda {
    private $idComanda;
    private $total;
    private $id_Mesa;
    
    public function getIdComanda() {
        return $this->idComanda;
    }

    public function setIdComanda($idComanda) {
        $this->idComanda = $idComanda;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getId_Mesa() {
        return $this->id_Mesa;
    }

    public function setId_Mesa($id_Mesa) {
        $this->id_Mesa = $id_Mesa;
    }

}

?>
