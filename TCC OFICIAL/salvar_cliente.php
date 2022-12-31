<?php
include('config.php');

$nome_completo = $_POST['nome_completo'];
$endereco = $_POST['endereco'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];

$inserir =  "INSERT INTO `clientes`(`cod_cliente`, `Nome`, `CPF`, `Endereço`, `Telefone`) VALUES ('','$nome_completo','$CPF','$endereco','$telefone')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro_cliente.php");
}else {
	header("location: alerta_cadastro_cliente_falhou.php");
}






?>