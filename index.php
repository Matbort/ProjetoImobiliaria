<?php
session_start();


require_once 'controller/UsuarioController.php';


require_once 'head.php';

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
?>





































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo">
    <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"></script>
</head>
<body>

<?/*
    if(isset($_GET['action' ])){
        if($_GET['action'] == 'editar'){
            $usuario = call_user_func(array('UsuarioController', 'editar'),$_GET['id']);
            require_once 'view/cadUsuario.php';
        }

        if($_GET['action'] == 'listar'){
            require_once 'view/listUsuario.php';
        }

        if($_GET['action'] == 'excluir'){
            $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET['id']);
            require_once 'view/listUsuario.php';
        }
    }else{
        require_once 'view/cadUsuario.php';
    }

    require_once 'foot.php'

    


?>
</body>
</html>



