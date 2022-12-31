<?php
include('config.php');

$cod_cliente = $_POST['cod_cliente'];
$Data_Entrada = $_POST['Data_Entrada'];
$Tipo_Aparelho = $_POST['Tipo_Aparelho'];
$Modelo_Aparelho = $_POST['Modelo_Aparelho'];
$Avaria = $_POST['Avaria'];
$Qtde = $_POST['Qtde'];


$inserir =  "INSERT INTO `aparelhos`(`cod_aparelho`, `cod_cliente`, `Entrada_Aparelho`, `Tipo`, `Modelo`, `Avaria`, `Qtde`) VALUES ('','$cod_cliente','$Data_Entrada','$Tipo_Aparelho','$Modelo_Aparelho','$Avaria','$Qtde')";

$inserido = mysqli_query($mysqli, $inserir);

if($inserido) {

	header("location: alerta_cadastro_aparelho.php");
}else {
	header("location: alerta_cadastro_aparelho_falhou.php");
}






?>