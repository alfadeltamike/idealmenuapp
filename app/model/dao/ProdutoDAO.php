<?php

class ProdutoDAO {
    
//    public $wsdl_url = 'http://maximus.unifal-mg.edu.br:8080/WebServiceIdealMenu/WsIdealMenu?WSDL';
    public $wsdl_url = 'http://localhost:8080/WebServiceIdealMenu_local/WsIdealMenu?wsdl';
    
    public function addProduto($nome, $descricao, $preco, $idImagem, $idCategoria){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("nome" => $nome, "descricao" => $descricao, "preco" => $preco, "id_Imagem" => $idImagem, "id_Categoria" => $idCategoria);
            $resultado = $cliente->addProduto($parametros);
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
    
    public function updateProduto($idProduto, $nome, $descricao, $preco, $idCategoria){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idProduto" => $idProduto, "nome" => $nome, "descricao" => $descricao, "preco" => $preco, "id_Categoria" => $idCategoria);
            $resultado = $cliente->updateProduto($parametros);
//            var_dump($resultado); die();
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
    
    public function deleteProduto($idProduto, $idCategoria, $idImagem){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idProduto" => $idProduto, "idCategoria" => $idCategoria, "idImagem" => $idImagem);
            $resultado = $cliente->deleteProduto($parametros);
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
    
    public function getProduto($idProduto){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idProduto" => $idProduto);
            $resultado = $cliente->getProduto($parametros);
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
    
    public function getProdutos($idEstabelecimento){
        $cliente = new SoapClient($this->wsdl_url);
        try {
            $parametros = array("idEstabelecimento" => $idEstabelecimento);
            $resultado = $cliente->getProdutos($parametros);
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
