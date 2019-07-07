<?php
    session_start();
    require_once "models/Usuario.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iPesquisa - Registro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-layout.css" rel="stylesheet">
    <link href="css/blog-registro.css" rel="stylesheet">
    <link href="css/perfil.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">iPesquisa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <?php
                        if(isset($_SESSION['idUser'])):
                        echo '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Olá ' . $_SESSION['nomeUser'] . '
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./novaPostagem.php">Criar nova postagem</a>
                                    <a class="dropdown-item" href="./perfil.php">Visualizar meu perfil</a>
                                    <a class="dropdown-item" href="./editarPerfil.php">Editar perfil</a>
                                    <a class="dropdown-item" href="./api/sair.php">Sair</a>
                                </li>';
                    ?>
                    <?php
                        else:
                        echo '
                            <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registro</a>
                            </li>';
                        endif
                    ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
    if(isset($_SESSION['idUser'])):
        $usuario = new Usuario($_SESSION['idUser']);
        $artigos = $usuario->getArtigos();
?>
    <!-- Page Content -->
<div id="wrapper">
    <div class="container body-content">
        <div class="row content">
            <div class="col-md-9">
                <div class="conteudo-registro">
                    <div class="col-md-12 order-md-1">
                        <div class="needs-validation">
                            <div class="row">
                                <h3 class="mb-3"><strong>Perfil Pessoal</strong></h3>
                            </div>

                                <?php if(isset($_SESSION['tipoMsg'])):?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php    if($_SESSION['tipoMsg']):?>
                                                        <div class="alert alert-success" role="alert">
                                                            <?php echo $_SESSION['msg'] ?>
                                                        </div>
                                            <?php   else: ?>
                                                        <div class="alert alert-danger" role="alert">
                                                            <?php echo $_SESSION['msg'] ?>
                                                        </div>
                                            <?php   endif ?>
                                        </div>
                                    </div>
                                <?php endif;
                                    unset($_SESSION['tipoMsg']);
                                    unset($_SESSION['msg']);
                                ?>


                            <div class="row">
                                <h6 class="mb-3"><strong>Identificação</strong></h6>
                                <div class="col-md-12 mb-3">
                                    <p class="mb-1 txt-perfil" ><strong>Nome completo:</strong>&nbsp&nbsp<?php echo $usuario->getPrimeiroNome() . " " . $usuario->getUltimoNome() ?></p>
                                    <p class="mb-1 txt-perfil"><strong><?php echo $usuario->getTipoDocumento() ?>:</strong>&nbsp&nbsp<?php echo $usuario->getNumeroDocumento() ?></p>
                                    <p class="mb-1 txt-perfil"><strong>Tipo Usuário :</strong>&nbsp&nbsp<?php echo $usuario->getTipoUsuario() ?></p>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <div class="row">
                                <h6 class="mb-3"><strong>Contato</strong></h6>
                                <div class="col-md-12 mb-3">
                                    <p class="mb-3 txt-perfil"><strong>E-mail:</strong>&nbsp&nbsp<?php echo $usuario->getEmail() ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <p class="mb-3 txt-perfil"><strong>Telefone:</strong>&nbsp&nbsp<?php echo $usuario->getTelefone() ?></p>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <p class="mb-3 txt-perfil"><strong>Celular:</strong>&nbsp&nbsp<?php echo $usuario->getCelular() ?></p>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row">
                                <h6 class="mb-3"><strong>Endereço</strong></h6>
                                <div class="col-md-12 mb-3">
                                    <p class="mb-3 txt-perfil"><strong>Endereço:</strong>&nbsp&nbsp<?php echo $usuario->getEndereco() ?></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <p class="mb-3 txt-perfil"><strong>Bairro:</strong>&nbsp&nbsp<?php echo $usuario->getBairro() ?></p>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <p class="mb-3 txt-perfil"><strong>Estado:</strong>&nbsp&nbsp<?php echo $usuario->getEstado() ?></p>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <p class="mb-3 txt-perfil"><strong>País:</strong>&nbsp&nbsp<?php echo $usuario->getPais() ?></p>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <div class="row">
                                <h6 class="mb-3"><strong>Meus artigos</strong></h6>
                            </div>
                            <?php foreach($artigos as $artigo): ?>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <?php echo $artigo->tituloPostagem ?>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <?php echo $artigo->resumo ?>
                                                </p>
                                                <a href="postagem.php?id=<?php echo $artigo->id ?>" class="btn btn-primary">Ir para o artigo</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Search Widget -->
                <div class="card my-3">
                    <h5 class="card-header">Ações</h5>
                    <div class="card-body">
                        <a href="editarPerfil.php" class="btn-editar-perfil">Editar Perfil</a>
                    </div>
                </div>

                <div class="card my-3">
                    <h5 class="card-header">Redes Sociais</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="<?php echo $usuario->getLattes() ?>" >Lattes</a>
                        </div>
                        <div class="mb-3">
                            <a href="<?php echo $usuario->getLinkedin() ?>">Linkedin</a>
                        </div>
                        <div class="mb-3">
                            <a href="<?php echo $usuario->getTwitter() ?>" >Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<?php
else:
    header("Location: login.php");
endif ?>

    <!-- Footer -->
    <footer class="py-5 bg-success">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; iPesquisa UFFS 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
