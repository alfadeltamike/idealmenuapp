<?php

class CategoriaDAO {

//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';

    public function addCategoria($nome, $idEstabelecimento, $idImagem) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "idImagem" => $idImagem, "idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->addCategoria($parametros);
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

    public function updateCategoria($idCategoria, $nome) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idCategoria" => $idCategoria, "nome" => $nome);
            $resultado = $cliente->updateCategoria($parametros);
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

    public function deleteCategoria($idCategoria, $idImagem) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idCategoria" => $idCategoria, "idImagem" => $idImagem);
            $resultado = $cliente->deleteCategoria($parametros);
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

    public function getCategorias($idEstabelecimento) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->getCategorias($parametros);
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

    public function getCategoria($idCategoria) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idCategoria" => $idCategoria);
            $resultado = $cliente->getCategoria($parametros);
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
