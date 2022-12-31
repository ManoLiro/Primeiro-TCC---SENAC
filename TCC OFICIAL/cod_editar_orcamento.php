<?php
include "config.php";
include('protecao.php');

$cod_orçamento = $_POST['cod_orçamento'];
$cod_cliente = $_POST['cod_cliente'];
$cod_aparelho = $_POST['cod_aparelho'];
$nome_cliente = $_POST['nome_cliente'];
$data_orçamento = $_POST['data_orçamento'];
$valor = $_POST['valor'];
$cod_empresa = $_POST['cod_empresa'];
$defeito = $_POST['defeito'];
$solução = $_POST['solução'];
$status = $_POST['status'];


$sql = "UPDATE orçamentos SET Defeito='$defeito',Solução='$solução',valor='$valor',Data_orçamento='$data_orçamento',cod_aparelho='$cod_aparelho',cod_cliente='$cod_cliente',cod_empresa='$cod_empresa',nome_cliente='$nome_cliente',status='$status' WHERE cod_orçamento = $cod_orçamento ";

$query = $mysqli->query($sql);

if($query){

	header("location: alerta_editar.php");

}else{

	header("location: alerta_editar_falhou.php");
}


?>
