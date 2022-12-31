
<?php
include('config.php');
if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM funcionarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

        
            $_SESSION['email'] = $usuario['email'];

            header("Location: tela_servico.php");

        } else {
            include('erro_login.php');
        }

    }

}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Senatech</title>
  </head>
  <body>
    <!-- Logo -->
    <div class="row">
      <div class='col-12'>
        <div class="logo_login">
          <img class="logo_login" src="imagens/logo_login.png">
        </div>
      </div>
      <!-- Login -->
      <div id="box" class="col-6">
        <div id="box_grad" class="border-radius">
          <form class="row g-3" action="" method="POST">
            <div class="col-md-12">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-12">
              <label class="form-label">Senha</label>
              <input type="password" name="senha" class="form-control" required>
            </div>
            <div class="col-md-12" style="text-align: center;">
              <a> 
                <button type="submit" href="tela_servico.php" class='btn'>Entrar</button>
              </a>
            </div>
            <p class="col-md-12">Primeiro acesso?
              <a href="cadastrar.php">Cadastrar</a>
            </p>
            <p class="col-md-12">
              <a href="cadastro_empresa.php"Cadastrar> Clique para cadastrar a empresa </a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
<?php 
