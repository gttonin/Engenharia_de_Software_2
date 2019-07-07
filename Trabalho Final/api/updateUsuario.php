<?php
    session_start();

    require_once "../models/Usuario.php";



    $usuario = new Usuario;

    $usuario->setPrimeiroNome($_POST['primeiroNome']);
    $usuario->setUltimoNome($_POST['ultimoNome']);
    $usuario->setNumeroDocumento($_POST['documento']);
    $usuario->setTipoDocumento($_POST['tipoDocumento']);
    $usuario->setTipoUsuario($_POST['tipoUsuario']);
    $usuario->setEntidade($_POST['entidade']);
    $usuario->setEmail($_POST['email']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setCelular($_POST['celular']);
    $usuario->setEndereco($_POST['endereco']);
    $usuario->setBairro($_POST['bairro']);
    $usuario->setEstado($_POST['estado']);
    $usuario->setPais($_POST['pais']);
    $usuario->setLattes($_POST['linkLattes']);
    $usuario->setLinkedin($_POST['linkedin']);
    $usuario->setTwitter($_POST['twitter']);

    if($usuario->update(intval($_POST['id']))){
        $_SESSION['tipoMsg'] = true;
        $_SESSION['msg'] = "Perfil atualizado com sucesso!";
        header("Location: ../perfil.php?id=" . $_POST['id']);
    }else {
        $_SESSION['tipoMsg'] = false;
        $_SESSION['msg'] = "Ocorreu um erro ao atualizar o perfil, tente novamente mais tarde!";
        header("Location: ../perfil.php?id=" . $_POST['id']);
    }

?>
