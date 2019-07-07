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

  <title>iPesquisa - Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-login.css" rel="stylesheet">
  <link href="css/blog-layout.css" rel="stylesheet">

  <!-- Custom fonts downloaded -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">

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
            <a class="nav-link" href="index.php">Início
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre</a>
        </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Login</a>
            <span class="sr-only">(current)</span>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  

  <!-- Page Content -->
  <div id="wrapper">
    <div class="container body-content">
    
    <div class="row content">
      
    <div class="form-signin bg-success">
        <div class="text-center mb-4">
            <img class="mb-4" src="img/logo.png" id="logo">
            <h1 class="h3 mb-3 font-weight-normal">iPesquisa</h1>
        </div>
        <form action="./api/validaLogin.php" method="post">
          <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="E-mail" required autofocus>
          </div>
          <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
          </div>
          <!-- <div class="checkbox mb-3">
              <label>
                  <input type="checkbox" value="Lembre-me">
                  Lembre-me
              </label>
          </div> -->
          <input class="btn btn-lg btn-primary btn-lock" id="botaoLogin" type="submit" value="Entrar">
        </form>
        
    </div>
    
  </div>
  <?php
      if (isset($_GET['login']))
        echo '<br><div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center;">
               Nenhum usuário encontrado para os dados informados!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    ?>
      <!-- /.row -->

      </div>
  </div>
  <!-- /.container -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
