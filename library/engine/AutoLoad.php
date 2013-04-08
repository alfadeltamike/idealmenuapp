<?php

class AutoLoad {
    public static function carregar($nomeClasse) {
        //lista de diretorios que as classes serão pesquisadas
        $diretorios = array('../app/controller', '../library');

        //transforma parte do nome da classe para diretorio
        $nomeClasse = str_replace(array('_', '\\'), '/', $nomeClasse);

        //procura as classes nos diretorios definidos 
        foreach ($diretorios as $diretorio) {
            //pega o caminho real do diretorio e junta com o nome da classe
            $localClasse = realpath($diretorio) . '/' . $nomeClasse . ".php";

            //checa se o arquivo existe
            if (file_exists($localClasse)) {
                //inclue o arquivo
                require($localClasse);
                //returna verdadeiro quando achou e para o loop
                return true;
            }
        }
        return false;
    }

    /**
     * Registra o método para ser usado no autoload
     */
    public static function registrar() {
        spl_autoload_register('AutoLoad::carregar');
    }

}


?>
