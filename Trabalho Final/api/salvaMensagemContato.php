<?php
    require_once '../models/Contato.php';

    if(isset($_POST['idPostagem']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['assunto']) && isset($_POST['mensagem'])){
        $contato = new Contato($_POST['nome'], $_POST['email'], $_POST['assunto'], $_POST['mensagem']);

        $contato->insert();

        header('Location: ../postagem.php?id=' . $_POST['idPostagem']);
    }
