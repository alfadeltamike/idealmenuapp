<?php

class ControllerMVC {

    protected $visao;

    public function __construct() {
        $this->visao = new ViewMVC();
    }

    public function renderizar() {
        $diretorio = strtolower(Mvc::pegarInstancia()->pegarControlador());
        $arquivo = strtolower(Mvc::pegarInstancia()->pegarAcao()) . ".php";

        $this->visao->renderizar($diretorio, $arquivo);
    }

}

?>
