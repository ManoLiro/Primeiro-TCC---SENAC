<?php

include('protecao.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Senatech</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_sidebar.css">
    <link rel="stylesheet" href="css/style_add_servicos.css">

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
            <a href="#">
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
    <div class="container">
      <div>
        <img id="logo-servicos" src="imagens/aparelhos.png">
      </div>
        <div class='row'>
          <div class="col-12" style="margin-bottom: 5%;">
              <div class="box">
                <h4>Cadastro de aparelhos</h4>
                <form action="salvar_cadastro_aparelhos.php" method="POST">
                    <div class="row">
                          <div class="col-4">
                          <label for="exampleFormControlInput1" class="form-label">Codigo do Cliente</label>
                          <input type="number" class="form-control" name="cod_cliente" id="exampleFormControlInput1" required>
                        </div>

                        <div class="col-4">
                          <label for="exampleFormControlInput1" class="form-label">Data Entrada</label>
                          <input type="date" class="form-control" name="Data_Entrada" id="exampleFormControlInput1" required>
                        </div>

                        <div class="col-4">
                          <label for="exampleFormControlInput1" class="form-label">Quantidade de aparelhos</label>
                          <input type="number" class="form-control" name="Qtde" id="exampleFormControlInput1" required>
                        </div>
                        
                        <div class="col-12" style="margin-bottom: 5%;">
                          <label for="exampleFormControlInput1" class="form-label">Tipo do aparelho</label>
                          <input type="text" class="form-control" name="Tipo_Aparelho" id="exampleFormControlInput1" required>

                          <label for="exampleFormControlInput1" class="form-label">Modelo do aparelho</label>
                          <input type="text" class="form-control" name="Modelo_Aparelho" id="exampleFormControlInput1" required>

                          <label for="exampleFormControlTextarea1" class="form-label">Avaria</label>
                          <input type="text" class="form-control" name="Avaria" id="exampleFormControlInput1" required>
                        </div>

                        <div class="col-md-12">
                          <div class="text-center">
                            <a>
                            <button type="submit" class="btn">Adicionar</button>
                            </a>
                          </div>
                        </div>
                    </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </div>
<script src="https://kit.fontawesome.com/9dc309a19f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>