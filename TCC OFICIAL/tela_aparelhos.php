<?php
include('config.php');

$sql = "SELECT * FROM aparelhos";
$query = $mysqli->query($sql);

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
    <link rel="stylesheet" href="css/style_clientes.css">

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
    <!-- Tabela --> 
    
    <div id="table" class="container">
      <div class="form-inline">
        <img id="logo-cliente" src="imagens/aparelhos.png">
      </div>
      <nav class="navbar navbar-light bg-light">
        <a href="add_aparelhos.php"><button id="borda" type="button" class="btn btn-light">
          Adicionar
          <i class="fas fa-plus"></i>
        </button>
        </a>
      </nav>
      <table id="example" class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Codigo do aparelho</th>
              <th scope="col">Codigo do cliente</th>
              <th scope="col">Entrada do Aparelho</th>
              <th scope="col">Tipo</th>
              <th scope="col">Modelo</th>
              <th scope="col">Avaria</th>
              <th scope="col">Qtde</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>

              
                <?php while ($dados = $query->fetch_array()) { ?>
                    <tr>
                        <th scope="row"><?php echo $dados['cod_aparelho']; ?></th>
                        <th scope="row"><?php echo $dados['cod_cliente']; ?></th>
                        <th scope="row"><?php echo $dados['Entrada_Aparelho']; ?></th>
                        <th scope="row"><?php echo $dados['Tipo']; ?></th>
                        <th scope="row"><?php echo $dados['Modelo']; ?></th>
                        <th scope="row"><?php echo $dados['Avaria']; ?></th>
                        <th scope="row"><?php echo $dados['Qtde']; ?></th>
                        <td>
                        <a href="#">
                        <a href="editar_aparelhos.php?p=editar&cod_aparelho=<?php echo $dados['cod_aparelho'];?>">
                        <button class="btn">
                          Editar
                        <i class="fas fa-edit"></i>
                        </button>
                        </a>
                        <a href="deletar_aparelhos.php?cod_aparelho=<?php echo $dados['cod_aparelho']; ?>">
                        <button class="btn">
                          Excluir
                        <i class="fas fa-trash"></i>
                        </button></a>
                        </td>
                        </tr>
                        </tr>
                                <?php } ?>
            
 
            
          </tbody>
      </table>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function(){
      $('#example').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "search":         "Procurar:",
                "next":       "Proximo",
                "previous":   "Anterior",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
  </script>

<script src="https://kit.fontawesome.com/9dc309a19f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/9dc309a19f.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</body>
