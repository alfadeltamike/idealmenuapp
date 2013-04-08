<?php

class ControllerIndex extends ControllerMVC {

    public function actionIndex() {
        $this->visao->erro = 0;
        $this->renderizar();
    }

    public function actionLogin() {
        if (isset($_POST["login"]) && isset($_POST["senha"])) {
            $usuarioDAO = new UsuarioDAO();
            $retorno = $usuarioDAO->efetuarLogin($_POST["login"], $_POST["senha"]);
            if ($retorno) {
                $usuario = new Usuario($retorno);
                $_SESSION["usuarioLogado"] = $usuario;
                Mvc::pegarInstancia()->mudarControlador("system");
                Mvc::pegarInstancia()->mudarAcao("estabelecimentos");
                Mvc::pegarInstancia()->executarAcao();
            } else {
                Mvc::pegarInstancia()->mudarAcao("index");
                $this->visao->erro = 1;
                $this->renderizar();
            }
        }
    }
    
    public function actionNovo_usuario(){
        $this->renderizar();
    }
    
    public function actionCadastrar_usuario(){
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->addUsuario($_POST["nome"], $_POST["sobrenome"], $_POST["email"], $_POST["telefone"],
                $_POST["cpf"], $_POST["senha"], $_POST["rua"], $_POST["numero"], $_POST["cidade"], $_POST["estado"],
                $_POST["bairro"], $_POST["cep"]);
        Mvc::pegarInstancia()->mudarAcao("index");
        Mvc::pegarInstancia()->executarAcao();
    }

}

?>

