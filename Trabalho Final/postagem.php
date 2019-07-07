<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Título do artigo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
  <link href="css/blog-layout.css" rel="stylesheet">

</head>

<body>
  <br>
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
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Título do artigo</h1>

        <!-- Author -->
        <p class="lead">
          por
          <a href="#">Pesquisador exemplo</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Postado em 10 de Junho de 2019</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://cienciaciudadana.cl/wp-content/uploads/2017/02/afiche-ciencia-40x60cms-1.jpg" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">citação de
            <cite title="Source Title">alguém famoso</cite>
          </footer>
        </blockquote>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Mande uma mensagem:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Pesquisar</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Pesquisar por...">
              <span class="input-group-btn">
                <button class="btn btn-secondary bg-primary" type="button">Ir</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Ciência da Computação</a>
                  </li>
                  <li>
                    <a href="#">Administração</a>
                  </li>
                  <li>
                    <a href="#">Economia</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Medicina</a>
                  </li>
                  <li>
                    <a href="#">História</a>
                  </li>
                  <li>
                    <a href="#">Ciências Sociais</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="card my-4">
          <h5 class="card-header">Contate o autor</h5>
          <div class="card-body">
            <div class="input-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#entrar-contato">
                    Entrar em contato
                </button>
            </div>
          </div>
        </div>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <div class="modal fade" id="entrar-contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Contato</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form id="form-contato" action="api/salvaMensagemContato.php" method="POST">
                      <input name="idPostagem" style="display: none" value="<?php echo $_GET['id'] ?>"/>
                      <div class="form-group">
                          <label for="nome-contato">Seu Nome *</label>
                          <input type="nome" name="nome" class="form-control" id="nome-contato" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="email-contato">Seu Email *</label>
                          <input type="email" name="email" class="form-control" id="email-contato" placeholder="">
                      </div>

                      <div class="form-group">
                          <label for="assunto-contato">Assunto *</label>
                          <input type="assunto" name="assunto" class="form-control" id="assunto-contato" placeholder="">
                      </div>

                      <div class="form-group">
                          <label for="mensagem-contato">Mensagem *</label>
                          <textarea name="mensagem" class="form-control" id="mensagem-contato" rows="3"></textarea>
                      </div>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" id="enviar-mensagem" class="btn btn-primary">Enviar</button>
                  </form>
              </div>

          </div>
      </div>
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
