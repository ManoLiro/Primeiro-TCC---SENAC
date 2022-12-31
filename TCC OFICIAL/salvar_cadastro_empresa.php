<?php
include('config.php');

$nome = $_POST['nome'];
$CNPJ = $_POST['CNPJ'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

$inserir =  "INSERT INTO `empresas`(`cod_empresa`, `Nome`, `CNPJ`, `Endereço`, `Email`) VALUES ('','$nome','$CNPJ','$endereco','$email')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro_empresa.php");
}else {
	header("location: alerta_cadastro_empresa_falhou.php");
}






?>