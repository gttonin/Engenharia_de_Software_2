<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iPesquisa - Nova Postagem</title>

  <style>
      #btnPostar{
        padding: 10px 30px;
        border: 2px solid #28a745;
        border-radius: 10px;
        font-weight: 700;
        text-transform: uppercase;
        transition: all 0.4s;
      }
      #btnPostar:hover{
        background: white !important;
        color: #28a745;
      }

      .navbar .container{
        margin-left: 0;
      }

      .navbar-brand{
        transition: all 0.4s;
      }

      .navbar-brand:hover{
        transform: scale(1.1);
      }

	  .nav.nav-pills li a{
		  text-shadow: none !important;
		  color: white !important;
		  background-color: transparent !important;
		  box-shadow: none !important;
		  transition: all 0.5s;
		  margin-left: 25px;
	  }

	  .nav.nav-pills li a:hover{
			background-color: lightgray !important;
			color: black !important;
	  }

	  @media screen and (max-width: 1000px){
		  .nav.nav-pills{
			  display: none !important;
		  }
	  }

  </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-novaPostagem.css" rel="stylesheet">
  <link href="css/blog-layout.css" rel="stylesheet">
  <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
  <link rel="shortcut icon" href="http://mindmup.s3.amazonaws.com/lib/img/favicon.ico" >
  <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="js/jquery.hotkeys.js"></script>
  <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="bootstrap-wysiwyg.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">iPesquisa</a>

	  <ul class="nav nav-pills">
		<li class="active">
			<a href="index.php">Início</a>
		</li>
		<li><a href="login.php">Login</a></li>
		<li><a href="registro.php">Registro</a></li>
		</ul>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sobre</a>
            <span class="sr-only">(current)</span>  
        </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
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

<!-- Blog Entries Column -->
<div class="col-md-10">

  <h4 class="mb-3">Nova Postagem</h4>
  <hr class="mb-4">

    <form action="./api/cadastrarArtigo.php" method="post">
        <div class="form-group">
        <label for="titulo">Titulo da Postagem</label>
        <input type="text" class="form-control col-md-8" name="tituloPostagem" id="tituloPostagem" aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="autor">Autor</label>
          <input type="text" class="form-control col-md-8" name="autor" id="autor" aria-describedby="helpId" placeholder="">
        </div>

        <div class="form-group">
          <label for="autor">Categoria</label>
          <input type="text" class="form-control col-md-8" name="categoria" id="autor" aria-describedby="helpId" placeholder="Ciência da Computação, Matématica, etc...">
        </div>

        <div class="form-group">
        <label for="resumo">Resumo</label>
        <textarea class="form-control col-md-8" name="resumo" id="resumo" rows="3"></textarea>
        </div>

        <div class="form-group">
        <label for="textoTrabalho">Texto Principal</label>
        <textarea class="" name="textoTrabalho" id="summernote" rows="10"></textarea>

        
        </div>

        <!-- <div class="form-group">
          <label for="trabalhoAcademico"></label>
          <input type="file" class="form-control-file" name="trabalhoAcademico" id="trabalhoAcademico" placeholder="" aria-describedby="fileHelpId">
          <small id="fileHelpId" class="form-text text-muted">Adicione seu trabalho</small>
        </div> -->
  
        <input type="submit" class="bg-success" id="btnPostar" value="Salvar" >
    </form>

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
  <script src="js/blog-novaPostagem.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script>
    $('#summernote').summernote();
  </script>
</body>

</html>
