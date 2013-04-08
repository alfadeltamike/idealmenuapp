<?php

class UsuarioDAO {
    
//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';

    public function efetuarLogin($email, $senha) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("email" => $email, "senha" => $senha);
            $resultado = $cliente->efetuarLogin($parametros);
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
    
    public function addUsuario($nome, $sobrenome, $email, $telefone, $cpf, $senha, $rua, $numero, $cidade, $estado, $bairro, $cep) {
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "sobrenome" => $sobrenome, "email" => $email, "telefone" => $telefone,
                "cpf" => $cpf, "senha" => $senha, "rua" => $rua, "numero" => $numero, "cidade" => $cidade,
                "estado" => $estado, "bairro" => $bairro, "cep" => $cep);
            $resultado = $cliente->addUsuario($parametros);
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
