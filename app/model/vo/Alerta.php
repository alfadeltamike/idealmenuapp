<?php

class Alerta {
    
    private $idAlerta;
    private $tipo;
    private $id_Generico;   
    
    public function getIdAlerta() {
        return $this->idAlerta;
    }

    public function setIdAlerta($idAlerta) {
        $this->idAlerta = $idAlerta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getId_Generico() {
        return $this->id_Generico;
    }

    public function setId_Generico($id_Generico) {
        $this->id_Generico = $id_Generico;
    }

}

?>
