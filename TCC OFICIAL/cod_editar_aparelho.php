<?php
include "config.php";
include('protecao.php');

$cod_aparelho = $_POST['cod_aparelho'];
$cod_cliente = $_POST['cod_cliente'];
$Entrada_Aparelho = $_POST['Data_Entrada'];
$Tipo = $_POST['Tipo_Aparelho'];
$Modelo = $_POST['Modelo_Aparelho'];
$Avaria = $_POST['Avaria'];
$Qtde = $_POST['Qtde'];


$sql = "UPDATE aparelhos SET cod_cliente='$cod_cliente',Entrada_Aparelho='$Entrada_Aparelho',Tipo='$Tipo',Modelo='$Modelo',Avaria='$Avaria',Qtde='$Qtde' WHERE cod_aparelho='$cod_aparelho'";

$query = $mysqli->query($sql);

if($query){

	header("location: alerta_editar.php");

}else{

	header("location: alerta_editar_falhou.php");
}


?>

