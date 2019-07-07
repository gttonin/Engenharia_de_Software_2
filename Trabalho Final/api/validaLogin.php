<?php
    include_once '../database/Connection.php';
    include_once '../models/Usuario.php';

    $database = new Connection();
    $usuario = new Usuario($database->connect());

    $resultLogin = $usuario->validaUsuario($_POST);


    var_dump($_POST);
    if ($resultLogin)
        header('Location: ../index.php');
    else
        header('Location: ../login.php?login=false');