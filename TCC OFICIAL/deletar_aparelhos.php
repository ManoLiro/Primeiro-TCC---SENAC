<?php
include "config.php";
include('protecao.php');

$cod_aparelho = $_GET['cod_aparelho'];


$sql = "DELETE FROM aparelhos WHERE cod_aparelho = $cod_aparelho";

$query = $mysqli->query($sql);

if($query){

	header("location:alerta_apagar.php");

}else{

    header("location:alerta_apagar_falhou.php");
}

?>
