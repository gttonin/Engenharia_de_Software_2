<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iPesquisa</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Início
              <span class="sr-only">(current)</span>
            </a>
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
  <div id="wrapper">
  <div class="container body-content" id="posts">
    

  <div class="row content">

    <!-- Blog Entries Column -->
    <div class="col-md-8">


      <h1 class="my-4">Artigos</h1>

      <div v-if="postsNaPagina.length > 0">

            <blog-post v-for="post in postsNaPagina" :post="post" inline-template>
              <div class="card mb-4">
                  <img class="card-img-top" src="./imagemArtigoPadrao.png" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="card-title">{{post.tituloPostagem}}</h2>
                    <p class="card-text">{{ post.resumo }}</p>
                    <a :href="linkPostagem" class="btn btn-primary">Leia Mais &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                    <div class="d-flex">
                      <div class="mr-auto">
                      Postado em {{ post.dataPostagem }} por
                    <a :href="linkAutor">{{ post.autor }}</a>
                      </div>
                      <div>
                        {{post.categoria}}
                      </div>
                    </div>
                    
                  </div>
                </div>
        </blog-post>
        
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item" :class="{'disabled': pagina == 1}">
          <a href="#" class="page-link" @click.prevent="paginaAnterior">&larr; Anterior</a>
        </li>
        <li class="page-item" :class="{'disabled': pagina == totalPaginas}">
          <a href="#" class="page-link" @click.prevent="paginaProxima">Próxima &rarr;</a>
        </li>
      </ul>

      <p>Pagina {{ pagina }} de {{ totalPaginas }}</p>
        
              
      </div>

      <div v-if="postsNaPagina.length === 0">
        <p>Nenhum post encontrado</p>
      </div>


    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Pesquisar</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisar por titulo ou autor..." v-model="busca">
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categorias</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-unstyled mb-0">
                <li v-for="categoria in categorias">
                  <a href="#" @click.prevent="selecionarCategoria(categoria)" :class="{'text-success': categoriaSelecionada === categoria}">{{ categoria }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

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

  
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

    <script src="/js/posts.js"></script>


</body>

</html>
