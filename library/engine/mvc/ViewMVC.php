<?php

class ViewMVC {

    public function renderizar($diretorio, $arquivo) {
        $local = '../app/view/';
        require $local . $diretorio . '/' . $arquivo;
    }

}

?>
