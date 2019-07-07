<?php
    include_once '../database/Connection.php';
    include_once '../models/Artigos.php';

    $database = new Connection();
    $artigo = new Artigos($database->connect());

    $resultInsert = $artigo->cadastrarArtigo($_POST);

    if ($resultInsert)
        header('Location: ../index.php?artigoCriado=true');
    else
        header('Location: ../index.php?artigoCriado=false');