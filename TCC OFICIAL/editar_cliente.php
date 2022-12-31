<?php
$cod_cliente = $_GET['cod_cliente'];
include "config.php";
$sql = "SELECT * FROM clientes WHERE cod_cliente = $cod_cliente";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();
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
    <link rel="stylesheet" href="css/style_add_cliente.css">

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
        <img id="logo-cliente" src="imagens/cliente.png">
      </div>
      <div id='entrada_dados' class='container'>
        <h4>Cadastro de Clientes</h4>
        <div class="box">
          <form class="row g-3" action="cod_editar_cliente.php" method="POST">
           <input type="hidden" name="cod_cliente" value="<?php echo $cod_cliente; ?>">
              <div class="col-md-12">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" value="<?php echo $dados[1]; ?>">
              </div>
              <div class="col-md-12">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $dados[3]; ?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">CPF</label>
                <input type="number" class="form-control" id="CPF" name="CPF" max="99999999999" value="<?php echo $dados[2]; ?>">
              </div>
              <div class="col-md-6">
                <label class="form-label">Telefone</label>
                <input type='tel' class="form-control"  id="telefone" name="telefone" max="99999999999" value="<?php echo $dados[4]; ?>">
              </div>
              <div class="col-md-12">
                <div class="text-center">
                  <a> 
                  <button type="submit" class="btn">Alterar</button>
                </a>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
      
  </div>
<script src="https://kit.fontawesome.com/9dc309a19f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>