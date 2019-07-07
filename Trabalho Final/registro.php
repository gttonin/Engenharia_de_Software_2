<?php
  session_start();
  if(isset($_SESSION['idUser']))
  header("Location: index.php");
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
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Registro</a>
                        <span class="sr-only">(current)</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="wrapper">
        <div class="container body-content">
            <div class="row content">
                <div class="conteudo-registro">
                    <form action="./api/cadastrarUsuario.php" method="post">
                        <div class="row">
                            <div class="col-md-4 order-md-2 mb-4">
                            <div class="card p-2">
                                <h4 class="mb-3">Redes Sociais</h4>
                            
                                <div class="form-redes-sociais">
                                    <div class="mb-3">
                                        <label for="linkLattes">Link para o Lattes</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="linkLattes" name="linkLattes">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="linkedin">Linkedin</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="twitter">Twitter</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="twitter" name="twitter">
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
                                            <input type="text" class="form-control" id="primeiroNome" name="primeiroNome" required>
                                            <div class="invalid-feedback">Um nome válido é requerido.</div>
                                        </div>
                                        <!-- Primeiro Nome -->

                                        <div class="col-md-6 mb-3">
                                            <label for="ultimoNome">Último Nome</label>
                                            <input type="text" class="form-control" id="ultimoNome" name="ultimoNome" required>
                                            <div class="invalid-feedback">Um ultimo válido é requerido.</div>
                                        </div>
                                        <!-- Ultimo Nome --->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="documento">Número do Documento</label>
                                            <input type="text" class="form-control" id="documento" name="documento" required>
                                            <div class="invalid-feedback">Um número de documento válido é requerido.</div>
                                        </div>
                                        <!-- Número do Documento -->

                                        <div class="col-md-6 mb-3">
                                            <label for="tipoDocumento">Tipo do documento</label>
                                            <select class="form-control" id="tipoDocumento" name="tipoDocumento" required>
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
                                            <select class="form-control" id="tipoUsuario" name="tipoUsuario" required>
                                                <option value="Aluno">Aluno</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Pesquisador">Pesquisador</option>
                                                <option value="Empresa">Empresa</option>
                                            </select>
                                        </div>
                                        <!-- Tipo de usuário -->

                                        <div class="col-md-6 mb-3">
                                            <label for="tipoEntidade">Entidade Pertencente</label>
                                            <select class="form-control" id="tipoEntidade" name="tipoEntidade" required>
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
                                        <input type="email" class="form-control" id="email" name="email" placeholder="voce@exemplo.com.br" required>
                                        <div class="invalid-feedback">Um e-mail válido é requerido.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="senha">
                                            Senha para acessar o iPesquisa
                                        </label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div>
                                    <!-- E-mail e senha-->

                                    <hr class="mb-4" style="margin-top: 2rem!important;">
                                    <h4 class="mb-4">Endereço</h4>

                                    <div class="mb-3">
                                        <label for="endereco">Endereço</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Av. Getúlio Vargas, 2351 - E" required>
                                        <div class="invalid-feedback">Um endereço válido é requerido.</div>
                                    </div>
                                    <!-- Logradouro -->

                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Centro" required>
                                            <div class="invalid-feedback">Um bairro válido é requerido.</div>
                                        </div>
                                        <!-- Bairro -->

                                        <div class="mb-3 col-md-4">
                                            <label for="estado">Estado</label>
                                            <input type="text" class="form-control" id="estado" name="estado" placeholder="Santa Catarina" required>
                                            <div class="invalid-feedback">Um estado válido é requerido.</div>
                                        </div>
                                        <!-- Estado -->

                                        <div class="mb-3 col-md-4">
                                            <label for="pais">País</label>
                                            <input type="text" class="form-control" id="pais" name="pais" placeholder="Brasil" required>
                                            <div class="invalid-feedback">Um pais válido é requerido.</div>
                                        </div>
                                        <!-- País -->

                                    </div>
                                    <!-- Endereço -->

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="telefone">Telefone</label>
                                            <input type="phone" class="form-control" id="telefone" name="telefone" placeholder="(00)1234-5678">
                                            <div class="invalid-feedback">Um Telefone válido é requerido.</div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label for="celular">Celular</label>
                                            <input type="phone" class="form-control" id="celular" name="celular" placeholder="(00) 9-1234-5678">
                                            <div class="invalid-feedback">Um celular válido é requerido.</div>
                                        </div>
                                    </div>
                                    <!-- Telefone -->

                                    <input class="btn btn-lg btn-lock bg-success" type="submit" id="botao-salvar" value="Cadastrar" />
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