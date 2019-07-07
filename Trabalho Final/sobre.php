<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iPesquisa - Sobre</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-sobre.css" rel="stylesheet">
  <link href="css/blog-layout.css" rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Sobre</a>
            <span class="sr-only">(current)</span>  
          </li>
          <?php
            session_start();
            if(isset($_SESSION['idUser'])):
              echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Olá ' . $_SESSION['nomeUser'] . '
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./novaPostagem.php">Criar nova postagem</a>
                        <a class="dropdown-item" href="./Perfil.php?id=' . $_SESSION['idUser'] . '">Visualizar meu perfil</a>
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

  <!-- Page Content -->
  <div id="wrapper">
    <div class="container body-content">

    <div class="row content">

<!-- Blog Entries Column -->
<div class="col-md-8">

  <h4 class="mb-3">Sobre</h4>
  <hr class="mb-4">

  <img src="img/universidade.JPG" alt="Universidade Federal da Fronteira Sul" id="img-universidade" class="img-fluid mx-auto d-block">

  <div id="texto-sobre">
    <p>
      Nascido da idéia da professora da universidade, Dra. Graziela Simone Tonin, durante a aula de Engenharia de Software 2. O iPesquisa vem se desenvolvendo a medida
      que a sua comunidade aumenta. Com o objetivo de integrar pessoas com os devidos interesses ciêntificos em comum, o iPesquisa visa divulgar pesquisas, 
      de forma que seus desenvolvedores possam recrutar pessoas para contribuir, demonstrar o que está sendo desenvolvido
      tanto para a comunidade como para as empresas. Os alunos que possuem interesse em ingressar na área cientifica também, podem utilizar o iPesquisa
      para encontrar o que a universidade possui em desenvolvimento, de acordo com sua área de interesse.
    </p>

    <!-- <p>
      <strong>Integrantes:</strong>
      <br>Igor Tomaz
      <br>Daniel Welter
      <br>Claiton Trindade
    </p> -->
  </div>
</div>

<!-- Sidebar Widgets Column -->

</div>
      <!-- /.row -->

      </div>
  </div>
  <!-- /.container -->

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
