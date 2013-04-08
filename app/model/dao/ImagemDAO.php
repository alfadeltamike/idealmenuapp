<?php

class ImagemDAO {
    
//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';

    public function addImagem($nome, $conteudo, $tipo) {
        $cliente = new SoapClient($this->wsdl_url);
        $imagem = base64_encode($conteudo);
        try {
            $parametros = array("nome" => $nome, "imagem" => $imagem, "tipo" => $tipo);
            $resultado = $cliente->addImagem($parametros);
        } catch (SoapFault $fault) {
            echo "Fault code: {$fault->faultcode}" . "<br><br>";
            echo "Fault string: {$fault->faultstring}" . "<br><br>";
        }
        if (array_key_exists('faultCode', $resultado->return)) {
            return false;
        } else {
            return $resultado->return;
        }
    }
    
    public function getImagem($idImagem) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idImagem" => $idImagem);
            $resultado = $cliente->getImagem($parametros);
        } catch (SoapFault $fault) {
            echo "Fault code: {$fault->faultcode}" . "<br><br>";
            echo "Fault string: {$fault->faultstring}" . "<br><br>";
        }
        if (array_key_exists('faultCode', $resultado->return)) {
            return false;
        } else {
            return $resultado->return;
        }
    }
    
    public function updateImagem($idImagem, $nome, $conteudo, $tipo) {
        $cliente = new SoapClient($this->wsdl_url);
        $imagem = base64_encode($conteudo);
        try {
            $parametros = array("idImagem" => $idImagem, "nome" => $nome, "imagem" => $imagem, "tipo" => $tipo);
            $resultado = $cliente->updateImagem($parametros);
        } catch (SoapFault $fault) {
            echo "Fault code: {$fault->faultcode}" . "<br><br>";
            echo "Fault string: {$fault->faultstring}" . "<br><br>";
        }
        if (array_key_exists('faultCode', $resultado->return)) {
            return false;
        } else {
            return $resultado->return;
        }
    }
    
}

?>
