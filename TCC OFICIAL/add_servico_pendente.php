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
            <li><a class="dropdown-item" href="index.php">Deslogar</a></li>
          </ul>
        </div>
    </nav>
    <!-- Cadastro -->
    <div class="container">
      <div>
        <img id="logo-servicos" src="imagens/logo_servicos.png">
      </div>
        <div class='row'>
          <div class="col-12" style="margin-bottom: 5%;">
              <div class="box">
                <form action="salvar_servico_pendente.php" method="POST">
                  <h4>Informações do Orçamento</h4>
                  <div class="row">
                    <div class="col-4">
                      <label for="exampleFormControlTextarea1" class="form-label">Codigo aparelho</label>
                      <input type="number" class="form-control" name="cod_aparelho" id="exampleFormControlInput1">
                    </div>
                     <div class="col-4">
                      <label for="exampleFormControlTextarea1" class="form-label">Nome do Cliente</label>
                      <input type="text" class="form-control" name="nome_cliente" id="exampleFormControlInput1">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="form-label">Data do orçamento</label>
                      <input type="date" class="form-control" name="data_orçamento" id="exampleFormControlInput1">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="form-label">Valor do serviço</label>
                      <input type="number" class="form-control" name="valor" id="exampleFormControlInput1">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="form-label">Codigo do cliente</label>
                      <input type="number" class="form-control" name="cod_cliente" id="exampleFormControlInput1">
                    </div>
                    <div class="col-4">
                      <label for="exampleFormControlInput1" class="form-label">Codigo da empresa</label>
                      <input type="number" class="form-control" name="cod_empresa" id="exampleFormControlInput1">
                    </div>
                    <div class="col-12">
                      <label for="exampleFormControlTextarea1" class="form-label">Defeito</label>
                      <textarea class="form-control" name="defeito" id="exampleFormControlTextarea1" rows="3"></textarea>
            
                      <label for="exampleFormControlTextarea1" class="form-label">Solução</label>
                      <textarea class="form-control" name="solução" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-6" style="margin-top: 20px;">
                    <select class="form-select" name="status" aria-label="Status">
                    <option selected>Pendente</option>
                    <option value="Concluido">Concluido</option>
                    </select>
                    </div>

                    <div class="col-md-12">
                      <div class="text-center">
                        <button type="submit" class="btn">Adicionar</button>
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