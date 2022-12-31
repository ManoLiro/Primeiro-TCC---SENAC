<?php

include('protecao.php');

?> 
<!DOCTYPE html>
<html lang="pt-br">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <title>Senatech</title>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style_servico.css">
      <link rel="stylesheet" href="css/style_sidebar.css">
  </head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <img id="logo" src="imagens/logo_traçado.png">
        </div>

        <ul class="list-unstyled components">
            <p>Bem Vindo!</p>
            <hr>
            <li>
              <a href="tela_servico.php">
                <i class="fas fa-sticky-note"></i>
                Serviços
              </a>
            </li>
            <li>
              <a href="tela_aparelhos.php">
              <i class="fas fa-mobile-alt"></i>
                Aparelhos
              </a>
            </li>
            <li>
              <a href="tela_clientes.php">
                <i class="fas fa-users"></i>
                Clientes
              </a>
            </li>
            <li>
            <a href="faq.php">
              <i class="fas fa-question"></i>
              FAQ
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i id="foto-user" class="fas fa-user"></i>
            <?php print($_SESSION['email'])?>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" >
            <li><a class="dropdown-item" href="logout.php">Deslogar</a></li>
          </ul>
        </div>
    </nav>
    <!--conteudo-->
    <div class="row align-items-md-stretch" style="margin: auto">
      <div class="col-12" style="margin-top: -20%;">
        <div class="form-inline">
          <img id="logo-servicos" src="imagens/logo_servicos.png">
        </div>
      </div>
      <div class="col-4">
        <div id="borda1" class="h-100 p-5 rounded-3">
          <h2>Pendente</h2>
          <p style="color: rgb(80, 80, 80); font-size: 1.3em;">Serviços pendentes, clique aqui para mais detalhes</p>
          <a href="tela_pendentes.php"><button class="btn" type="button">Detalhes</button></a>
        </div>
      </div>
      <div class="col-4">
        <div id="borda2" class="h-100 p-5 rounded-3">
          <h2>Concluido</h2>
          <p style="color: rgb(80, 80, 80); font-size: 1.3em;">Serviços concluidos, clique aqui para mais detalhes</p>
          <a href="tela_concluido.php"><button class="btn" type="button">Detalhes</button></a>
        </div>
      </div>
         <div class="col-4">
        <div id="borda2" class="h-100 p-5 rounded-3">
          <h2>Ordem de Serviço</h2>
          <p style="color: rgb(80, 80, 80); font-size: 1.3em;">Ordem de Serviços, clique aqui para mais detalhes</p>
          <a href="tela_ordem_servico.php"><button class="btn" type="button">Detalhes</button></a>
        </div>
      </div>
      </div>
    <hr>
</div>

<script src="https://kit.fontawesome.com/9dc309a19f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
