<?php
include('config.php');

$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$CPF = $_POST['CPF'];
$senha = $_POST['senha'];
$funcao = $_POST['funcao'];

$inserir =  "INSERT INTO `funcionarios`(`cod_funcionarios`, `cod_empresa`, `Função`, `Nome`, `CPF`, `Endereço`, `email`, `senha`) VALUES ('','1','$funcao','$nome_completo','$CPF','$endereco','$email','$senha')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro.php");
}else {
	header("location: alerta_cadastro_falhou.php");
}






?>