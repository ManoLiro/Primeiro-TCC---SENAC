<?php
include "config.php";
include('protecao.php');

$cod_serviço = $_POST['cod_serviço'];
$cod_cliente = $_POST['cod_cliente'];
$cod_aparelho = $_POST['cod_aparelho'];
$cod_orçamento = $_POST['cod_orçamento'];
$cod_funcionarios = $_POST['cod_funcionarios'];
$Data_saida = $_POST['Data_saida'];
$cod_empresa = $_POST['cod_empresa'];
$Status = $_POST['Status'];


$sql = "UPDATE ordem_de_serviço SET cod_orçamento='$cod_orçamento',cod_aparelho='$cod_aparelho',cod_cliente='$cod_cliente',cod_funcionarios='$cod_funcionarios',cod_empresa='$cod_empresa',Status='$Status',Data_saida='$Data_saida' WHERE cod_serviço = $cod_serviço ";

$query = $mysqli->query($sql);

if($query){

	header("location: alerta_editar.php");

}else{

	header("location: alerta_editar_falhou.php");
}


?>

