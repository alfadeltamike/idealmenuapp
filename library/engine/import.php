<?php

/*
 * Arquivo de importação da pasta app do projeto.
 * Contém apenas comandos de importação
 */

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/idealmenuapp');

require ROOT_PATH . '/library/engine/AutoLoad.php';
require ROOT_PATH . '/library/engine/mvc/ViewMVC.php';
require ROOT_PATH . '/library/engine/mvc/ControllerMVC.php';
require ROOT_PATH . '/library/engine/Mvc.php';
require ROOT_PATH . '/app/model/dao/UsuarioDAO.php';
require ROOT_PATH . '/app/model/vo/Usuario.php';
require ROOT_PATH . '/app/model/dao/EstabelecimentoDAO.php';
require ROOT_PATH . '/app/model/vo/Estabelecimento.php';
require ROOT_PATH . '/app/model/vo/Endereco.php';
require ROOT_PATH . '/app/model/dao/ImagemDAO.php';
require ROOT_PATH . '/app/model/vo/Categoria.php';
require ROOT_PATH . '/app/model/dao/CategoriaDAO.php';
require ROOT_PATH . '/app/model/vo/Produto.php';
require ROOT_PATH . '/app/model/dao/ProdutoDAO.php';
require ROOT_PATH . '/app/model/vo/Mesa.php';
require ROOT_PATH . '/app/model/dao/MesaDAO.php';


?>
