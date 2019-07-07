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
?>
<!-- Page Content -->
<div id="wrapper">
    <div class="container body-content">
        <div class="row content">
            <div class="conteudo-registro">
                <form action="./api/updateUsuario.php" method="post">
                    <input name="id" value="<?php echo $usuario->getId() ?>" style="display: none"/>
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                        <div class="card p-2">
                            <h4 class="mb-3">Redes Sociais</h4>

                            <div class="form-redes-sociais">
                                <div class="mb-3">
                                    <label for="linkLattes">Link para o Lattes</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="linkLattes" name="linkLattes" value="<?php echo $usuario->getLattes() ?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="linkedin">Linkedin</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $usuario->getLinkedin() ?>">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="twitter">Twitter</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $usuario->getTwitter() ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-8 order-md-1">
                            <div class="needs-validation">
                                <h4 class="mb-3">Identificação</h4>
                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label for="primeiroNome">Primeiro Nome</label>
                                        <input type="text" class="form-control" id="primeiroNome" name="primeiroNome" value="<?php echo $usuario->getPrimeiroNome() ?>" required>
                                        <div class="invalid-feedback">Um nome válido é requerido.</div>
                                    </div>
                                    <!-- Primeiro Nome -->

                                    <div class="col-md-6 mb-3">
                                        <label for="ultimoNome">Último Nome</label>
                                        <input type="text" class="form-control" id="ultimoNome" name="ultimoNome" value="<?php echo $usuario->getUltimoNome() ?>" required>
                                        <div class="invalid-feedback">Um ultimo válido é requerido.</div>
                                    </div>
                                    <!-- Ultimo Nome --->
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="documento">Número do Documento</label>
                                        <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $usuario->getNumeroDocumento() ?>" required>
                                        <div class="invalid-feedback">Um número de documento válido é requerido.</div>
                                    </div>
                                    <!-- Número do Documento -->

                                    <div class="col-md-6 mb-3">
                                        <label for="tipoDocumento">Tipo do documento</label>
                                        <select class="form-control" id="tipoDocumento" name="tipoDocumento" value="<?php echo $usuario->getTipoDocumento() ?>" required>
                                            <option value="CPF">CPF</option>
                                            <option value="RG">RG</option>
                                            <option value="Matrícula">Matrícula</option>
                                        </select>
                                    </div>
                                    <!-- Tipo do Documento -->
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="tipoUsuario">Tipo de Usuário</label>
                                        <select class="form-control" id="tipoUsuario" name="tipoUsuario" value="<?php echo $usuario->getTipoUsuario() ?>" required>
                                            <option value="Aluno">Aluno</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Pesquisador">Pesquisador</option>
                                            <option value="Empresa">Empresa</option>
                                        </select>
                                    </div>
                                    <!-- Tipo de usuário -->

                                    <div class="col-md-6 mb-3">
                                        <label for="tipoEntidade">Entidade Pertencente</label>
                                        <select class="form-control" id="tipoEntidade" name="entidade" value="<?php echo $usuario->getEntidade() ?>" required>
                                            <option value="Universidade">Universidade</option>
                                            <option value="Empresa">Empresa</option>
                                            <option value="Governo">Governo</option>
                                        </select>
                                    </div>
                                    <!-- Pertence á -->
                                </div>
                                <!-- Documento -->

                                <hr class="mb-4">
                                <h4 class="mb-4">Segurança</h4>
                                <div class="mb-3">
                                    <label for="email">
                                        E-mail
                                    </label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="voce@exemplo.com.br" value="<?php echo $usuario->getEmail() ?>" required>
                                    <div class="invalid-feedback">Um e-mail válido é requerido.</div>
                                </div>
                                <!-- E-mail -->
                                <div class="mb-3">
                                    <label for="email">
                                        Nova senha para acessar o iPesquisa
                                    </label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="nova senha" value="" required>
                                    <div class="invalid-feedback">Um senha é requerido.</div>
                                </div>
                                <!-- E-mail -->

                                <h4 class="mb-4">Contato</h4>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="telefone">Telefone</label>
                                        <input type="phone" class="form-control" id="telefone" name="telefone" value="<?php echo $usuario->getTelefone() ?>" placeholder="(00)1234-5678">
                                        <div class="invalid-feedback">Um Telefone válido é requerido.</div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="celular">Celular</label>
                                        <input type="phone" class="form-control" id="celular" name="celular" value="<?php echo $usuario->getCelular() ?>" placeholder="(00) 9-1234-5678">
                                        <div class="invalid-feedback">Um celular válido é requerido.</div>
                                    </div>
                                </div>
                                <!-- Telefone -->

                                <hr class="mb-4">
                                <h4 class="mb-4">Endereço</h4>

                                <div class="mb-3">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $usuario->getEndereco() ?>" placeholder="Av. Getúlio Vargas, 2351 - E" required>
                                    <div class="invalid-feedback">Um endereço válido é requerido.</div>
                                </div>
                                <!-- Logradouro -->

                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Centro" value="<?php echo $usuario->getBairro() ?>" required>
                                        <div class="invalid-feedback">Um bairro válido é requerido.</div>
                                    </div>
                                    <!-- Bairro -->

                                    <div class="mb-3 col-md-4">
                                        <label for="estado">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $usuario->getEstado() ?>" placeholder="Santa Catarina" required>
                                        <div class="invalid-feedback">Um estado válido é requerido.</div>
                                    </div>
                                    <!-- Estado -->

                                    <div class="mb-3 col-md-4">
                                        <label for="pais">País</label>
                                        <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $usuario->getPais() ?>" placeholder="Brasil" required>
                                        <div class="invalid-feedback">Um pais válido é requerido.</div>
                                    </div>
                                    <!-- País -->

                                </div>
                                <!-- Endereço -->

                                <input class="btn btn-lg btn-lock bg-success" type="submit" id="botao-salvar" value="Atualizar" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<?php
    else:
        header("Location: login.php");
    endif
?>
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
