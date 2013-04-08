<?php

class MesaDAO {
    
//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';
    
    public function addMesa($nome, $qrcode, $idEstabelecimento){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "qrcode" => $qrcode, "idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->addMesa($parametros);
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
    
    public function updateMesa($idMesa, $nome, $qrcode){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idMesa" => $idMesa, "nome" => $nome, "qrcode" => $qrcode);
            $resultado = $cliente->updateMesa($parametros);
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
    
    public function deleteMesa($idMesa){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idMesa" => $idMesa);
            $resultado = $cliente->deleteMesa($parametros);
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
    
    public function getMesas($idEstabelecimento){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->getMesas($parametros);
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
    
    public function getMesa($idMesa){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idMesa" => $idMesa);
            $resultado = $cliente->getMesa($parametros);
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
