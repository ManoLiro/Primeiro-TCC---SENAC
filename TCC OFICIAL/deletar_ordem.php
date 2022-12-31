<?php
include "config.php";
include('protecao.php');

$cod_serviço = $_GET['cod_serviço'];


$sql = "DELETE FROM ordem_de_serviço WHERE cod_serviço = $cod_serviço";

$query = $mysqli->query($sql);

if($query){

	header("location:alerta_apagar.php");

}else{

    header("location:alerta_apagar_falhou.php");
}

?>
