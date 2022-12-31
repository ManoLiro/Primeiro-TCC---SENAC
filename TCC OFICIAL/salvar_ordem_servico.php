<?php
include('config.php');

$cod_orçamento = $_POST['cod_orçamento'];
$cod_aparelho = $_POST['cod_aparelho'];
$cod_cliente = $_POST['cod_cliente'];
$cod_funcionarios = $_POST['cod_funcionarios'];
$cod_empresa = $_POST['cod_empresa'];
$Status = $_POST['Status'];
$Data_saida = $_POST['Data_saida'];



$inserir =  "INSERT INTO `ordem_de_serviço`(`cod_serviço`, `cod_orçamento`, `cod_aparelho`, `cod_cliente`, `cod_funcionarios`, `cod_empresa`, `Status`, `Data_saida`) VALUES ('','$cod_orçamento','$cod_aparelho','$cod_cliente','$cod_funcionarios','$cod_empresa','$Status','$Data_saida')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro_ordem.php");
}else {
	header("location: alerta_cadastro_ordem_falhou.php");
}






?>