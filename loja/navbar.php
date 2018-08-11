<?php
session_start();
include('verifica_login.php');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="nav-link">
    Olá, <?php echo $_SESSION['usuario'];?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!--<a class="nav-link" href="index.php">TFD <span class="sr-only">(current)</span></a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opções
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/login/loja/pagina-inicial.php">Cadastro viagem</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sobre.php">Sobre</a>
        </div>
      </li>
    </ul>
    <img width="2%" src="/login/img/brazao.png" class="img-fluid" alt="Responsive image">
    <ul class="navbar-nav ">
      <li class="nav-item">
          <a class="nav-link" href="/login/logout.php">Sair</a>
      </li>
    </ul>
</nav>