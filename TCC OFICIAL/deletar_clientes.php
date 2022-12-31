<?php
include "config.php";
include('protecao.php');

$cod_cliente = $_GET['cod_cliente'];


$sql = "DELETE FROM clientes WHERE cod_cliente = $cod_cliente";

$query = $mysqli->query($sql);

if($query){

	header("location:alerta_apagar.php");

}else{

    header("location:alerta_apagar_falhou.php");
}

?>