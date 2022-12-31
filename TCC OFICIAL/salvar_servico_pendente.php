<?php
include('config.php');

$cod_aparelho = $_POST['cod_aparelho'];
$cod_cliente = $_POST['cod_cliente'];
$data_orçamento = $_POST['data_orçamento'];
$valor = $_POST['valor'];
$cod_empresa = $_POST['cod_empresa'];
$defeito = $_POST['defeito'];
$solução = $_POST['solução'];
$status = $_POST['status'];
$nome_cliente = $_POST['nome_cliente'];


$inserir =  "INSERT INTO `orçamentos`(`cod_orçamento`, `Defeito`, `Solução`, `valor`, `Data_orçamento`, `cod_aparelho`, `cod_cliente`, `cod_empresa`, `nome_cliente`, `status`) VALUES ('','$defeito','$solução','$valor','$data_orçamento','$cod_aparelho','$cod_cliente','$cod_empresa','$nome_cliente','$status')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro_aparelho.php");
}else {
	header("location: alerta_cadastro_aparelho_falhou.php");
}






?>