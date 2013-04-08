<?php

class Usuario {
    
    private $idUsuario;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $cpf;
    private $senha;
    private $id_Endereco;
    
    function __construct($usuario) {
        $this->idUsuario = $usuario->idUsuario;
        $this->nome = $usuario->nome;
        $this->sobrenome = $usuario->sobrenome;
        $this->email = $usuario->email;
        $this->telefone = $usuario->telefone;
        $this->cpf = $usuario->cpf;
        $this->id_Endereco = $usuario->id_Endereco;
    }
    
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getId_Endereco() {
        return $this->id_Endereco;
    }

    public function setId_Endereco($id_Endereco) {
        $this->id_Endereco = $id_Endereco;
    }

}

?>
