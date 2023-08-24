<?php

require_once "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de Usuário</title>
</head>

<body>
    <div class="container">
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <div class="card" style="top:40px">
                <div class="card-header">
                    <span class="card-title">Usuários</span>
                </div>
                <div class="card-body">
                </div>
                <div class="form-group form-row">
                    <label for="login" class="col-sm-2 col-form-label text-right">Login:</label>
                    <input type="text" name="login" id="login" class="form-control col-sm-8" value="<?php echo isset($usuario) ? $usuario->getLogin() : '' ?> ">
                </div>
                <div class="form-group form-row">
                    <label for="senha" class="col-sm-2 col-form-label text-right">Senha:</label>
                    <input type="password" name="senha1" id="senha1" class="form-control col-sm-8" value="<?php echo isset($usuario) ? $usuario->getSenha() : '' ?>">
                </div>
                <div class="form-group form-row">
                    <label for="login" class="col-sm-2 col-form-label text-right">Confirmação da Senha:</label>
                    <input type="password" name="senha2" id="senha2" class="form-control col-sm-8">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Tipo:</label>
                    <select name="tipo" id="tipo" class="form-control col-sm-8">
                        <option value="0">**SELECIONE**</option>
                        <option value="A" <?php echo isset($usuario) && $usuario->getPermissao() == 'A' ? 'selected' : '' ?>>Administrador</option>
                        <option value="C" <?php echo isset($usuario) && $usuario->getPermissao() == 'C' ? 'selected' : '' ?>>Comum</option>
                    </select>
                </div>
                <div class="card-footer">
                    <input type="submit" name="btnSalvar" id="btnSalvar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</body>

<?php

if (isset($_POST['btnSalvar'])) {
    require_once 'controller/UsuarioController.php';
    call_user_func(array('UsuarioController', 'salvar'));
    header('Location:index.php?action=listar');
}

?>

</html>