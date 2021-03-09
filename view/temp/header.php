<?php session_start(); ?>

<link rel="icon" href="../view/img/favicon.png"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="./css/main.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
  $( function () {
    $('.dropdown-toggle').dropdown();
  } );
</script>

<nav class="navbar navbar-expand-lg bg-green fixed-top">
  <a class="navbar-brand" href="/">
  	<img src="img/logoCrawler2.png">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="input-group" style="width: 60%; margin:auto;">
    	<input class="form-control" type="search" placeholder="O que está procurando?" aria-label="Search" style="border-right: none;">
    	<div class="input-group-append">
    	<div class="input-group-text" style="background-color: #FFF"><i class="fas fa-search"></i></div>
    </div>
  	</div>

    <!-- links na home autenticado -->
    <?php if (isset($_SESSION['logged'])): ?>

      <a id="add_anun" class="nav-link" href="/view/novo_anuncio.php"><i class="fas fa-plus"></i> Novo Anúncio</a>


			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action">
          <i class="fas fa-user"></i> 
          <?= $_SESSION['username'] ?>
      </a>
				<div class="dropdown-menu dropdown-menu-right">
					<a href="#" class="dropdown-item">Perfil</a>
					<div class="dropdown-divider"></div>
					<a href="../controller/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sair</a>
				</div>
			</div>

    <!-- links na home sem autenticacao -->
    <?php else: ?>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="/view/home.php">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="/view/cadastro.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="#">Sobre</a>
        </li>
      </ul>
    <?php endif ?>

  </div>
</nav>

<div id="new_anun">
  <?php include 'novo_anuncio.php'; ?>
  <script type="text/javascript">
    $('#add_anun').on('click', function(event) {
      event.preventDefault();
      /* Act on the event */
      $('#new_anun').css('display', 'block');

    });
    $('.close').on('click', function(event) {
      event.preventDefault();
      /* Act on the event */
      $('#new_anun').css('display', 'none');

    });
  </script>
</div>