<?php
session_start();


require_once 'controller/UsuarioController.php';


require_once 'head.php';
ob_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
    require_once 'view/menu.php';
    if (isset($_GET["page"]) &&  $_GET["page"] == "usuario") {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'editar') {

                $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
                require_once 'view/cadUsuario.php';
            }
            if ($_GET['action'] == 'listar') {
                require_once 'view/listUsuario.php';
            }

            if ($_GET['action'] == 'excluir') {

                $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
                require_once 'view/listUsuario.php';
                return;
            }
        } else {
            require_once 'view/cadUsuario.php';
        }
    }

    if (isset($_GET["page"]) &&  $_GET["page"] == "imovel") {
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'editar') {

                $usuario = call_user_func(array('ImovelController', 'editar'), $_GET['id']);
                require_once 'view/cadImovel.php';
            }
            if ($_GET['action'] == 'listar') {
                require_once 'view/listImovel.php';
            }

            if ($_GET['action'] == 'excluir') {

                $usuario = call_user_func(array('ImovelController', 'excluir'), $_GET['id']);
                require_once 'view/listImovel.php';
            }
        } else {
            require_once 'view/cadImovel.php';
        }
    }
} else {
    if (isset($_GET['logar'])) {
        require_once 'view/login.php';
    } else {
        require_once 'principal.php';
    }
}

require_once 'foot.php';
ob_end_flush();
?>