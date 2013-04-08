<?php

require '../app/model/dao/ImagemDAO.php';

$idImagem = $_GET["id"];
$imagemDAO = new ImagemDAO();
$resultado = $imagemDAO->getImagem($idImagem);

$conteudo = base64_decode($resultado->conteudo);
$tipo = $resultado->tipo;

header("Content-type: " . $tipo . "");
echo $conteudo;

?>