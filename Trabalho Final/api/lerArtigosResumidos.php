<?php
    include_once '../database/Connection.php';
    include_once '../models/Artigos.php';

    $database = new Connection();
    $artigo = new Artigos($database->connect());
    echo json_encode($artigo->lerArtigosResumidos());
?>