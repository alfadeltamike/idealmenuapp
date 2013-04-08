<?php

class Mvc {

    /**
     * Nome do controlador
     * 
     * @var string
     */
    protected $controlador;

    /**
     * Nome da acao
     * 
     * @var string
     */
    protected $acao;

    /**
     * Id
     * 
     * @var string
     */
    protected $id;

    /**
     * Instancia única do objeto Mvc
     * 
     * @var Mvc
     */
    private static $instancia;

    /**
     * Implementação do Singleton
     *
     * @return Mvc 
     */
    public static function pegarInstancia() {
        //verifica se a instância existe
        if (!self::$instancia) {
            self::$instancia = new Mvc();
        }

        return self::$instancia;
    }

    /**
     * Construtor privado para forçar o Singleton
     * 
     * @return void
     */
    private function __construct() {
        
    }

    /**
     * Pega o controlador da requisição atual
     * 
     * @return string  
     */
    public function pegarControlador() {
        return $this->controlador;
    }

    public function mudarControlador($controlador) {
        $this->controlador = $controlador;
    }

    /**
     * Pega a ação da requisição atual
     * 
     * @return string  
     */
    public function pegarAcao() {
        return $this->acao;
    }

    public function mudarAcao($acao) {
        $this->acao = $acao;
    }

    /**
     * Pega a id na url
     * 
     * @return string
     */
    public function pegarId() {
        return $this->id;
    }

    public function executarAcao() {
        //padronizacao de nomes
        $this->controlador = ucfirst(strtolower($this->controlador));
        $this->acao = ucfirst(strtolower($this->acao));
        $this->id = strtolower($this->id);

        $nomeClasseControlador = 'Controller' . $this->controlador;
        $nomeAcao = 'action' . $this->acao;
//        if(!(session_status() == PHP_SESSION_ACTIVE)){
//            session_start();
//        }
        //verifica se a classe existe
        if (class_exists($nomeClasseControlador)) {
            $controladorObjeto = new $nomeClasseControlador;
            //verifica se o metodo existe
            if (method_exists($controladorObjeto, $nomeAcao)) {                
                $controladorObjeto->$nomeAcao();
                return true;
            }
            throw new Exception('Acao nao existente.');
        }
        throw new Exception('Controlador nao existente.');
    }

    public function rodar() {
        //pega o modulo, controlador e acao        
        $this->controlador = isset($_GET['c']) ? $_GET['c'] : 'index';
        $this->acao = isset($_GET['a']) ? $_GET['a'] : 'index';
        $this->id = isset($_GET['id']) ? $_GET['id'] : '';
        $this->controlador = ucfirst(strtolower($this->controlador));
        $this->acao = ucfirst(strtolower($this->acao));
        $this->id = strtolower($this->id);

        $nomeClasseControlador = 'Controller' . $this->controlador;
        $nomeAcao = 'action' . $this->acao;
        session_start();
        //verifica se a classe existe
        if (class_exists($nomeClasseControlador)) {
            $controladorObjeto = new $nomeClasseControlador;
            //verifica se o metodo existe
            if (method_exists($controladorObjeto, $nomeAcao)) {                
                $controladorObjeto->$nomeAcao();
                return true;
            }
            throw new Exception('Acao nao existente.');
        }
        throw new Exception('Controlador nao existente.');
    }

    private function __clone() {
        throw Exception('Nao pode');
    }

}

?>
