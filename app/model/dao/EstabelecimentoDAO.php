<?php

class EstabelecimentoDAO {

//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';

    public function addEstabelecimento($nome, $rua, $numero, $cidade, $estado, $bairro, $cep, $latitude, $longitude, $telefone, $cnpj, $status, $idUsuario, $idImagem) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "rua" => $rua, "numero" => $numero, "cidade" => $cidade, "estado" => $estado, "bairro" => $bairro, "cep" => $cep, "latitude" => $latitude, "longitude" => $longitude, "telefone" => $telefone, "cnpj" => $cnpj, "status" => $status, "idUsuario" => $idUsuario, "idImagem" => $idImagem);
            $resultado = $cliente->addEstabelecimento($parametros);
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
    
    public function updateEstabelecimento($nome, $rua, $numero, $cidade, $estado, $bairro, $cep, $latitude, $longitude, $telefone, $cnpj, $status, $idUsuario, $idEstabelecimento, $idEndereco) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "rua" => $rua, "numero" => $numero, "cidade" => $cidade, "estado" => $estado, "bairro" => $bairro, "cep" => $cep, "latitude" => $latitude, "longitude" => $longitude, "telefone" => $telefone, "cnpj" => $cnpj, "status" => $status, "idUsuario" => $idUsuario, "idEstabelecimento" => $idEstabelecimento, "idEndereco" => $idEndereco);
            $resultado = $cliente->updateEstabelecimento($parametros);
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

    public function getEstabelecimentos($idUsuario) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idUsuario" => $idUsuario);
            $resultado = $cliente->getEstabelecimentos($parametros);
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
    
    public function getEstabelecimento($idUsuario, $idEstabelecimento) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idUsuario" => $idUsuario, "idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->getEstabelecimento($parametros);
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
