<?php
include "config.php";
include('protecao.php');

$cod_orçamento = $_GET['cod_orçamento'];


$sql = "DELETE FROM orçamentos WHERE cod_orçamento = $cod_orçamento";

$query = $mysqli->query($sql);

if($query){

	header("location:alerta_apagar.php");

}else{

    header("location:alerta_apagar_falhou.php");
}

?>
