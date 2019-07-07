<?php
    include_once '../database/Connection.php';
    include_once '../models/Usuario.php';

    $database = new Connection();
    $usuario = new Usuario($database->connect());

    $resultInsert = $usuario->cadastrarUsuario($_POST);

    if ($resultInsert)
        header('Location: ../index.php?cadastro=true');
    else
        header('Location: ../index.php?cadastro=false');